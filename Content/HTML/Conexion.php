<?php
error_reporting(0);

$user="root";
$pass="";
$server="localhost";
$db="reto";
$con= new mysqli($server,$user,$pass,$db);
$conexion= null;

if($conexion->connect_errno) {
  die("La conexion ha fallado" . $conexion->connect_errno); 
} 

?>