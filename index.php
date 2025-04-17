<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <!-- conect fot typed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <!-- connect for bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/24bd5bdb3a.js" crossorigin="anonymous"></script>
    <!-- fullpagejs -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.css" /> -->
    <!-- scrollreveal -->
<script src="https://unpkg.com/scrollreveal"></script>
    <title>Home - Portfolio</title>
</head>
<body>

    <div id="fullpage">

        <!-- Sección 1 -->
        <div class="section">
            <div id="particless">
                <!-- particles.js container -->
                <div id="particles-js"></div>
                <!-- Scripts para Particles.js -->
                <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
                <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
    
                <!-- Navbar -->
                <div class="header">
                    <ul class="nav">
                        <li><a href="#main">Home</a></li>
                        <li><a href="https://drive.google.com/drive/folders/1kWptqopqEoh6t3IWHquD5DzBP2b_VrQB?usp=sharing">Projects</a></li>
                        <li><a href="#contactForm">Contact</a></li>
                    </ul>
                </div>
    
                <!-- Presentación -->
                <div class="mainPresentation" id="main">
                    <h1><span id="typed-text"></span></h1>
                    <p><span id="typed-text2"></span></p>
                    <button class="firstBtn">
                        <span class="text-container">
                            <span class="text"><a href="https://drive.google.com/drive/folders/1kWptqopqEoh6t3IWHquD5DzBP2b_VrQB?usp=sharing">View Projects</a></span>
                        </span>
                    </button>
                </div>
            </div> <!-- Fin de particless -->
        </div> <!-- Fin de sección 1 -->
    
        <!-- Sección 2 (About Me) -->
<div class="section">
    <div class="description">
        <h2 class="about"><i class="fa-solid fa-user"></i>About Me</h2>
        <div class="about-text">
            <p>Hello! I'm Rodrigo, a web developer and graphic designer from Argentina.</p>
            <p>I have experience working with trucking, trailer, and automotive agencies, designing visuals and developing websites tailored to their needs. Currently, I continue collaborating with these companies, but I'm always looking to grow and take on new challenges. That's why I'm open to freelance opportunities—let's create something great together!</p>
        </div>

        <div class="technologies">
            <div class="container text-center my-5">
                <h2><i class="fa-solid fa-gears"></i>Technologies & Tools</h2>

                <!-- Desarrollo -->
                <h3 class="deve">Development</h3>
                <div class="row justify-content-center">
                    <div class="col-md-3 col-6"><img src="imgs/hmtl-edit.webp" alt="HTML" class="tech-logo"></div>
                    <div class="col-md-3 col-6"><img src="imgs/css-edit.webp" alt="CSS" class="tech-logo"></div>
                    <div class="col-md-3 col-6"><img src="imgs/js-edit.webp" alt="JavaScript" class="tech-logo"></div>
                    <div class="col-md-3 col-6"><img src="imgs/bootstrap-edit.webp" alt="Bootstrap" class="tech-logo"></div>
                </div>

                <div class="row justify-content-center mt-3">
                    <div class="col-md-3 col-6"><img src="imgs/PHP-Logo.wine.webp" alt="PHP" class="tech-logo"></div>
                    <div class="col-md-3 col-6"><img src="imgs/mysql_PNG35.webp" alt="MySql" class="tech-logo"></div>
                </div>

                <!-- Diseño -->
                <h3 class="mt-5">Design Tools</h3>
                <div class="row justify-content-center">
                    <div class="col-md-3 col-6"><img src="imgs/design/ps-edit.webp" alt="Photoshop" class="tech-logo"></div>
                    <div class="col-md-3 col-6"><img src="imgs/design/ai-edit.webp" alt="Illustrator" class="tech-logo"></div>
                    <div class="col-md-3 col-6"><img src="imgs/design/corel-edit.webp" alt="CorelDraw" class="tech-logo"></div>
                    <div class="col-md-3 col-6"><img src="imgs/design/figma-edit.webp" alt="Figma" class="tech-logo"></div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- Fin de sección About Me -->

    <!-- toast bootstrap     -->

    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="successToast" class="toast toast-custom align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    ✅ Your message has been sent successfully.
                </div>
            </div>
        </div>
    </div>
    
    
    


        <!-- Sección 3 (Contact Form) -->
<div class="section">
    <div class="contactForm" id="contactForm">
        <h2 class="text-center mb-4">Stay in contact!</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5"> 
                    <form action="php/form.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Text your message here</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        
                        <button class="animated-button">
                            <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                              ></path>
                            </svg>
                            <span class="text">Submit now :D</span>
                            <span class="circle"></span>
                            <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                              ></path>
                            </svg>
                          </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> <!-- Fin de sección Contact Form -->

    
    </div> <!-- Fin del fullpage -->

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
          <p class="mb-1">&copy; 2025 | Made with ❤️ and ☕ by <a href="https://www.linkedin.com/in/rodrigo-machado-547814205/" target="_blank">Rodrigo Machado</a></p>
            <a href="#" class="text-white me-3"><a href="https://www.linkedin.com/in/rodrigo-machado-547814205/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></a>
            <a href="#" class="text-white me-3"><a href="https://github.com/Rodr1gg" target="_blank"><i class="fa-brands fa-github"></i></a></a>
            <a href="#" class="text-white me-3"><a href="#"><i class="fa-brands fa-discord"></i></a></a>
          </p>
        </div>
      </footer>

      <script src="js/particles.js"></script>
    <script src="js/main.js"></script>
<!-- typedscript -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- formvalidation -->
 <script src="js/validation.js"></script>
<!-- fullpage -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"></script>
 <script src="fullpage.js"></script> -->
</body>
</html>
