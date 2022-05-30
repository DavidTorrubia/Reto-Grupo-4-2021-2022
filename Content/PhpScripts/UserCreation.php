<?php
error_reporting(0);
session_start();
include "PhpClasses/UserClass.php";
//En caso de no existir usuario lo crea y le asigna sus valores
if ($_SESSION['User'] == null) {
    $User = new User();
    $_SESSION['User'] = serialize($User);
    session_commit();
    ini_set('session.cookie_secure', '0');
    $Error = 0;
    $_SESSION['Error'] = $Error;
}
$WebPageUser = unserialize($_SESSION['User']);
