<div class="Header">
    <?php include "../PhpScripts/UserCreation.php" ;
    if ($_SESSION['Error'] == 1){
        echo '<script language="javascript">alert("No es una contraseña correcta");</script>';
        $_SESSION['Error'] = 0;
    } else if ($_SESSION['Error'] == 2){
        echo '<script language="javascript">alert("No es un correo correcto");</script>';
        $_SESSION['Error'] = 0;
    }
    
    ?>
    <div class="Header-Background"></div>
    <div class="Header-Item Header-Item-Left-Container">
        <button type="button" class="Header-Item-Left-Container-Dropbutton" id="Header-Item-Left-Container-Dropbutton" onclick="MenuDeploy()"><img class="Header-Imagen" src="../Icons/MenuIcon.png" alt="imagen_menu"></button>
        <div class="Header-Item-Left-Container-Dropbutton-Content" id="Header-Item-Left-Container-Dropbutton-Content">
            <a href="../HTML/Menu.php">Menu</a>
            <a href="../HTML/AboutUs.php">About us</a>
            <?php
            if ($WebPageUser->get_isAdmin() == 1) {
            ?>
                <a href="../HTML/AdminPage.php">Admin Page</a>
            <?php
            }

            ?>

        </div>
    </div>
    <a href="../HTML/LandingPage.php"><img class="Header-Logo" src="../Images/Logo/LogoWhite.png" alt="logo"></a>
    <div class="Header-Item Header-Item-Right-Container">
        <div class="Header-Item-Right-Container-UserDropButtonContainer">
            <button type="button" class="Header-Item-Right-Container-UserDropButton" id="Header-Item-Right-Container-UserDropButton" onclick="UserMenuDeploy()"><img class="Header-Imagen Header-Image-Usericon" src="../Images/defaultUserImage.jpg" /></button>
            <div class="Header-Item-Right-Container-UserDropButton-Content" id="Header-Item-Right-Container-UserDropButton-Content">
                <?php
                if ($WebPageUser->get_isLogged() == false) {
                ?>
                    <button type="button" class="Header-Item-Right-Container-UserDropButton-Content-Button" id="Header-Item-Right-Container-UserDropButton-Content-LogIn" onclick="LoginDeploy()">
                        Login</button>
                    <div class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu" id="Header-Item-Right-Container-UserDropButton-Content-LogInMenu">
                        <form class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-form" method="get" action="../PhpScripts/Login.php">
                            <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Email</h3>
                            <input type="text" class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input" name="email">
                            <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Password
                            </h3>
                            <input type="password" class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input" name="password">
                            <input type="submit" value="Login" name="Login" class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Submit">
                        </form>
                    </div>
                    <button type="button" class="Header-Item-Right-Container-UserDropButton-Content-Button" id="Header-Item-Right-Container-UserDropButton-Content-SignUp" onclick="SignUpDeploy()"> Sign
                        Up</button>
                    <div class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu" id="Header-Item-Right-Container-UserDropButton-Content-SignUpMenu">
                        <form class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-form">
                            <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Email</h3>
                            <input type="text" class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input">
                            <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Password
                            </h3>
                            <input type="password" class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input">
                            <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Repeat
                                Password
                            </h3>
                            <input type="password" class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input">
                            <input type="submit" value="Sign Up" class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Submit">
                        </form>
                    </div>
                <?php
                }
                ?>

                <?php
                if ($WebPageUser->get_isLogged() == true) {
                ?>
                    <div>
                        <a type="button" class="Header-Item-Right-Container-UserDropButton-Content-Button UserConfig" id="Header-Item-Right-Container-UserDropButton-Content-UserConfig " href="../HTML/UserPage.php">User Config</a>
                    </div>
                    <button type="button" class="Header-Item-Right-Container-UserDropButton-Content-Button" id="Header-Item-Right-Container-UserDropButton-Content-Log off"> Log out</button>
                <?php
                }
                ?>
            </div>
        </div>
        <a href="../HTML/ShoppingCart.php"><img class="Header-Imagen" src="../Icons/ShopppingListWhite.png" /></a>
        <img class="Header-Imagen Header-Imagen-Bandera" src="../Images/flags/ukflag.png" />
    </div>
</div>
<?php include '../PhpScripts/Conexion.php'; ?>