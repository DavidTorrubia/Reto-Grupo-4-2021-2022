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

    $country = trim($_POST["country"]);
    $city =  trim($_POST["city"]);
    $adress =  trim($_POST["adress"]);
    $stairs =  trim($_POST["stairs"]);
    $floor = trim($_POST["floor"]);
    $lastname =  trim($_POST["lastlame"]);
    $postalCode = trim($_POST["p_code"]);
    $sql = "";
    $UserWeb = unserialize($_SESSION['User']);




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

header("Location: ../HTML/UserPage.php");
