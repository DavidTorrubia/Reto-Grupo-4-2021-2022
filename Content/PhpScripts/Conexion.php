<?php
// Evitar que salgan errores por pantalla
error_reporting(0);
//implementacion de la base de datos
$user="root";
$pass="";
$server="localhost";
$db="reto";
$con= new mysqli($server,$user,$pass,$db);

if($conexion->connect_errno) {
  die("La conexion ha fallado" . $conexion->connect_errno); 
} 
?>