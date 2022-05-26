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
    $repassword = $_GET["repassword"];
    $sql = "Select * from USUARIOS where CORREO like '" . $email . "'";
    $result = mysqli_query($con, $sql) or die('Error');
    $rowcount = mysqli_fetch_assoc($result);

    if ($rowcount == 0) {
        if ($password == $repassword) {
            try {
                $sql = "INSERT INTO USUARIOS (CORREO,CONTRASENA,ES_ADMIN) VALUES ('" . $email . "','" . $password . "', 0)";
                $result = mysqli_query($con, $sql) or die('Error');
                $sql = "COMMIT";
                $result = mysqli_query($con, $sql) or die('Error');
                $sql = "SELECT * FROM USUARIOS WHERE CORREO LIKE '" . $email . "'";
                $result = mysqli_query($con, $sql) or die('Error');
                if ($rowcount = mysqli_fetch_assoc($result)) {
                    $UserWeb = unserialize($_SESSION["User"]);
                    $UserWeb->set_name($rowcount["NOMBRE"]);
                    $UserWeb->set_id($rowcount["ID_USUARIO"]);
                    $UserWeb->set_isAdmin($rowcount["ES_ADMIN"]);
                    $UserWeb->set_isLogged(true);
                    $_SESSION["User"] = serialize($UserWeb);
                }
            } catch (mysqli_sql_exception $ex) {
                $_SESSION['Error'] = 5;
                $sql = "ROLLBACK";
                $result = mysqli_query($con, $sql) or die('Error');
            }
        }
    } else {
        $_SESSION['Error'] = 3;
    }
}
header("Location: ../HTML/LandingPage.php");
