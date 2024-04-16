<?php
// Iniciar sesión
session_start();

// Configurar el tiempo de vida de la sesión (en segundos)
$tiempo_vida = 60; // 1 minuto de inactividad

// Verificar si el usuario está autenticado
if (!isset($_SESSION['nombreusuario'])) {
    header("Location: ../login/index.php");
    exit;
}

// Verificar el tiempo de inactividad
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $tiempo_vida)) {
    // Destruir la sesión si ha expirado por inactividad
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage

    // Redirigir al usuario a la página de inicio de sesión
    header("Location: ../login/index.php");
    exit;
}

// Renovar la sesión si hay actividad
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../Inicio/index.php">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../personas/index.php">Personas <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Sucursales/index.php">Sucursales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Clientes/Index.php">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Perfiles/Index.php">Perfiles</a>
        </li>

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../login/cerrar_sesion.php">Cerrar Sesión</a>
          </li>
        </ul>
        <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</body>

</html>