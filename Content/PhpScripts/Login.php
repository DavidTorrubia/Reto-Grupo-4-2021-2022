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
    $email = $_GET["email"];
    $password = $_GET["password"];
    $sql = "Select * from USUARIOS where CORREO like '" . $email . "'";
    $result = mysqli_query($con, $sql) or die('Error');
    $rowcount = mysqli_fetch_assoc($result);
    //Comprueba los datos del usuario y si son correctos lo registra
    if ($rowcount > 0) {
        if ($rowcount["CONTRASENA"] == $password) {
            $UserWeb = unserialize($_SESSION['User']);
            $UserWeb->set_name($rowcount["NOMBRE"]);
            $UserWeb->set_id($rowcount["ID_USUARIO"]);
            $UserWeb->set_isAdmin($rowcount["ES_ADMIN"]);
            $UserWeb->set_isLogged(true);
            $_SESSION['User'] = serialize($UserWeb);
        } else {
            $_SESSION['Error'] = 1;
        }
    } else {
        $_SESSION['Error'] = 2;
    }
}

header("Location: ../HTML/LandingPage.php");
