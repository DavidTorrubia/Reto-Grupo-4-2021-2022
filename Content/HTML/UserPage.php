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
                    <button type="button" class="Header-Item-Right-Container-UserDropButton-Content-Button"
                        id="Header-Item-Right-Container-UserDropButton-Content-Log off"> Log off</button>
                </div>
            </div>
            <a href="../HTML/ShoppingCart.php"><img class="Header-Imagen" src="../Icons/ShopppingListWhite.png" /></a>
            <img class="Header-Imagen Header-Imagen-Bandera" src="../Images/flags/ukflag.png" />
        </div>
    </div>
    <div class="Content">
        <div class="Content-User">
            <div class="Content-User-UserProfile">
                <img src="../Images/User/ProfileImage.png" class="Content-User-UserProfile-Image">
                <div class="Content-User-UserProfile-Data">
                    <h1 class="Content-User-UserProfile-Data-Username">User 12340239282</h1>
                    <h2 class="Content-User-UserProfile-Data-Email">example@exammple.com</h2>
                    <p class="Content-User-UserProfile-Data-PrincAddress">Malaga, Spain</p>
                </div>
            </div>
            <div class="Content-UserConfig">
                <div class="Content-UserConfig-Item half">
                    <h2 class="Content-UserConfig-Item-Header">First Name</h2>
                    <input type="text" class="Content-UserConfig-Item-Field" placeholder="Michael">
                </div>
                <div class="Content-UserConfig-Item half">
                    <h2 class="Content-UserConfig-Item-Header">Last Name</h2>
                    <input type="text" class="Content-UserConfig-Item-Field" placeholder="Jordan">
                </div>
                <div class="Content-UserConfig-Item">
                    <h2 class="Content-UserConfig-Item-Header">Email</h2>
                    <input type="text" class="Content-UserConfig-Item-Field" placeholder="Example@Example.com">
                </div>
                <button class="Content-UserConfig-Item-Button" type="button">Save Changes</button>

                <div class="Content-UserConfig-Item Directions">
                    <button class="Content-UserConfig-Item-Directions-Button" type="button" onclick="DeployCreateAddres()">Create New Address</button>
                    <form class="Content-UserConfig-Item-Directions-Content" id="Content-UserConfig-Item-Directions-Content-Create">
                        <div class="Content-UserConfig-Item">
                            <h2 class="Content-UserConfig-Item-Header">Country</h2>
                            <input type="text" class="Content-UserConfig-Item-Field" placeholder="Spain">
                        </div>
                        <div class="Content-UserConfig-Item">
                            <h2 class="Content-UserConfig-Item-Header">Ciudad</h2>
                            <input type="text" class="Content-UserConfig-Item-Field" placeholder="Madrid">
                        </div>
                        <div class="Content-UserConfig-Item">
                            <h2 class="Content-UserConfig-Item-Header">Postal Code</h2>
                            <input type="text" class="Content-UserConfig-Item-Field" placeholder="50011">
                        </div>
                        <div class="Content-UserConfig-Item">
                            <h2 class="Content-UserConfig-Item-Header">Street Address</h2>
                            <input type="text" class="Content-UserConfig-Item-Field" placeholder="Via Hispanidad">
                        </div>
                        <button class="Content-UserConfig-Item-Directions-Content-Button" type="button">Create</button>
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
                            <div class="Content-UserConfig-Item-Directions-Content-RemoveList-Item Example">
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">Spain</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">Zaragoza</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">50011</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">Miralbueno11</h1>
                                <input type="checkbox" class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-CheckBox">
                            </div>
                            <div class="Content-UserConfig-Item-Directions-Content-RemoveList-Item Example">
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">Spain</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">Zaragoza</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">50011</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">Miralbueno11</h1>
                                <input type="checkbox" class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-CheckBox">
                            </div>
                            <div class="Content-UserConfig-Item-Directions-Content-RemoveList-Item Example">
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">Spain</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">Zaragoza</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">50011</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">Miralbueno11</h1>
                                <input type="checkbox" class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-CheckBox">
                            </div>
                            <div class="Content-UserConfig-Item-Directions-Content-RemoveList-Item Example">
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">Spain</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">Zaragoza</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">50011</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">Miralbueno11</h1>
                                <input type="checkbox" class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-CheckBox">
                            </div>
                            <div class="Content-UserConfig-Item-Directions-Content-RemoveList-Item Example">
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">Spain</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">Zaragoza</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">50011</h1>
                                <h1 class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-Header">Miralbueno11</h1>
                                <input type="checkbox" class="Content-UserConfig-Item-Directions-Content-RemoveList-Item-CheckBox">
                            </div>
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