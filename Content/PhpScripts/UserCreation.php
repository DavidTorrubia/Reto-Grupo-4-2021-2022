<?php
error_reporting(0);
session_start();
include "PhpClasses/UserClass.php";
//User Creation And Value Assign
if ($_SESSION['User'] == null) {
    $User = new User();
    $_SESSION['User'] = serialize($User);
    session_commit();
    ini_set('session.cookie_secure', '0');
    $Error = 0;
    $_SESSION['Error'] = $Error;
}
$WebPageUser = unserialize($_SESSION['User']);
