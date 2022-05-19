<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/LandingPageStyle.css">
    <link rel="stylesheet" href="../CSS/MainStyle.css">
    <script src="../JS/HeaderScripts.js"></script>
    <script src="../JS/LandingPageScripts.js"></script>
    <title>Ecoffe - Landing Page</title>
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
        <div class="carousel">
            <div class="carousel-inner">
                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                    checked="checked">
                <div class="carousel-item">
                    <img src="../Images/LandingPage/orangeCoctel.png" class="carousel-item-image">
                    <div class="carousel-item-image-Container ">
                        <h1 class="carousel-item-image-Header">Orange Expresso</h1>
                        <p class="carousel-item-image-Text">Orange Juice Mixed with expresso coffee</p>
                    </div>
                </div>
                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item">
                    <img src="../Images/LandingPage/Frappuccino.jpg" class="carousel-item-image">
                    <div class="carousel-item-image-Container">
                        <h1 class="carousel-item-image-Header">Frappuccino</h1>
                        <p class="carousel-item-image-Text">Cofee whith milk, chocolate and ice cream</p>
                    </div>
                </div>
                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item">
                    <img src="../Images/LandingPage/IcedCoffee.jpg" class="carousel-item-image">
                    <div class="carousel-item-image-Container">
                        <h1 class="carousel-item-image-Header">Iced coffee</h1>
                        <p class="carousel-item-image-Text">Try our new cold cofees selections</p>
                    </div>
                </div>
                <label for="carousel-3" class="carousel-control prev control-1">‹</label>
                <label for="carousel-2" class="carousel-control next control-1">›</label>
                <label for="carousel-1" class="carousel-control prev control-2">‹</label>
                <label for="carousel-3" class="carousel-control next control-2">›</label>
                <label for="carousel-2" class="carousel-control prev control-3">‹</label>
                <label for="carousel-1" class="carousel-control next control-3">›</label>
                <ol class="carousel-indicators">
                    <li>
                        <label for="carousel-1" class="carousel-bullet">•</label>
                    </li>
                    <li>
                        <label for="carousel-2" class="carousel-bullet">•</label>
                    </li>
                    <li>
                        <label for="carousel-3" class="carousel-bullet">•</label>
                    </li>
                </ol>
            </div>
        </div>
        <div class="Content-LandingText" id="Content-LandingText">
            <h1 class="Content-LandingText-Header">
                Lorem Ipsum
            </h1>
            <p class="Content-LandingText-Text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in dolor id leo feugiat faucibus. Etiam interdum venenatis accumsan. Suspendisse ut finibus mi, vel elementum nisl. Suspendisse viverra porta ex nec congue. Nam nisl nunc, porta id vulputate eget, maximus ac nisi. In quis mattis augue. In hac habitasse platea dictumst. Morbi fringilla pharetra tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed elementum lectus at dui finibus vehicula. Donec et risus vel ante commodo varius. Phasellus sed est lacinia, faucibus enim lobortis, lobortis magna. Praesent feugiat pellentesque facilisis. Mauris sodales nunc aliquam, placerat massa sed, sagittis neque. 
            </p>
        </div>
        <div class="FixedAdv">
            <div class="FixedAdv-Container" id="FixedAdv-Left">
                <a class="FixedAdv-Container-Text" href="https://www.google.es/maps/place/C%2F+Gran+V%C3%ADa,+20,+28013+Madrid/@40.4200622,-3.7022514,17z/data=!3m1!4b1!4m5!3m4!1s0xd422886fcca0709:0xc56f6ff7b61095fd!8m2!3d40.4200581!4d-3.7000627">
                    <h1 class="Advertise-Title">NEW OPENING</h1>
                    <p class="Advertise-Text">Gran Vía 20, Madrid<br>10th June 2022</p>
                </a>

            </div>
            <div class="FixedAdv-Container" id="FixedAdv-Right">
                <a class="FixedAdv-Container-Text" href="AboutUs.php">
                    <h1 class="Advertise-Title">We are hiring!</h1>
                    <p class="Advertise-Text">Join to our team</p>
                </a>
            </div>
        </div>

        <button type="button" class="Content-LocationsButton" onclick="LocationMenuDeploy()"> 
            <img src="../Icons/LandingPage/flecha.png" class="Content-LocationButton-Icon" id="Content-LocationButton-Icon">
            <h1 class="Content-Header Content-LocationButton-Header">Find Us!</h1>
        </button>
        <div class="Locations" id="Locations">
            <div class="map" id="Map">
                <img src="../Images/LandingPage/Locations.PNG" class="Map-image">
            </div>
            <div class="Locations-Container">
                <div class="Locations-Container-item">
                    <h1 class="Locations-Container-Header">Ejemplo</h1>
                    <p class="Locations-Container-Text">Ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo
                        ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo</p>
                </div>
                <div class="Locations-Container-item">
                    <h1 class="Locations-Container-Header">Ejemplo</h1>
                    <p class="Locations-Container-Text">Ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo
                        ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo</p>
                </div>
                <div class="Locations-Container-item">
                    <h1 class="Locations-Container-Header">Ejemplo</h1>
                    <p class="Locations-Container-Text">Ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo
                        ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo</p>
                </div>
                <div class="Locations-Container-item">
                    <h1 class="Locations-Container-Header">Ejemplo</h1>
                    <p class="Locations-Container-Text">Ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo
                        ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo</p>
                </div>
                <div class="Locations-Container-item">
                    <h1 class="Locations-Container-Header">Ejemplo</h1>
                    <p class="Locations-Container-Text">Ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo
                        ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo</p>
                </div>
                <div class="Locations-Container-item">
                    <h1 class="Locations-Container-Header">Ejemplo</h1>
                    <p class="Locations-Container-Text">Ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo
                        ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo</p>
                </div>
                <div class="Locations-Container-item">
                    <h1 class="Locations-Container-Header">Ejemplo</h1>
                    <p class="Locations-Container-Text">Ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo
                        ejemplo ejemplo ejemplo ejemplo ejemplo ejemplo</p>
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