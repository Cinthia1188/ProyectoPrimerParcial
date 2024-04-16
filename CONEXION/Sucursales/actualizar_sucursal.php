<?php
include '../conexion/conexion.php';
$idSucursal=$_POST['id'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$activo=$_POST['activo'];
$usuario=$_POST['usuario'];

$cadenaActualizar="UPDATE SUCURSALES SET NOMBRE='$nombre', DIRECCION='$direccion', TELEFONO='$telefono',FECHA='$fecha',ACTIVO='$activo',USUARIO='usuario' WHERE ID='$idSucursal'";

$actualizar=mysqli_query($conexion,$cadenaActualizar);
echo "ok";
?>