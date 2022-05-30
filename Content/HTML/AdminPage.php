<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/MainStyle.css">
    <link rel="stylesheet" href="../CSS/AdminPageStyle.css">
    <title>Ecoffe - AdminPage</title>
    <script src="../JS/HeaderScripts.js"></script>
    <script src="../JS/AdminPageScripts.js"></script>
</head>


<body>
    <?php include 'Header.php' ?>
    <div class="Content">
        <div class="Content-DataAlteration">
            <div class="Content-SelectionBar">
                <button class="Content-SelectionBar-Item">Usuarios</button>
                <button class="Content-SelectionBar-Item">Direcciones</button>
                <button class="Content-SelectionBar-Item">Pedidos</button>
                <button class="Content-SelectionBar-Item">Facturas</button>
                <button class="Content-SelectionBar-Item">Productos</button>
                <button class="Content-SelectionBar-Item">Tipos Productos</button>
                <button class="Content-SelectionBar-Item">Promociones</button>
            </div>

            <div class="Content-DataAlteration-Elements">
                <form class="Content-DataAlteration-Elements-Item" method="get" action="../PhpScripts/">
                    <div class="Content-DataAlteration-Elements-Item-Style">
                        <h1 class="Content-DataAlteration-Elements-Item-Header">Alter users</h1>
                        <div class="Content-DataAlteration-Elements-Item-Container">
                            <div class="Content-DataAlteration-Elements-Item-List-Item-Example">
                                <p class="Content-DataAlteration-Elements-Item-List-Item-Info ID"> ID_USUARIO </p>
                                <p class="Content-DataAlteration-Elements-Item-List-Item-Info CORREO"> CORREO</p>
                                <p class="Content-DataAlteration-Elements-Item-List-Item-Info CONTRASENA">CONTRASENA</p>
                                <p class="Content-DataAlteration-Elements-Item-List-Item-Info NOMBRE">NOMBRE</p>
                                <p class="Content-DataAlteration-Elements-Item-List-Item-Info APELLIDOS"> APELLIDOS</p>
                                <p class="Content-DataAlteration-Elements-Item-List-Item-Info ES_ADMIN">Admin</p>
                                <input type="radio">
                            </div>
                            <div class="Content-DataAlteration-Elements-Item-List">

                                <?php
                                $sql = "SELECT * FROM USUARIOS";
                                $result = mysqli_query($con, $sql) or die('Error');
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <label class="Content-DataAlteration-Elements-Item-List-Item">
                                        <p class="Content-DataAlteration-Elements-Item-List-Item-Info ID"> <?php echo $row["ID_USUARIO"] ?> </p>
                                        <p class="Content-DataAlteration-Elements-Item-List-Item-Info CORREO"> <?php echo $row["CORREO"] ?></p>
                                        <p class="Content-DataAlteration-Elements-Item-List-Item-Info CONTRASENA"> <?php echo $row["CONTRASENA"] ?></p>
                                        <p class="Content-DataAlteration-Elements-Item-List-Item-Info NOMBRE"> <?php echo $row["NOMBRE"] ?></p>
                                        <p class="Content-DataAlteration-Elements-Item-List-Item-Info APELLIDOS"> <?php echo $row["APELLIDOS"] ?></p>
                                        <p class="Content-DataAlteration-Elements-Item-List-Item-Info ES_ADMIN"> <?php echo $row["ES_ADMIN"] ?></p>
                                        <input type="radio" value="<?php echo $row["ID_USUARIO"] ?>" name="userselec" class="Content-DataAlteration-Elements-Item-List-Item-Radio">
                                    </label>
                                <?php
                                }
                                ?>
                            </div>

                        </div>
                        <div class="Content-DataAlteration-Elements-Item-Selection">
                            <button type="button" class="Content-DataAlteration-Elements-Item-Selection-Button" onclick="changeUserMode(1)"> Config user</button>
                            <button type="button" class="Content-DataAlteration-Elements-Item-Selection-Button" onclick="changeUserMode(2)"> Delete </button>
                        </div>
                        <div class="Alter-User" id="Alter-User">
                            <h3 class="Content-DataAlteration-Elements-Item-Header-Small">Email</h3>
                            <input type="text" class="Content-DataAlteration-Elements-Item-Input" name="email">
                            <h3 class="Content-DataAlteration-Elements-Item-Header-Small">Name</h3>
                            <input type="password" class="Content-DataAlteration-Elements-Item-Input" name="name">
                            <h3 class="Content-DataAlteration-Elements-Item-Header-Small">Last Name</h3>
                            <input type="password" class="Content-DataAlteration-Elements-Item-Input" name="lastname">
                            <h3 class="Content-DataAlteration-Elements-Item-Header-Small">Password</h3>
                            <input type="password" class="Content-DataAlteration-Elements-Item-Input" name="password">
                            <h3 class="Content-DataAlteration-Elements-Item-Header-Small">Repeat Password</h3>
                            <input type="password" class="Content-DataAlteration-Elements-Item-Input" name="repassword">
                            <input type="hidden" name="selection" value="1">
                        </div>
                        <div class="Remove-User" id="Remove-User">
                            <input type="hidden" name="selection" value="2">
                        </div>
                        <input type="submit" id="UserAlterSubmit" value="Continue" class="Content-DataAlteration-Elements-Item-Submit">
                    </div>
                </form>
                <form class="Content-DataAlteration-Elements-Item" method="get" action="../PhpScripts/AdminSingUp.php">
                    <div class="Content-DataAlteration-Elements-Item-Style">
                        <h1 class="Content-DataAlteration-Elements-Item-Header">CREATE USER</h1>
                        <h3 class="Content-DataAlteration-Elements-Item-Header-Small">Email</h3>
                        <input type="text" class="Content-DataAlteration-Elements-Item-Input" name="email">
                        <h3 class="Content-DataAlteration-Elements-Item-Header-Small">Password
                        </h3>
                        <input type="password" class="Content-DataAlteration-Elements-Item-Input" name="password">
                        <h3 class="Content-DataAlteration-Elements-Item-Header-Small">Repeat
                            Password
                        </h3>
                        <input type="password" class="Content-DataAlteration-Elements-Item-Input" name="repassword">
                        <label class="Content-DataAlteration-Elements-Item-Login">Is Admin? <input type="checkbox" value="1" name="isadmin"></label>
                        <label class="Content-DataAlteration-Elements-Item-Login">Log in? <input type="checkbox" value="1" name="login"></label>
                        <input type="submit" value="Create User" class="Content-DataAlteration-Elements-Item-Submit">
                    </div>


                </form>
            </div>
        </div>
    </div>


    <div class="Footer">
        <div class="Footer-SelectionBar">
            <a href="AboutUs.php">About Us</a>
            <a href="">Help</a>
            <a href="https://mail.google.com/mail/u/1/?pli=1#inbox">Contact Us</a>
            <a href="AboutUs.php">Work with us</a>
            <a href="UserPage.php">Settings</a>
        </div>
        <p>ecoffe @Copyright</p>
    </div>
</body>