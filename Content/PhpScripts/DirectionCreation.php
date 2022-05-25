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

    $country = strtolower(trim($_POST["country"])) ;
    $city =  strtolower(trim($_POST["city"]));
    $adress =  strtolower(trim($_POST["adress"]));
    $stairs =  strtolower(trim($_POST["stairs"]));
    $floor =  strtolower(trim($_POST["floor"]));
    $postalCode = strtolower(trim($_POST["p_code"]));
    $WebUser = unserialize($_SESSION["User"]);
    $FinalAdress = $country."/".$city."/".$adress."/";
    if ($stairs != null && $stairs != ""){
        $FinalAdress .= $stairs."/";
    } else {
        $FinalAdress .= " /";
    }
    if ($floor != null && $floor != ""){
        $FinalAdress .= $floor."/";
    } else {
        $FinalAdress .= " /";
    }
    $FinalAdress .= $postalCode;
    $sql = "SELECT * FROM DIRECCIONES WHERE ID_USUARIO = ".$WebUser->get_id();
    $result = mysqli_query($con, $sql) or die('Error');
    $verif = true;
    while ($row = mysqli_fetch_assoc($result)){
        if ($FinalAdress == $row["DIRECCION"]){
            $verif = false;
            $_SESSION["Error"] = 6;
        }
    }
    if ($verif == true){
        try {
            $sql = "INSERT INTO DIRECCIONES (ID_USUARIO,DIRECCION) VALUES (".$WebUser->get_id().",'".$FinalAdress."')";
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
