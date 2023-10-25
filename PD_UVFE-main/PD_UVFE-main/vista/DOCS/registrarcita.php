<!DOCTYPE html>
<html lang="es">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="../CSS/docs.css">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <title>Diosam</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-custom navbar-mainbg">
            <a class="navbar-brand" href="#">
                <img src="../IMG/LDiosam.png" alt="Bootstrap" width="100" height="80">
                <span class="texto">Diosam</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php"><i class="fas fa-tachometer-alt"></i>Inicio</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../DOCS/galeria.php"><i class="far fa-address-book"></i>Galería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Conócenos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Visítanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../DOCS/login.php"><i class="far fa-chart-bar"></i>Iniciar Sesion</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
      <body>
       <form class="login-form">
        <h2>Registro</h2>
        <div class="form-floating mb-3">
    
            <input type="name" class="form-control" id="floatingInput" placeholder="Name">
            <label for="floatingInput">Nombre</label>
          </div> 
           <div class="form-floating mb-3">
            <select class="form-select" id="selectServicio" name="selectServicio">
                <option value="opcion1">Colorimetria cabello</option>
                <option value="opcion2">Maquillaje</option>
                <option value="opcion3">Manicura</option>
                <option value="opcion3">Pedicura</option>
                <option value="opcion3">Peinados</option>
                <option value="opcion3">Cortes damas</option>
                <option value="opcion3">Cortes caballero</option>
                <option value="opcion3">Cepillado y planchado</option>
                <option value="opcion3">Keratina</option>
                
            </select>
            <label for="selectServicio">Selecciona un Servicio</label>
        </div>
          <div class="form-floating mb-3">
            <label for="fecha"></label>
            <input type="date" id="fecha" name="fecha">
          </div>
          <div class="form-floating mb-3">
            <label for="hora"></label>
            <input type="time" id="hora" name="hora">
          </div>
          <br>

<div class="buttom-1">
    <div class="button-danger">
        <button type="button" class="btn btn-danger ">Registrar cita</button>
      </div>  
</div>
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
    
    


   