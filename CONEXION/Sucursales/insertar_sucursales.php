<?php
include '../conexion/conexion.php';

//variables POST
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];


$cadenaInsertar="INSERT INTO sucursales (NOMBRE, DIRECCION, TELEFONO,FECHAHORA,ACTIVO, USUARIO)VALUES('$nombre','$direccion','$telefono','$fechahora','1','1')";

$insertar=mysqli_query($conexion,$cadenaInsertar);
echo "ok";
?>