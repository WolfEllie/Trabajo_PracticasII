<?php
function conn(){
$hostname="localhost";
$bdusuario="root";
$clave="";
$bdnombre="newpage";

//Guardar la conexion en la base de datos
$conectar=mysqli_connect($hostname,$bdusuario,$clave,$bdnombre);
return $conectar;
}
?>