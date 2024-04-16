<?php
include '../conexion/conexion.php';

date_default_timezone_set('America/Monterrey');
$fechahora = date('Y-m-d H:i:s');
//Variable post 
$nombre = $_POST['nombre'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$direccion = $_POST['direccion'];
$codigo_postal = $_POST['codigo_postal'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$sexo = $_POST['sexo'];
$curp = $_POST['curp'];


$cadenaInsertar ="INSERT INTO clientes (NOMBRE,AP_PATERNO,AP_MATERNO,DIRECCION,CODIGO_POSTAL,FECHA_NACIMIENTO,TELEFONO,CORREO,SEXO,CURP,FECHAHORA,ACTIVO,USUARIO)
 VALUES ('$nombre','$ap_paterno','$ap_materno','$direccion','$codigo_postal','$fecha_nacimiento','$telefono','$correo','$sexo','$curp','$fechahora','1','1' )";

$insertar = mysqli_query($conexion,$cadenaInsertar);
echo "ok";
?>