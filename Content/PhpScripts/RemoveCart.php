<?php
//Borra el array de la carta 
if (!isset($_SESSION)) {
    session_start();
    $id = $_GET["id"];
    if (array_key_exists($id, $_SESSION["cart"])) {
        unset($_SESSION["cart"][$id]);
    }
}
header("Location: ../HTML/ShoppingCart.php");