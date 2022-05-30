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
    $email = $_POST["email"];
    $password =  $_POST["password"];
    $passwordRepeat =  $_POST["passwordrepeat"];
    $name =  $_POST["name"];
    $lastname =  $_POST["lastlame"];
    $sql = "UPDATE USUARIOS SET ";
    $count = 0;
    $UserWeb = unserialize($_SESSION['User']);
    //A partir de los parametros que da el usuario se le cambian sus respectivos datos
    if ($email != null || $password != null || $name != null || $lastname != null) {
        if ($email != "" && $email != null) {
            $AuxSql = "SELECT CORREO FROM USUARIOS WHERE CORREO LIKE '" . $email . "'";
            $result = mysqli_query($con, $AuxSql) or die('Error');
            $rowcount = mysqli_fetch_assoc($result);
            if ($rowcount["CORREO"] == null || $rowcount < 1) {
                $sql .= " CORREO = '" . $email . "'";
                $count++;
            } else {
                $_SESSION['Error'] = 3;
            }
        }
        if ($password != "" &&  $password != null) {
            if ($count > 0) {
                $sql .= ",";
            }
            if (($passwordRepeat != "" &&  $passwordRepeat != null) && $passwordRepeat == $password) {
                $sql .= " CONTRASENA = '" . $password . "'";
                $count++;
            } else {
                $_SESSION['Error'] = 4;
            }
        }
        if ($name != "" &&  $name != null) {
            if ($count > 0) {
                $sql .= ",";
            }
            $sql .= " NOMBRE = '" . $name . "'";
            $count++;
            $UserWeb->set_name($name);
        }
        if ($lastname != "" &&  $lastname != null) {
            if ($count > 0) {
                $sql .= ",";
            }
            $sql .= " APELLIDOS = '" . $lastname . "'";
            $count++;
        }
        if ($_SESSION['Error'] == 0) {
            try {

                $sql .= " WHERE ID_USUARIO = " . $UserWeb->get_id();
                $result = mysqli_query($con, $sql) or die('Error');
                $sql = "COMMIT";
                $result = mysqli_query($con, $sql) or die('Error');
                $_SESSION["User"] = serialize($UserWeb);
            } catch (mysqli_sql_exception $ex) {
                $_SESSION['Error'] = 5;
                $sql = "ROLLBACK";
                $result = mysqli_query($con, $sql) or die('Error');
            }
        }
    }
}

header("Location: ../HTML/UserPage.php");
