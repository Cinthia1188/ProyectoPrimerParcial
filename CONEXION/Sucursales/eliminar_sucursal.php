<?php
include '../conexion/conexion.php';
$idSucursal=$_POST['id'];

$cadenaEliminar="UPDATE SUCURSALES SET ACTIVO='0' WHERE ID='$idSucursal'";
$eliminar=mysqli_query($conexion,$cadenaEliminar);

echo "ok";
?>