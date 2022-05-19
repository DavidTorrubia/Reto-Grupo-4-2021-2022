<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/AboutUsStyle.css">
    <link rel="stylesheet" href="../CSS/MainStyle.css">
    <script src="../JS/HeaderScripts.js"></script>
    <title>Ecoffe - About us</title>
    <script src="../JS/AboutUsScript.js"></script>
</head>

<body>
    <div class="Header">
        <div class="Header-Background"></div>
        <div class="Header-Item Header-Item-Left-Container">
            <button type="button" class="Header-Item-Left-Container-Dropbutton"
                id="Header-Item-Left-Container-Dropbutton" onclick="MenuDeploy()"><img class="Header-Imagen"
                    src="../Icons/MenuIcon.png" alt="imagen_menu"></button>
            <div class="Header-Item-Left-Container-Dropbutton-Content"
                id="Header-Item-Left-Container-Dropbutton-Content">
                <a href="../HTML/Menu.php">Menu</a>
                <a href="../HTML/AboutUs.php">About us</a>
            </div>
        </div>
        <a href="../HTML/LandingPage.php"><img class="Header-Logo" src="../Images/Logo/LogoWhite.png" alt="logo"></a>
        <div class="Header-Item Header-Item-Right-Container">
            <div class="Header-Item-Right-Container-UserDropButtonContainer">
                <button type="button" class="Header-Item-Right-Container-UserDropButton"
                    id="Header-Item-Right-Container-UserDropButton" onclick="UserMenuDeploy()"><img
                        class="Header-Imagen Header-Image-Usericon" src="../Images/defaultUserImage.jpg" /></button>
                <div class="Header-Item-Right-Container-UserDropButton-Content"
                    id="Header-Item-Right-Container-UserDropButton-Content">
                    <button type="button" class="Header-Item-Right-Container-UserDropButton-Content-Button"
                        id="Header-Item-Right-Container-UserDropButton-Content-LogIn" onclick="LoginDeploy()">
                        Login</button>
                    <div class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu"
                        id="Header-Item-Right-Container-UserDropButton-Content-LogInMenu">
                        <form class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-form">
                            <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Email</h3>
                            <input type="text"
                                class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input">
                            <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Password
                            </h3>
                            <input type="password"
                                class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input">
                            <input type="submit" value="Log in"
                                class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Submit">
                        </form>
                    </div>
                    <button type="button" class="Header-Item-Right-Container-UserDropButton-Content-Button"
                        id="Header-Item-Right-Container-UserDropButton-Content-SignUp" onclick="SignUpDeploy()"> Sign
                        Up</button>
                    <div class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu"
                        id="Header-Item-Right-Container-UserDropButton-Content-SignUpMenu">
                        <form class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-form">
                            <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Email</h3>
                            <input type="text"
                                class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input">
                            <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Password
                            </h3>
                            <input type="password"
                                class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input">
                            <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Repeat
                                Password
                            </h3>
                            <input type="password"
                                class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input">
                            <input type="submit" value="Sign Up"
                                class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Submit">
                        </form>
                    </div>
                    <div>
                        <a type="button" class="Header-Item-Right-Container-UserDropButton-Content-Button UserConfig"
                            id="Header-Item-Right-Container-UserDropButton-Content-UserConfig "
                            href="../HTML/UserPage.php">User Config</a>
                    </div>
                    <button type="button" class="Header-Item-Right-Container-UserDropButton-Content-Button"
                        id="Header-Item-Right-Container-UserDropButton-Content-Log off"> Log off</button>
                </div>
            </div>
            <a href="../HTML/ShoppingCart.php"><img class="Header-Imagen" src="../Icons/ShopppingListWhite.png" /></a>
            <img class="Header-Imagen Header-Imagen-Bandera" src="../Images/flags/ukflag.png" />
        </div>
    </div>
    <div class="Content">
        <div class="Content-InteractiveImageDescription-Container">

            <img src="https://images.pexels.com/photos/9892384/pexels-photo-9892384.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                class="Content-InteractiveImageDescription-Container-Background">
            <div class="Content-InteractiveImageDescription-Container-Aux">
                <h1 class="Content-InteractiveImageDescription-Container-Header-front">What do we represent?</h1>
            </div>
            <p class="Content-InteractiveImageDescription-Container-Text">We are an ecofriendly café witch works
                with natural products. We do not use pesticides or similars to grow the coffee plants with the
                objective of improve the planet with the best taste. We support local farmers with the objective of
                reduce our carbon footprint, we also use biodegradables packages.</p>


        </div>
        <div class="Content-BusinessValues-Container" id="Content-BusinessValues-Container">
            <div class="Content-BusinessValues-Container-Item">
                <img class="Content-BusinessValues-Container-Item-Icon"
                    src="../Icons/AboutUs/icons8-earth-96.png">
                <h1 class="Content-BusinessValues-Container-Item-Text">Eco-friendly</h1>
                <p>We ensure the minimal enviromental footprint</p>
            </div>
            <div class="Content-BusinessValues-Container-Item">
                <img class="Content-BusinessValues-Container-Item-Icon"
                    src="../Icons/AboutUs/icons8-astrology-96.png">
                <h1 class="Content-BusinessValues-Container-Item-Text">Quality</h1>
                <p>We make our products with the best quality ingredients</p>
            </div>
            <div class="Content-BusinessValues-Container-Item">
                <img class="Content-BusinessValues-Container-Item-Icon" 
                src="../Icons/AboutUs/icons8-connection-96.png">
                <h1 class="Content-BusinessValues-Container-Item-Text">Social Responsability</h1>
                <p>We take care of our clients and employees</p>
            </div>
        </div>
        <div class="Content-Separator"></div>
        <div class="Content-Works">
            <div class="Content-Works-Item">
                <img class="Content-Works-Item-Image"
                    src="https://as1.ftcdn.net/v2/jpg/04/33/37/78/1000_F_433377839_FmBCe5bPE36qx8qYgIgwR9AOmONVTrLZ.jpg">
                <h1 class="Content-Works-Item-Header">Manager</h1>
                <p class="Content-Works-Item-Description">
                    The manager's job is to encourage the workers and to administrate the business
                </p>
                <p class="Content-Works-Item-Description">
                    1600€
                </p>
            </div>
            <div class="Content-Works-Item">
                <img class="Content-Works-Item-Image"
                    src="https://as2.ftcdn.net/v2/jpg/01/31/27/37/1000_F_131273792_uhOADVbm9oCssx4lMV7Q8xWUFcjGGAI1.jpg">
                <h1 class="Content-Works-Item-Header">Bartender</h1>
                <p class="Content-Works-Item-Description">
                    The bartender's job is to talk to customers and to serve them their order
                </p>
                <p class="Content-Works-Item-Description">
                    1300€
                </p>
            </div>
            <div class="Content-Works-Item">
                <img class="Content-Works-Item-Image"
                    src="https://cdn.create.vista.com/api/media/small/460816796/stock-photo-cropped-view-delivery-man-coffee">
                <h1 class="Content-Works-Item-Header">Delivery man</h1>
                <p class="Content-Works-Item-Description">
                    The delivery man's job is to deliver the products to the customer's home
                </p>
                <p class="Content-Works-Item-Description">
                    1300€
                </p>
            </div>
        </div>
        <div class="Content-Separator"></div>
        <div class="Content-WorkWithUs">
            <h1 class="Content-WorkWithUs-Header">Work with us</h1>
            <div class="Content-WorkWithUs-CV">
                <p class="Content-WorkWithUs-CV-Text">Send us your CV <a href="https://mail.google.com/mail/u/1/?pli=1#inbox">here</a></p>
            </div>
            <div class="Content-WorkWithUs-Info">
                <div class="Content-WorkWithUs-JobVacancies">
                    <h1 class="Content-WorkWithUs-JobVacancies-Text">Job vacancies</h1>
                </div>
                <div class="Content-WorkWithUs-OccupationalRiskPrevention">
                    <h1 class="Content-WorkWithUs-OccupationalRiskPrevention-Text">Occupational Risk Prevention</h1>
                </div>
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

</html>