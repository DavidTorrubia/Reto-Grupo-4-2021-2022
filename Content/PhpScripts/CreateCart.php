<?php
error_reporting(0);
session_start();
if ($_SESSION['cart'] == null) {
    $cart = array();
    $_SESSION["cart"] = $cart;
    session_commit();
    ini_set('session.cookie_secure', '0');
    $Error = 0;
    $_SESSION['Error'] = $Error;
}
