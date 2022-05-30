<?php
switch ($_SESSION['Error']){
    case 1: echo '<script language="javascript">alert("Incorrect Password");</script>'; break;
    case 2: echo '<script language="javascript">alert("Incorrect Email");</script>'; break;
    case 3: echo '<script language="javascript">alert("Email Already on use");</script>'; break;
    case 4; echo '<script language="javascript">alert("You must repeat your password correctly");</script>'; break;
    case 5; echo '<script language="javascript">alert("Unable To Continue Changes Reverted");</script>'; break;
    case 6; echo '<script language="javascript">alert("You already have that Adress");</script>'; break;
    case 7; echo '<script language="javascript">alert("The Shopping Cart is empty");</script>'; break;
    case 8; echo '<script language="javascript">alert("You must select a delivery Adress");</script>'; break;
    case 9; echo '<script language="javascript">alert("You must select a payment method");</script>'; break;
    case 10; echo'<script language="javascript">alert("You must fill all the fields");</script>'; break;
}
$_SESSION['Error'] = 0;
