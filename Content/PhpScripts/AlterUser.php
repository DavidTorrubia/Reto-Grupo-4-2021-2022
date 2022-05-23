<?php
error_reporting(0);
if (!isset($_SESSION)) {
    session_start();
    include "PhpClasses/UserClass.php";
    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "reto";
    $con = new mysqli($server, $user, $pass, $db);

    if ($conexion->connect_errno) {
        die("La conexion ha fallado" . $conexion->connect_errno);
    }
    $email = $_GET["Email"];
    $password = $_GET["Password"];
    $name = $_get["Name"];
    $lastname = $_get["LastName"];
    $sql = "UPDATE USUARIOS SET ";

    if ($email != "" || $email != null){
        
    }

    
}

header("Location: ../HTML/UserPage.php");