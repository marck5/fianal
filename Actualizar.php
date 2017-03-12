<?php
include "conexion.php";

$Id=$_POST["id"];
$nom=$_POST["Nom"];
$dir=$_POST["Dir"];
$rfc=$_POST["Rfc"];
$tel=$_POST["Tel"];
$clasif=$_POST["Clasif"];
$foto=$_POST["Foto"];
$lat=$_POST["Lat"];
$longit=$_POST["Long"];

$sql=" UPDATE servicio SET Nombre_servicio='$nom', Direccion='$dir', RFC='$rfc', Telefono='$tel', Clasificacion='$clasif', Foto='$foto', Latitud='$lat', Longitud='$longit' where Id_servicio='$Id'";

$reg=mysqli_query($conn,$sql);
if($reg){
echo "Nombre:".$nom." Dirección:".$dir." RFC:".$rfc." Tel:".$tel." Clasificación:".$clasif." Foto:".$foto." Latitud:".$lat." Longitud:".$longit;
}else{
echo "Error al registrar los datos:".mysqli_error();	
}

mysqli_close($conn);
?>