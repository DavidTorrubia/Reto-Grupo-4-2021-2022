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
    $count = 0;
    $Directions = $_POST["Checkbox"];
    $id = $_POST["id"];
    echo count($Directions);
    $sql = "DELETE FROM DIRECCIONES WHERE ID_DIRECCION IN (";
    $sql2 = "UPDATE PEDIDOS SET ID_DIRECCION = 9 WHERE ID_DIRECCION in (";
    //Borra la direccion seleccionada 
    for ($i=0;$i < count($Directions) ; $i++){
        if ($count > 0){
            $sql .= ","; 
        }
        $sql .= "'".$Directions[$i]."'";
        $sql2 .= "'".$Directions[$i]."'";
        $count ++;
    }
    if ($count > 0){
        try {
            $sql2 .= ")";
            $result = mysqli_query($con, $sql2) or die('Error');
            $sql2 = "COMMIT";
            $result = mysqli_query($con, $sql2) or die('Error');
        } catch (mysqli_sql_exception $ex) {
            $_SESSION['Error'] = 5;
            $sql = "ROLLBACK";
            $result = mysqli_query($con, $sql) or die('Error');
        }
        try {
            echo $sql;
            $sql .= ")";
            $result = mysqli_query($con, $sql) or die('Error');
            $sql = "COMMIT";
            $result = mysqli_query($con, $sql) or die('Error');
        } catch (mysqli_sql_exception $ex) {
            $_SESSION['Error'] = 5;
            $sql = "ROLLBACK";
            $result = mysqli_query($con, $sql) or die('Error');
        }
    }
    
}

header("Location: ../HTML/UserPage.php");
