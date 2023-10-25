<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,700;1,700&display=swap');
          </style>
        <link rel="stylesheet" href="../CSS/docs.css">
        <link rel="stylesheet" href="../CSS/navbar.css">
        <title>Diosam</title> 
    </head>
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
      <body>
       <form class="login-form" method="POST">
        <h2>Registro</h2>
        <?php
        // include("../../modelo/conexion.php");
        include("../../controlador/registrar_user.php");
        
        ?>
        <div class="form-floating mb-3">
    
            <input minlength="4" maxlength="20" type="name" class="form-control" id="name_user" name="name_user" placeholder="Name" required autofocus>
            <label for="floatingInput">Nombres</label>
          </div> 
          <div class="form-floating mb-3">
            <input minlength="4" maxlength="40" type="lastname" class="form-control" id="floatingInput" placeholder="Apellidos" name="lastname_user" requiered>
            <label for="floatingInput">Apellidos</label>
          </div>
          <div class="form-floating mb-3">
            <input maxlength="40" type="email" class="form-control" id="floatingInput" placeholder="Email" name="email_user" required>
            <label for="floatingInput">Correo Electrónico</label>
          </div>
          <div class="form-floating mb-3">
            <input minlength="8" maxlength="40"   type="password" alt="alphanumeric" class="form-control" id="floatingInput"  placeholder="Contraseña" name="password_user" required>
            <label for="floatingInput">Contraseña</label>
          </div>
          <div class="button-danger">
            <input type="submit" class="btn btn-danger" value="Registrarse" name="registro" ></input>
          </div>  
         <br>
         <br>
         <div class = "button-pss"><button type="button" class="btn btn-outline-secondary">¿Olvido su contraseña?</button></div>
         <div class="button-rgt"><button type="button" class="btn btn-" ><a href="../DOCS/login.php">Iniciar Sesion</a></button></div>
         </button>
       </form>
      </body>





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
    </html>
    

    
    
   