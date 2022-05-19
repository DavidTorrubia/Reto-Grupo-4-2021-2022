<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/MainStyle.css">
    <link rel="stylesheet" href="../CSS/MenuStyle.css">
    <script src="../JS/HeaderScripts.js"></script>
    <script src="../JS/MenuScript.js"></script>
    <title>Ecoffe - Menu</title>
</head>

<body>
    <div class="Header">
        <div class="Header-Background"></div>
        <div class="Header-Item Header-Item-Left-Container">
            <button type="button" class="Header-Item-Left-Container-Dropbutton" id="Header-Item-Left-Container-Dropbutton" onclick="MenuDeploy()"><img class="Header-Imagen" src="../Icons/MenuIcon.png" alt="imagen_menu"></button>
            <div class="Header-Item-Left-Container-Dropbutton-Content" id="Header-Item-Left-Container-Dropbutton-Content">
                <a href="../HTML/Menu.php">Menu</a>
                <a href="../HTML/AboutUs.php">About us</a>
            </div>
        </div>
        <a href="../HTML/LandingPage.php"><img class="Header-Logo" src="../Images/Logo/LogoWhite.png" alt="logo"></a>
        <div class="Header-Item Header-Item-Right-Container">
            <div class="Header-Item-Right-Container-UserDropButtonContainer">
                <button type="button" class="Header-Item-Right-Container-UserDropButton" id="Header-Item-Right-Container-UserDropButton" onclick="UserMenuDeploy()"><img class="Header-Imagen Header-Image-Usericon" src="../Images/defaultUserImage.jpg" /></button>
                <div class="Header-Item-Right-Container-UserDropButton-Content" id="Header-Item-Right-Container-UserDropButton-Content">
                    <button type="button" class="Header-Item-Right-Container-UserDropButton-Content-Button" id="Header-Item-Right-Container-UserDropButton-Content-LogIn" onclick="LoginDeploy()">
                        Login</button>
                    <div class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu" id="Header-Item-Right-Container-UserDropButton-Content-LogInMenu">
                        <form class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-form">
                            <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Email</h3>
                            <input type="text" class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input">
                            <h3 class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Header">Password
                            </h3>
                            <input type="password" class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Input">
                            <input type="submit" value="Log in" class="Header-Item-Right-Container-UserDropButton-Content-LogInMenu-Submit">
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
                    <div>
                        <a type="button" class="Header-Item-Right-Container-UserDropButton-Content-Button UserConfig" id="Header-Item-Right-Container-UserDropButton-Content-UserConfig " href="../HTML/UserPage.php">User Config</a>
                    </div>
                    <button type="button" class="Header-Item-Right-Container-UserDropButton-Content-Button" id="Header-Item-Right-Container-UserDropButton-Content-Log off"> Log off</button>
                </div>
            </div>
            <a href="../HTML/ShoppingCart.php"><img class="Header-Imagen" src="../Icons/ShopppingListWhite.png" /></a>
            <img class="Header-Imagen Header-Imagen-Bandera" src="../Images/flags/ukflag.png" />
        </div>
    </div>
    <div class="Content">
        <button class="Content-Menu-SlideUp" type="button" id="Content-Menu-SlideUp" onclick="ScrollUp()"><img src="../Icons/Menu/UpArrow.png" class="Content-Menu-SlideUp-Image"></button>
        <div class="Content-Menu-Searchbar-Aux">
            <input type="text" class="Content-Menu-Searchbar" id="Content-Menu-Searchbar" placeholder="Search ...">
        </div>
        <h1 class="Content-Header"> Types </h1>
        <div class="Content-Menu-Types-Container">
            <div class="Content-Menu-Types-Container-Item1 Content-Menu-Types-Container-Item" onclick="ScrollToDyC()">
                <img src="../Images/menu/TakeAwayImage.png" class="Content-Menu-Types-Container-Images Content-Menu-Types-Container-Item1-Image">
                <h1 class="Content-Menu-Types-Container-Images-Text Content-Menu-Types-Container-Item1-text">Drinks <br>
                    & <br> Coffee</h1>
            </div>
            <div class="Content-Menu-Types-Container-Item2 Content-Menu-Types-Container-Item" onclick="ScrollToPastries()">
                <img src="../Images/menu/cheesecake.png" class="Content-Menu-Types-Container-Images Content-Menu-Types-Container-Item2-Image">
                <h1 class="Content-Menu-Types-Container-Images-Text Content-Menu-Types-Container-Item2-text">Pastries
                </h1>
            </div>
            <div class="Content-Menu-Types-Container-Item3 Content-Menu-Types-Container-Item" onclick="ScrollToSnacks()">
                <img src="../Images/menu/Snacks.png" class="Content-Menu-Types-Container-Images Content-Menu-Types-Container-Item3-Image">
                <h1 class="Content-Menu-Types-Container-Images-Text Content-Menu-Types-Container-Item3-text">Snacks</h1>
            </div>
        </div>
        <h1 class="Content-Header" id="Menu-Drinks-Coffee"> Drinks & Coffe </h1>
        <div class="Content-Products-Container-DrinksCoffe">

        </div>
        <h1 class="Content-Header" id="Menu-Pastries"> Pastries </h1>
        <div class="Content-Products-Container-Pastries">

        </div>
        <h1 class="Content-Header" id="Menu-Snacks"> Snacks </h1>
        <div class="Content-Products-Container-Snacks">

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