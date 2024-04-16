<?php
include '../conexion/conexion.php';
$datos=[];
$cadenaConsulta="SELECT ID,NOMBRE,DIRECCION,TELEFONO,FECHAHORA FROM sucursales WHERE ACTIVO=1";
$consultaSucursales=mysqli_query($conexion,$cadenaConsulta);
while($row=mysqli_fetch_array($consultaSucursales)){
      $btnEliminar="<button type='button' class='btn btn-sm btn-danger' onclick='eliminar($row[0])'>
    <i class='fa fa-trash' aria-hidden='true'></i>
    </button>";
    $datos[]=[
        "id"=>$row[0],
        "nombre"=>$row[1],
        "direccion"=>$row[2],
        "telefono"=>$row[3],
        "fecha"=>$row[4],  
        "opciones"=>$btnEliminar  
    ];
}
echo json_encode($datos);
?>