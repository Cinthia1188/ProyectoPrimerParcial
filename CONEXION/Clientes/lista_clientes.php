<?php
include '../conexion/conexion.php';
$datos=[];
$cadenaConsulta="SELECT 	ID,NOMBRE,AP_PATERNO,AP_MATERNO,DIRECCION,CODIGO_POSTAL,FECHA_NACIMIENTO,TELEFONO,CORREO,SEXO,CURP,FECHAHORA,ACTIVO,USUARIO FROM clientes where ACTIVO='1'";
$ConsultaClientes=mysqli_query($conexion,$cadenaConsulta);
while($row=mysqli_fetch_array($ConsultaClientes)){
    $btnEliminar="<button type='button' class='btn btn-sm btn btn-danger' onclick='eliminar($row[0])' >
    <i class='fa fa-trash' aria-hidden='true'></i></button>";
    $datos[]=[
        "id"=>$row[0],
        "nombre"=>$row[1],
        "ApPaterno"=>$row[2],
        "ApMaterno"=>$row[3],
        "direccion"=>$row[4],
        "codigo_postal"=>$row[5],
        "fecha_nacimiento"=>$row[6],
        "telefono"=>$row[7],
        "correo"=>$row[8],
        "sexo"=>$row[9],
        "curp"=>$row[10],
         "fecha"=>$row[11],
        "opciones"=>$btnEliminar
        
        
    ];
}
echo json_encode($datos);
?>