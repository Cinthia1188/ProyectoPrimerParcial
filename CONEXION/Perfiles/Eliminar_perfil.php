<?php
include '../conexion/conexion.php';
$idperfil =$_POST['id'];

$cadenaEliminar ="UPDATE perfiles SET ACTIVO='0' WHERE Id='$idperfil '";
   
   $eliminar = mysqli_query($conexion,$cadenaEliminar);
   echo "ok";

   ?>