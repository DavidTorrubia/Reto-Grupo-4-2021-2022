<div class="Header">
    <?php include '../PhpScripts/Conexion.php'; ?>
    <?php include "../PhpScripts/UserCreation.php";
    include "../PhpScripts/ErrorDisplay.php";
    include "../PhpScripts/CreateCart.php";
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
            <button type="button" class="Header-Item-Right-Container-UserDropButton" id="Header-Item-Right-Container-UserDropButton" onclick="UserMenuDeploy()"><img class="Header-Imagen Header-Image-Usericon" src="
                <?php
                //Consulta para coger la imagen de usurio
                if ($WebPageUser->get_isLogged() == true) {
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
                } ?>" /></button>
            <div class="Header-Item-Right-Container-UserDropButton-Content" id="Header-Item-Right-Container-UserDropButton-Content">
                <?php
                //Si no estas loggeado no puedes acceder a la pagina de gestion de usuario
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
                        <form class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-form" method="get" action="../PhpScripts/SingUp.php">
                            <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Email</h3>
                            <input type="text" class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input" name="email">
                            <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Password
                            </h3>
                            <input type="password" class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input" name="password">
                            <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Repeat
                                Password
                            </h3>
                            <input type="password" class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input" name="repassword">
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
                    <form action="../PhpScripts/Logoff.php">
                        <input type="submit" class="Header-Item-Right-Container-UserDropButton-Content-Button" id="Header-Item-Right-Container-UserDropButton-Content-Log off" value="Log out">
                    </form>
                <?php
                }
                ?>
            </div>
        </div>
        <a href="../HTML/ShoppingCart.php"><img class="Header-Imagen" src="../Icons/ShopppingListWhite.png" /></a>
        <img class="Header-Imagen Header-Imagen-Bandera" src="../Images/flags/ukflag.png" />
    </div>
</div>