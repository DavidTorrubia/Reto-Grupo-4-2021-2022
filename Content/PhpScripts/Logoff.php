<?php
error_reporting(0);
//Si la sesion esta activa, la cierra
if (!isset($_SESSION)) {
    session_start();
    include "PhpClasses/UserClass.php";
    $Localuser = unserialize($_SESSION['User']);
    $Localuser->set_name("Invitado");
    $Localuser->set_id(null);
    $Localuser->set_isAdmin(0);
    $Localuser->set_isLogged(false);
    $_SESSION['User'] = serialize($Localuser);
}

header("Location: ../HTML/LandingPage.php");
