<?php
session_start();
require_once 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreusuario = $_POST['nombreusuario'];
    $pas = $_POST['pas'];

    // Consulta SQL para verificar las credenciales y el estado activo del usuario
    $sql = "SELECT * FROM usuarios WHERE nombreusuario = '$nombreusuario' AND pas = '$pas' AND activo = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Credenciales válidas, iniciar sesión
        $_SESSION['nombreusuario'] = $nombreusuario;
        header("Location: ../Inicio/index.php"); // Cambio de la ruta de redirección
    } else {
        // Verificar si las credenciales son correctas pero el usuario está inactivo
        $sql = "SELECT * FROM usuarios WHERE nombreusuario = '$nombreusuario' AND pas = '$pas'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // Usuario inactivo, mostrar mensaje de error
            header("Location: index.php?error=2");
        } else {
            // Credenciales inválidas, redirigir al login con mensaje de error
            header("Location: index.php?error=1");
        }
    }
}
?>