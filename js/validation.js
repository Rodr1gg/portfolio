document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("#contactForm form");
    const nameInput = document.getElementById("name");
    const emailInput = document.getElementById("email");
    const messageInput = document.getElementById("message");

    // Función para crear un mensaje de error
    function showError(input, message) {
        let errorDiv = input.nextElementSibling;
        if (!errorDiv || !errorDiv.classList.contains("error-message")) {
            errorDiv = document.createElement("div");
            errorDiv.classList.add("error-message");
            input.parentNode.appendChild(errorDiv);
        }
        errorDiv.textContent = message;
    }

    // Función para limpiar el mensaje de error
    function clearError(input) {
        let errorDiv = input.nextElementSibling;
        if (errorDiv && errorDiv.classList.contains("error-message")) {
            errorDiv.remove();
        }
    }

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Evita que la página se recargue

        let isValid = true;

        // Validación del Nombre
        if (nameInput.value.trim().length < 3) {
            showError(nameInput, "Name must be at least 3 characters long.");
            isValid = false;
        } else {
            clearError(nameInput);
        }

        // Validación del Email
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(emailInput.value.trim())) {
            showError(emailInput, "Please enter a valid email address.");
            isValid = false;
        } else {
            clearError(emailInput);
        }

        // Validación del Mensaje
        if (messageInput.value.trim().length < 10) {
            showError(messageInput, "Message must be at least 10 characters long.");
            isValid = false;
        } else {
            clearError(messageInput);
        }

        // Si la validación falla, detener el envío del formulario
        if (!isValid) {
            return; // No continuar con el envío si no es válido
        }

        // Si el formulario es válido, procesar con fetch
        let formData = new FormData(form);

        fetch("php/form.php", { 
            method: "POST",
            body: formData
        })
        .then(response => response.text()) // Espera el resultado de PHP
        .then(data => {
            console.log("Datos del servidor:", data); // Muestra los datos devueltos por el servidor
            if (data.includes("Mensaje enviado correctamente")) {
                // Mostrar el toast de éxito
                let toast = new bootstrap.Toast(document.getElementById("successToast"));
                toast.show();

                // Limpiar los campos del formulario
                form.reset();
            } else {
                alert("Hubo un error al enviar el mensaje: " + data);
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("Hubo un error al procesar el formulario.");
        });
    });
});
