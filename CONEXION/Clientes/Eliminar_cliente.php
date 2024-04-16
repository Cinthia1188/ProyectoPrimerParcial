<?php
include '../conexion/conexion.php';
$idcliente =$_POST['id'];

$cadenaEliminar ="UPDATE clientes SET ACTIVO='0' WHERE ID='$idcliente '";
   
   $eliminar = mysqli_query($conexion,$cadenaEliminar);
   echo "ok";

   ?>