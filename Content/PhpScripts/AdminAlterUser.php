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

    $id = $_GET["userselec"];
    $selec = $_GET["Action"];
    $sql = "Select * from USUARIOS where CORREO ID_USUARIO = " . $id ;
    $result = mysqli_query($con, $sql) or die('Error');
    $rowcount = mysqli_fetch_assoc($result);
    if ($selec == 1) {

    } else if ($selec == 2){
        try {
            $sql = "DELETE FROM table_name WHERE condition;";
            $result = mysqli_query($con, $sql) or die('Error');
            $sql = "COMMIT";
            $result = mysqli_query($con, $sql) or die('Error');
        } catch (mysqli_sql_exception $ex) {
            $_SESSION['Error'] = 5;
            $sql = "ROLLBACK";
            $result = mysqli_query($con, $sql) or die('Error');
        }
    }

    

    header("Location: ../HTML/AdminPage.php");
}
