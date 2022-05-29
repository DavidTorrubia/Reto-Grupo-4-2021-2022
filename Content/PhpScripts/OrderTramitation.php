<?php
error_reporting(1);
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


    $direccion = $_GET["Checkbox2"];
    $payment = $_GET["Checkbox3"];
    $finalprice = $_GET['price'];
    $UserWeb = unserialize($_SESSION["User"]);
    if (count($_SESSION["cart"]) > 0) {
        if ($direccion != null) {
            if ($payment != null) {
                try {
                    $sql = "SELECT MAX(ID_PEDIDO) FROM PEDIDOS";
                    $result = mysqli_query($con, $sql) or die('Error');
                    $maxid = mysqli_fetch_assoc($result);
                    $id = $maxid["MAX(ID_PEDIDO)"] + 1;
                    try {
                        $sql = "INSERT INTO PEDIDOS (ID_PEDIDO,ID_USUARIO,ID_DIRECCION,ID_TIENDA,FECHA) VALUES (" . $id . "," . $UserWeb->get_id() . "," . $direccion[0] . ",1,'" . date("Y/m/d") . "')";
                        $result = mysqli_query($con, $sql) or die('Error');
                        $sql = "COMMIT";
                        $result = mysqli_query($con, $sql) or die('Error');
                    } catch (mysqli_sql_exception $ex) {
                        $_SESSION['Error'] = 5;
                        $sql = "ROLLBACK";
                        $result = mysqli_query($con, $sql) or die('Error');
                    }
                    $ids = array_keys($_SESSION["cart"]);
                    for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
                        $sql = "SELECT PRECIO FROM PRODUCTOS WHERE ID_PRODUCTO=" . $ids[$i];
                        $result = mysqli_query($con, $sql) or die('Error');
                        $precio = mysqli_fetch_assoc($result);
                        try {
                            $sql = "INSERT INTO CONTIENE (ID_PEDIDO,ID_PRODUCTO,CANTIDAD,PRECIOUNITARIO) VALUES (" . $id . "," . $ids[$i] . "," . $_SESSION["cart"][$ids[$i]] . "," . $precio["PRECIO"] . ")";
                            $result = mysqli_query($con, $sql) or die('Error');
                            $sql = "COMMIT";
                            $result = mysqli_query($con, $sql) or die('Error');
                        } catch (mysqli_sql_exception $ex) {
                            $_SESSION['Error'] = 5;
                            $sql = "ROLLBACK";
                            $result = mysqli_query($con, $sql) or die('Error');
                        }
                    }
                    try {
                        $sql = "INSERT INTO FACTURAS (ID_USUARIO,ID_PEDIDO,ID_METPAGO,DETALLE,PRECIOTOTAL) VALUES (" . $UserWeb->get_id() . "," . $id . "," . $payment[0] . ",'Factura de tipo normal'," . $finalprice . ")";
                        $result = mysqli_query($con, $sql) or die('Error');
                        $sql = "COMMIT";
                        $result = mysqli_query($con, $sql) or die('Error');
                    } catch (mysqli_sql_exception $ex) {
                        $_SESSION['Error'] = 5;
                        $sql = "ROLLBACK";
                        $result = mysqli_query($con, $sql) or die('Error');
                    }
                    $num = count($_SESSION["cart"]);
                    echo $num;
                    $ids = array_keys($_SESSION["cart"]);
                    for ($u = 0; $u < $num; $u++) {
                        unset($_SESSION["cart"][$ids[$u]]);     
                    }
                } catch (mysqli_sql_exception $ex) {
                    $_SESSION['Error'] = 5;
                    $sql = "ROLLBACK";
                    $result = mysqli_query($con, $sql) or die('Error');
                }
            } else {
                $_SESSION["Error"] = 9;
            }
        } else {
            $_SESSION["Error"] = 8;
        }
    } else {
        $_SESSION["Error"] = 7;
    }
}
header("Location: ../HTML/ShoppingCart.php");
