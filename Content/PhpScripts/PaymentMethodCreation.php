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
    $type = $_GET["type"];
    $WebUser = unserialize($_SESSION["User"]);

    if ($type == 1){
        //Credit card
        $cardnumber = $_GET["card"];
        $cvc = $_GET ["cvc"];
        $expiredate = $_GET["expiredate"];
        if ($cardnumber != null && $cvc != null && $expiredate != null){
            $expiredate = str_replace('/', ' ', $expiredate);
            $endDetail = $cardnumber."/".$cvc."/".$expiredate;
            try {
                $sql = "INSERT INTO METODOSPAGO (ID_TIPOMETPAGO,ID_USUARIO,DETALLE) VALUES (2,".$WebUser->get_id().",'".$endDetail."')";
                $result = mysqli_query($con, $sql) or die('Error');
            } catch (mysqli_sql_exception $ex){
                $_SESSION['Error'] = 5;
                $sql = "ROLLBACK";
                $result = mysqli_query($con, $sql) or die('Error');
            }
        } else {
            $_SESSION["error"] = 10;
        }


    } else if($type == 2) {
        //Paypal
        $email = $_GET["email"];
        if ($email != null){
            try {
                $sql = "INSERT INTO METODOSPAGO (ID_TIPOMETPAGO,ID_USUARIO,DETALLE) VALUES (1,".$WebUser->get_id().",'".$email."')";
                $result = mysqli_query($con, $sql) or die('Error');
            } catch (mysqli_sql_exception $ex){
                $_SESSION['Error'] = 5;
                $sql = "ROLLBACK";
                $result = mysqli_query($con, $sql) or die('Error');
            }  
        }
    } else if ($type == 3){
        //Bank account
        $account = $_GET["account"];
        if ($account != null){
            try {
                $sql = "INSERT INTO METODOSPAGO (ID_TIPOMETPAGO,ID_USUARIO,DETALLE) VALUES (3,".$WebUser->get_id().",'".$account."')";
                $result = mysqli_query($con, $sql) or die('Error');
            } catch (mysqli_sql_exception $ex){
                $_SESSION['Error'] = 5;
                $sql = "ROLLBACK";
                $result = mysqli_query($con, $sql) or die('Error');
            }  
        }
    }
    $sql = "Select * from USUARIOS where CORREO like '" . $email . "'";
    $result = mysqli_query($con, $sql) or die('Error');
    $rowcount = mysqli_fetch_assoc($result);
}
header("Location: ../HTML/UserPage.php");
