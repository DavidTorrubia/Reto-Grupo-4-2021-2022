<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecoffe - User Page</title>
    <link rel="stylesheet" href="../CSS/MainStyle.css">
    <link rel="stylesheet" href="../CSS/UserPageStyle.css">
    <script src="../JS/HeaderScripts.js"></script>
    <script src="../JS/UserPageScripts.js"></script>
</head>

<body>
    <?php include 'Header.php'; ?>

    <div class="Content">
        <div class="Content-User">
            <div class="Content-User-UserProfile">
                <img src="<?php if ($WebPageUser->get_isLogged() == true) {
                                $sql = "SELECT IMAGENPERFIL FROM USUARIOS WHERE ID_USUARIO =" . $WebPageUser->get_id();
                                $resultado = mysqli_query($con, $sql) or die('Error: ' . mysqli_error($con));
                                while ($row = mysqli_fetch_assoc($resultado)) {
                                    echo $row["IMAGENPERFIL"];
                                    if ($row["IMAGENPERFIL"] == null) {
                                        echo "../Images/defaultUserImage.jpg";
                                    }
                                }
                            } else {
                                echo "../Images/defaultUserImage.jpg";
                            } ?>" class="Content-User-UserProfile-Image">
                <div class="Content-User-UserProfile-Data">
                    <h1 class="Content-User-UserProfile-Data-Username">
                        <?php if ($WebPageUser->get_name() == null) {
                            echo "User" . $WebPageUser->get_id();
                        } else {
                            echo $WebPageUser->get_name();
                        }
                        $sql = "SELECT APELLIDOS FROM USUARIOS WHERE ID_USUARIO =" . $WebPageUser->get_id();
                        $result = mysqli_query($con, $sql) or die('Error');
                        if ($row = mysqli_fetch_assoc($result)) {
                            echo " " . $row["APELLIDOS"];
                        }

                        ?>
                    </h1>
                    <h2 class="Content-User-UserProfile-Data-Email">
                        <?php $sql = "SELECT CORREO FROM USUARIOS WHERE ID_USUARIO =" . $WebPageUser->get_id();
                        $result = mysqli_query($con, $sql) or die('Error');
                        $row = mysqli_fetch_assoc($result);
                        echo $row['CORREO'];
                        ?>
                    </h2>
                    <p class="Content-User-UserProfile-Data-PrincAddress">
                        <?php $sql = "SELECT DIRECCION FROM DIRECCIONES WHERE ID_USUARIO =" . $WebPageUser->get_id();
                        $result = mysqli_query($con, $sql) or die('Error');
                        if ($row = mysqli_fetch_assoc($result)) {
                            echo str_replace(
                                '/',
                                ' ',
                                $row['DIRECCION']
                            );
                        } else {
                            echo "No Address";
                        }

                        ?>
                    </p>
                </div>
            </div>
            <div class="Content-UserConfig">
                <form class="Content-UserConfig-User" method="post" action="../PhpScripts/AlterUser.php">
                    <h1 class="Content-Add-Payment-Header">Update account</h1>
                    <div class="Content-UserConfig-Item half">
                        <h2 class="Content-UserConfig-Item-Header">First Name</h2>
                        <input type="text" class="Content-UserConfig-Item-Field" name="name" placeholder=<?php if ($WebPageUser->get_name() == null) {
                                                                                                                echo "User" . $WebPageUser->get_id();
                                                                                                            } else {
                                                                                                                echo $WebPageUser->get_name();
                                                                                                            } ?>>
                    </div>
                    <div class="Content-UserConfig-Item half">
                        <h2 class="Content-UserConfig-Item-Header">Last Name</h2>
                        <input type="text" class="Content-UserConfig-Item-Field" name="lastname" placeholder=<?php $sql = "SELECT APELLIDOS FROM USUARIOS WHERE ID_USUARIO =" . $WebPageUser->get_id();
                                                                                                                $result = mysqli_query($con, $sql) or die('Error');
                                                                                                                if ($row = mysqli_fetch_assoc($result)) {
                                                                                                                    echo $row["APELLIDOS"];
                                                                                                                    if ($row["APELLIDOS"] == null) {
                                                                                                                        echo "Jhones";
                                                                                                                    }
                                                                                                                } else {
                                                                                                                } ?>>
                    </div>
                    <div class="Content-UserConfig-Item">
                        <h2 class="Content-UserConfig-Item-Header">Email</h2>
                        <input type="text" class="Content-UserConfig-Item-Field" name="email" placeholder=<?php $sql = "SELECT CORREO FROM USUARIOS WHERE ID_USUARIO =" . $WebPageUser->get_id();
                                                                                                            $result = mysqli_query($con, $sql) or die('Error');
                                                                                                            $row = mysqli_fetch_assoc($result);
                                                                                                            echo $row['CORREO'];
                                                                                                            ?>>
                    </div>
                    <div class="Content-UserConfig-Item">
                        <h2 class="Content-UserConfig-Item-Header">Password</h2>
                        <input type="password" class="Content-UserConfig-Item-Field" placeholder="Password" name="password">
                        <h2 class="Content-UserConfig-Item-Header">Repeat Password</h2>
                        <input type="password" class="Content-UserConfig-Item-Field" placeholder="Password" name="passwordrepeat">
                    </div>
                    <input type="submit" class="Content-Add-Payment-Form-submit" type="button" value="Save Changes">
                </form>
                <div class="Content-UserConfig-Item-Direction-Admin">
                    <h1 class="Content-Add-Payment-Header">Update directions</h1>
                    <div class="Content-Add-Payment-type">
                        <button class="Content-Add-Payment-type-item" type="button" onclick="ChangeDirectionState(1)">Create New Address</button>
                        <button class="Content-Add-Payment-type-item" type="button" onclick="ChangeDirectionState(2)">Remove Address</button>
                    </div>
                    <form class="Content-UserConfig-Item-Directions-Content" id="Content-UserConfig-Item-Directions-Content-Create" method="post" action="../PhpScripts/DirectionCreation.php">
                        <div class="Content-UserConfig-Item">
                            <h2 class="Content-UserConfig-Item-Header">Country</h2>
                            <input type="text" class="Content-UserConfig-Item-Field" placeholder="Spain" name="country">
                        </div>
                        <div class="Content-UserConfig-Item">
                            <h2 class="Content-UserConfig-Item-Header">City</h2>
                            <input type="text" class="Content-UserConfig-Item-Field" placeholder="Zaragoza" name="city">
                        </div>
                        <div class="Content-UserConfig-Item">
                            <h2 class="Content-UserConfig-Item-Header">Address</h2>
                            <input type="text" class="Content-UserConfig-Item-Field" placeholder=" Violeta Parra 8" name="adress">
                        </div>
                        <div class="Content-UserConfig-Item half">
                            <h2 class="Content-UserConfig-Item-Header">Stairs' direction</h2>
                            <input type="text" class="Content-UserConfig-Item-Field" placeholder="right" name="stairs">
                        </div>
                        <div class="Content-UserConfig-Item half">
                            <h2 class="Content-UserConfig-Item-Header">Floor</h2>
                            <input type="text" class="Content-UserConfig-Item-Field" placeholder="2B" name="floor">
                        </div>
                        <div class="Content-UserConfig-Item">
                            <h2 class="Content-UserConfig-Item-Header">Postal Code</h2>
                            <input type="text" class="Content-UserConfig-Item-Field" placeholder="50011" name="p_code">
                        </div>

                        <input type="submit" class="Content-Add-Payment-Form-submit" value="Create">
                    </form>
                    <form class="Content-UserConfig-Item-Directions-Content" id="Content-UserConfig-Item-Directions-Content-Remove" method="post" action="../PhpScripts/RemoveDirection.php">
                        <div class="Content-UserConfig-Item-Directions-Content-RemoveList">
                            <div class="Content-UserConfig-Item-Directions-Content-RemoveList-Item Guide">
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header Guide">Country</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header Guide">City</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header Guide">Postal Code</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header Guide">Address</h1>
                            </div>
                            <?php
                            $sql = "SELECT * FROM DIRECCIONES WHERE ID_USUARIO =" . $WebPageUser->get_id();
                            $result = mysqli_query($con, $sql) or die('Error');
                            while ($row = mysqli_fetch_assoc($result)) {
                                $Direction = explode('/', $row["DIRECCION"]);
                            ?>
                                <label class="Content-UserConfig-Item-Directions-Content-RemoveList-Item Example">
                                    <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header"><?php echo ucfirst((strtolower($Direction[0]))); ?></h1>
                                    <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header"><?php echo ucfirst((strtolower($Direction[1]))); ?></h1>
                                    <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header"><?php echo ucfirst((strtolower($Direction[5]))); ?></h1>
                                    <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header"><?php echo ucfirst((strtolower($Direction[2]))); ?></h1>
                                    <input type="checkbox" class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-CheckBox" value="<?php echo $row["ID_DIRECCION"] ?>" name="Checkbox[]">
                                </label>
                            <?php
                            }
                            ?>


                        </div>
                        <input type="submit" class="Content-Add-Payment-Form-submit" value="Remove Selected">
                    </form>
                </div>
            </div>

        </div>
        <div class="Content-Receipts">
            <div class="Content-Receipts-Container">
                <h1 class="Content-Receipts-List-Header"> Receipts </h1>
                <div class="Content-Receipts-List">

                    <?php
                    $sql = "SELECT * FROM FACTURAS WHERE ID_USUARIO =" . $WebPageUser->get_id();
                    $result = mysqli_query($con, $sql) or die('Error');
                    while ($row = mysqli_fetch_assoc($result)) {
                        $sql = "SELECT * FROM PEDIDOS WHERE ID_PEDIDO =" . $row["ID_PEDIDO"];
                        $result2 = mysqli_query($con, $sql) or die('Error');
                        $row2 = mysqli_fetch_assoc($result2)
                    ?>
                        <div class="Content-Receipts-List-Header-Item">
                            <h2 class="Content-Receipts-List-Header-Item-text"><?php echo $row2["FECHA"] ?></h2>
                            <h2 class="Content-Receipts-List-Header-Item-text"><?php echo $row["PRECIOTOTAL"] ?>€</h2>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="Content-Add-Payment">
                <h1 class="Content-Add-Payment-Header">Add payment method</h1>
                <div class="Content-Add-Payment-type">
                    <button class="Content-Add-Payment-type-item" onclick="ChangePaymentMethod(1)"> Credit Card </button>
                    <button class="Content-Add-Payment-type-item" onclick="ChangePaymentMethod(2)"> Paypal </button>
                    <button class="Content-Add-Payment-type-item" onclick="ChangePaymentMethod(3)"> Bank account </button>
                </div>

                <form class="Content-Add-Payment-Form" id="Payment-CreditCard" method="get" action="../PhpScripts/PaymentMethodCreation.php">
                    <div class="Content-UserConfig-Item">
                        <h2 class="Content-UserConfig-Item-Header">Card Number</h2>
                        <input type="text" class="Content-UserConfig-Item-Field" name="card" placeholder="xxxx-xxxx-xxxx">
                    </div>
                    <div class="Content-UserConfig-Item half">
                        <h2 class="Content-UserConfig-Item-Header">CVC</h2>
                        <input type="text" class="Content-UserConfig-Item-Field" name="cvc" placeholder="123">
                    </div>
                    <div class="Content-UserConfig-Item half">
                        <h2 class="Content-UserConfig-Item-Header">Expire Date</h2>
                        <input type="text" class="Content-UserConfig-Item-Field" name="expiredate" placeholder="11/2024">
                    </div>
                    <input type="hidden" value="1" name="type">
                    <input type="submit" class="Content-Add-Payment-Form-submit" value="Create Payment Method">
                </form>
                <form class="Content-Add-Payment-Form" id="Payment-Paypal" method="get" action="../PhpScripts/PaymentMethodCreation.php">
                    <div class="Content-UserConfig-Item">
                        <h2 class="Content-UserConfig-Item-Header">Email</h2>
                        <input type="text" class="Content-UserConfig-Item-Field" name="email" placeholder="example@example.com">
                    </div>
                    <input type="hidden" value="2" name="type">
                    <input type="submit" class="Content-Add-Payment-Form-submit" value="Create Payment Method">
                </form>
                <form class="Content-Add-Payment-Form" id="Payment-bank" method="get" action="../PhpScripts/PaymentMethodCreation.php">
                    <div class="Content-UserConfig-Item">
                        <h2 class="Content-UserConfig-Item-Header">Bank account number</h2>
                        <input type="text" class="Content-UserConfig-Item-Field" name="account" placeholder="PR3049483920">
                    </div>
                    <input type="hidden" value="3" name="type">
                    <input type="submit" class="Content-Add-Payment-Form-submit" value="Create Payment Method">
                </form>


            </div>
        </div>
    </div>
    <?php include 'Footer.php'; ?>
</body>

</html>