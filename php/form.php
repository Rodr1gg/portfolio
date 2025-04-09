<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Método no permitido.");
}

// Incluir la conexión a la base de datos
require_once __DIR__ . '/db_config.php';

// Obtener y sanitizar datos del formulario
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

$name = filter_var($name, FILTER_SANITIZE_STRING);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$message = filter_var($message, FILTER_SANITIZE_STRING);

// Validar los datos
if (empty($name) || empty($email) || empty($message)) {
    echo "Todos los campos son obligatorios.";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Por favor ingrese un correo electrónico válido.";
    exit;
}

// Insertar datos en la base de datos
$stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
    echo "Mensaje enviado correctamente.";
} else {
    echo "Error al enviar el mensaje: " . $stmt->error;
}

// Cerrar conexión
$stmt->close();
$conn->close();
?>
