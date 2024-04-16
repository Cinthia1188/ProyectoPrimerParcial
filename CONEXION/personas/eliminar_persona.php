<?php
include '../conexion/conexion.php';
$idPersona=$_POST['id'];

$cadenaEliminar="UPDATE PERSONAS SET ACTIVO='0' WHERE ID='$idPersona'";
$eliminar=mysqli_query($conexion,$cadenaEliminar);

echo "ok";
?>