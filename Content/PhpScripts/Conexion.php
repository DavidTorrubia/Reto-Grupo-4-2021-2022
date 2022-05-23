<?php
error_reporting(0);

$user="root";
$pass="";
$server="localhost";
$db="reto";
$con= new mysqli($server,$user,$pass,$db);

if($conexion->connect_errno) {
  die("La conexion ha fallado" . $conexion->connect_errno); 
} 

function Insertar_Dir($Adress,$Number,$Stair,$P_Code,$Floor)
{
    $sql = "INSERT INTO DIRECCIONES (CALLE,PISO,ESCALERA,CODIGO_POSTAL,PORTAL) VALUES($Adress,$Number,$Stair,$P_Code,$Floor);";
    $resultado = mysqli_query($GLOBALS['con'], $sql) or die('Error: ' . mysqli_error($GLOBALS['con']));
}

function Datos_User(){
$Adress=$_GET['Adress'];
$Number=$_GET['Number'];
$Stair=$_GET['Stair'];
$P_Code=$_GET['P_Code'];
$Floor=$_GET['Floor'];
}
?>