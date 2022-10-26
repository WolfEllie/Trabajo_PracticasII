<?php
include_once("conex.php");
// Se reciben todos los datos del formulario
$email=$_POST["email"];


echo "Los datos son los siguientes: ";
echo "$email";

$conectar=conn();// Llamamos a la función conectar
$sql= "INSERT INTO datos(email) VALUES 
('$email')";
$result=mysqli_query($conectar,$sql) or trigger_error("Query failed! SQL - Error: ".mysqli_error($conectar));
echo $sql;
?>
