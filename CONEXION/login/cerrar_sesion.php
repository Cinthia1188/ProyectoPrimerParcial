<?php
// Iniciar sesión
session_start();

// Destruir la sesión
session_unset();     // unset $_SESSION variable for the run-time 
session_destroy();   // destroy session data in storage

// Redirigir al usuario a la página de inicio de sesión
header("Location: ../login/index.php");
exit;
?>