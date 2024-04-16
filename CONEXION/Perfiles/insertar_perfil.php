<?php
include '../conexion/conexion.php';

date_default_timezone_set('America/Monterrey');
$fechahora = date('Y-m-d H:i:s');
//Variable post 
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];



$cadenaInsertar ="INSERT INTO perfiles (NOMBRE,DESCRIPCION,FECHAHORA,ACTIVO,USUARIO)
 VALUES ('$nombre','$descripcion','$fechahora','1','1' )";

$insertar = mysqli_query($conexion,$cadenaInsertar);
echo "ok";
?>