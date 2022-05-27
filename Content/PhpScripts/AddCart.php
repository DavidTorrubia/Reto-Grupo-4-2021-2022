<?php
if (!isset($_SESSION)) {
    session_start();
    $id = $_GET["id"];
    $quantity = $_GET["quantity"];
    if (!array_key_exists($id, $_SESSION["cart"])) {
        $_SESSION["cart"][$id] = $quantity;
    } else {
        $_SESSION["cart"][$id] += $quantity;
    }
}
header("Location: ../HTML/Menu.php");
