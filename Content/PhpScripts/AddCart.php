<?php
//Agregar producto del menu al carrito y su cantidad
if (!isset($_SESSION)) {
    session_start();
    $id = $_GET["id"];
    $quantity = $_GET["quantity"];
    if ($quantity == null){
        $quantity = 1;
    }
    if (!array_key_exists($id, $_SESSION["cart"])) {
        $_SESSION["cart"][$id] = $quantity;
    } else {
        $_SESSION["cart"][$id] += $quantity;
    }
}
header("Location: ../HTML/Menu.php");
