<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="vista/CSS/index.css">
    <link rel="stylesheet" href="vista/CSS/navbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <title>Diosam</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-custom navbar-mainbg">
    <a class="navbar-brand" href="#">
                        <img src="vista/IMG/LDiosam.png" alt="Bootstrap" width="100" height="80">
                        <span class="texto">Diosam</span>
                    </a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i>Inicio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="vista/DOCS/galeria.php"><i class="far fa-address-book"></i>Galería</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Conócenos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Visítanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vista/DOCS/login.php"><i class="far fa-chart-bar"></i>Iniciar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>
    </header>
    <div class="contenedor-imagen">
        <img src="vista/IMG/Fondo-Index.jpg" alt="Fondo" class="Fondo-Index">
    </div>
    <div class="cards">
        <div class="card card-anim" style="width: 18rem;">
            <img src="vista/IMG/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Servicios</h5>
              <p class="card-text">Conoce nuestros servicios y explora el poder de crear tu estilo junto a Diosam.</p>
              <a href="javascript:void(0)" class="btn btn-danger" onclick="showConfirmation()">Bienvenido</a>
            </div>
        </div>
        <div class="card card-anim" style="width: 18rem;">
            <img src="vista/IMG/reserva1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Reservas</h5>
                <p class="card-text">Agenda una cita y prepárate para los cambios que tenemos preparados para ti.</p>
                <a href="javascript:void(0)" class="btn btn-danger" onclick="showConfirmation()">Bienvenido</a>
            </div>
        </div>
        <div class="card card-anim" style="width: 18rem;">
    <img src="vista/IMG/cepilloo.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Galería</h5>
        <p class="card-text">Observa la calidad de nuestros trabajos por si quieres alguna referencia.</p>
        <a href="javascript:void(0)" class="btn btn-danger" onclick="showConfirmation()">Bienvenido</a>
    </div>
</div>
</div>
    
    <footer>
        <div class="contenido">
            <ul>
                <li>Información de contacto:</li>
                <li>Teléfono: 123-456-789</li>
                <li>Correo: info@example.com</li>
                <li>Dirección: Calle Principal, Ciudad</li>
            </ul>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script src="vista/JS/scriptNavBar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showConfirmation() {
            Swal.fire({
                title: '¿Quieres ingresar?',
                text: "¡Regístrate gratis para desbloquear todo nuestro contenido y explorar la página a fondo! 🌟",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#FF6464',
                cancelButtonColor: '#C5C5C5',
                confirmButtonText: 'Registrarme'
            }).then((result) => {
                if (result.isConfirmed) {
                    const loadingOverlay = document.createElement('div');
                    loadingOverlay.id = 'loading-overlay';
                    loadingOverlay.innerHTML = '<div class="loader"></div>';
                    document.body.appendChild(loadingOverlay);
                    setTimeout(() => {
                        window.location.href = 'vista/DOCS/registrarse.php';
                    }, 1000);
                }
            });
        }
    </script>
</body>
</html>
