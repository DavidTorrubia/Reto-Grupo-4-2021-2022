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
                <img src="../Images/User/ProfileImage.png" class="Content-User-UserProfile-Image">
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
                <form class="Content-UserConfig-User">
                    <div class="Content-UserConfig-Item half">
                        <h2 class="Content-UserConfig-Item-Header">First Name</h2>
                        <input type="text" class="Content-UserConfig-Item-Field" name="Name" placeholder=<?php if ($WebPageUser->get_name() == null) {
                                                                                                                echo "User" . $WebPageUser->get_id();
                                                                                                            } else {
                                                                                                                echo $WebPageUser->get_name();
                                                                                                            } ?>>
                    </div>
                    <div class="Content-UserConfig-Item half">
                        <h2 class="Content-UserConfig-Item-Header">Last Name</h2>
                        <input type="text" class="Content-UserConfig-Item-Field" name="LastName" placeholder=<?php $sql = "SELECT APELLIDOS FROM USUARIOS WHERE ID_USUARIO =" . $WebPageUser->get_id();
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
                        <input type="text" class="Content-UserConfig-Item-Field" name="Email" placeholder=<?php $sql = "SELECT CORREO FROM USUARIOS WHERE ID_USUARIO =" . $WebPageUser->get_id();
                                                                                                            $result = mysqli_query($con, $sql) or die('Error');
                                                                                                            $row = mysqli_fetch_assoc($result);
                                                                                                            echo $row['CORREO'];
                                                                                                            ?>>
                    </div>
                    <div class="Content-UserConfig-Item">
                        <h2 class="Content-UserConfig-Item-Header">Password</h2>
                        <input type="password" class="Content-UserConfig-Item-Field" placeholder="Password" name="Password">
                    </div>
                    <input type="submit" class="Content-UserConfig-Item-Button" type="button" value="Save Changes">
                </form>
                <div class="Content-UserConfig-Item Directions">
                    <button class="Content-UserConfig-Item-Directions-Button" type="button" onclick="DeployCreateAddres()">Create New Address</button>
                    <form class="Content-UserConfig-Item-Directions-Content" id="Content-UserConfig-Item-Directions-Content-Create">
                        <div class="Content-UserConfig-Item">
                            <h2 class="Content-UserConfig-Item-Header">Address</h2>
                            <input type="text" class="Content-UserConfig-Item-Field" placeholder="Calle Violeta Parra" name="Adress">
                        </div>
                        <div class="Content-UserConfig-Item">
                            <h2 class="Content-UserConfig-Item-Header">Number</h2>
                            <input type="text" class="Content-UserConfig-Item-Field" placeholder="8" name="Number">
                        </div>
                        <div class="Content-UserConfig-Item">
                            <h2 class="Content-UserConfig-Item-Header">Stairs' direction</h2>
                            <input type="text" class="Content-UserConfig-Item-Field" placeholder="right" name="Stairs">
                        </div>
                        <div class="Content-UserConfig-Item">
                            <h2 class="Content-UserConfig-Item-Header">Floor</h2>
                            <input type="text" class="Content-UserConfig-Item-Field" placeholder="2B" name="Floor">
                        </div>
                        <div class="Content-UserConfig-Item">
                            <h2 class="Content-UserConfig-Item-Header">Postal Code</h2>
                            <input type="text" class="Content-UserConfig-Item-Field" placeholder="50011" name="P_Code">
                        </div>

                        <button class="Content-UserConfig-Item-Directions-Content-Button" type="button" onclick="Insertar_Dir($Adress,$Number,$Stair,$P_Code,$Floor)">Create</button>
                    </form>
                    <button class="Content-UserConfig-Item-Directions-Button" type="button" onclick="DeployRemoveAddres()">Remove Address</button>
                    <div class="Content-UserConfig-Item-Directions-Content" id="Content-UserConfig-Item-Directions-Content-Remove">
                        <form class="Content-UserConfig-Item-Directions-Content-RemoveList">
                            <div class="Content-UserConfig-Item-Directions-Content-RemoveList-Item Guide">
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header Guide">Country</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header Guide">City</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header Guide">Postal Code</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header Guide">Address</h1>
                            </div>
                            <?php
                            $sql = "SELECT DIRECCION FROM DIRECCIONES WHERE ID_USUARIO =" . $WebPageUser->get_id();
                            $result = mysqli_query($con, $sql) or die('Error');
                            while ($row = mysqli_fetch_assoc($result)) {
                                $Direction = explode('/', $row["DIRECCION"]);
                            ?>
                                <div class="Content-UserConfig-Item-Directions-Content-RemoveList-Item Example">
                                    <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header"><?php echo $Direction[0]; ?></h1>
                                    <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header"><?php echo $Direction[2]; ?></h1>
                                    <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header"><?php echo $Direction[3]; ?></h1>
                                    <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header"><?php echo $Direction[4]; ?></h1>
                                    <input type="checkbox" class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-CheckBox">
                                </div>
                            <?php
                            }
                            ?>


                        </form>
                        <button class="Content-UserConfig-Item-Directions-Content-Button">Remove Selected</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="Content-Receipts">
            <div class="Content-Receipts-List">
                <h1 class="Content-Receipts-List-Header"> Receipts </h1>
                <div class="Content-Receipts-List-Header-Item">
                    <h2 class="Content-Receipts-List-Header-Item-text">Date</h2>
                    <h2 class="Content-Receipts-List-Header-Item-text">Price</h2>
                </div>
                <div class="Content-Receipts-List-Header-Item">
                    <h2 class="Content-Receipts-List-Header-Item-text">Date</h2>
                    <h2 class="Content-Receipts-List-Header-Item-text">Price</h2>
                </div>
                <div class="Content-Receipts-List-Header-Item">
                    <h2 class="Content-Receipts-List-Header-Item-text">Date</h2>
                    <h2 class="Content-Receipts-List-Header-Item-text">Price</h2>
                </div>
                <div class="Content-Receipts-List-Header-Item">
                    <h2 class="Content-Receipts-List-Header-Item-text">Date</h2>
                    <h2 class="Content-Receipts-List-Header-Item-text">Price</h2>
                </div>
                <div class="Content-Receipts-List-Header-Item">
                    <h2 class="Content-Receipts-List-Header-Item-text">Date</h2>
                    <h2 class="Content-Receipts-List-Header-Item-text">Price</h2>
                </div>
            </div>
        </div>
    </div>
    <?php include 'Footer.php'; ?>
</body>

</html>