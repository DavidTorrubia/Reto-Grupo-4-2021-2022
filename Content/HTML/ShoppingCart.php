<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecoffe - ShoppingCart</title>
    <link rel="stylesheet" href="../CSS/MainStyle.css">
    <link rel="stylesheet" href="../CSS/ShoppingCartStyle.css">
    <script src="../JS/HeaderScripts.js"></script>
    <script src="../JS/ShoppingCart.js"></script>
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
        <h1 class="Content-ShoppingCart-Title">Order</h1>
        <div class="Content-ShoppingCart">
            <div class="Content-ShoppingCart-ProductsList">
                <div class="Content-ShoppingCart-ProductsList-Item">
                    <img class="Content-ShoppingCart-ProductsList-Item-Image" src="../Images/LandingPage/orangeCoctel.png">
                    <h1 class="Content-ShoppingCart-ProductsList-Item-Name">Orange Expresso</h1>
                    <h1 class="Content-ShoppingCart-ProductsList-Item-Quantity-Text">Quantity: </h1>
                    <input type="text" class="Content-ShoppingCart-ProductsList-Item-Quantity-Number" 
                    id="Content-ShoppingCart-ProductsList-Item-Quantity-Number" 
                    name="Content-ShoppingCart-ProductsList-Item-Quantity-Number" 
                    value="1">
                    <p class="Content-ShoppingCart-ProductsList-Item-Cost">3€</p>
                    <img class="Content-ShoppingCart-ProductsList-Item-Delete" src="../Images/ShoppingCart/Quit.png">
                </div>
                <div class="Content-ShoppingCart-ProductsList-Item">
                    <img class="Content-ShoppingCart-ProductsList-Item-Image" src="../Images/LandingPage/orangeCoctel.png">
                    <h1 class="Content-ShoppingCart-ProductsList-Item-Name">Orange Expresso</h1>
                    <h1 class="Content-ShoppingCart-ProductsList-Item-Quantity-Text">Quantity: </h1>
                    <input type="text" class="Content-ShoppingCart-ProductsList-Item-Quantity-Number" 
                    id="Content-ShoppingCart-ProductsList-Item-Quantity-Number" 
                    name="Content-ShoppingCart-ProductsList-Item-Quantity-Number" 
                    value="1">
                    <p class="Content-ShoppingCart-ProductsList-Item-Cost">3€</p>
                    <img class="Content-ShoppingCart-ProductsList-Item-Delete" src="../Images/ShoppingCart/Quit.png">
                </div>
                <div class="Content-ShoppingCart-ProductsList-Item">
                    <img class="Content-ShoppingCart-ProductsList-Item-Image" src="../Images/LandingPage/orangeCoctel.png">
                    <h1 class="Content-ShoppingCart-ProductsList-Item-Name">Orange Expresso</h1>
                    <h1 class="Content-ShoppingCart-ProductsList-Item-Quantity-Text">Quantity: </h1>
                    <input type="text" class="Content-ShoppingCart-ProductsList-Item-Quantity-Number" 
                    id="Content-ShoppingCart-ProductsList-Item-Quantity-Number" 
                    name="Content-ShoppingCart-ProductsList-Item-Quantity-Number" 
                    value="1">
                    <p class="Content-ShoppingCart-ProductsList-Item-Cost">3€</p>
                    <img class="Content-ShoppingCart-ProductsList-Item-Delete" src="../Images/ShoppingCart/Quit.png">
                </div>
            </div>
            <div class="Content-ShoppingCart-Receipt">
                <h1 class="Content-ShoppingCart-Receipt-Title">Receipt</h1>
                <hr class="Content-ShoppingCart-Receipt-Line">
                <div class="Content-ShoppingCart-Receipt-Item">
                    <h1 class="Content-ShoppingCart-Receipt-Item-Name">Orange Expresso</h1>
                    <p class="Content-ShoppingCart-Receipt-Item-Quantity">1 un</p>
                    <p class="Content-ShoppingCart-Receipt-Item-Cost">3€</p>
                </div>
                <div class="Content-ShoppingCart-Receipt-Delivery-Costs">
                    <h1 class="Content-ShoppingCart-Receipt-Delivery-Costs-Name">Delivery Costs</h1>
                    <p class="Content-ShoppingCart-Receipt-Delivery-Costs-Cost">2€</p>
                </div>
                <hr class="Content-ShoppingCart-Receipt-Line">
                <div class="Content-ShoppingCart-Receipt-Total">
                    <h1 class="Content-ShoppingCart-Receipt-Total-Text">Total</h1>
                    <p class="Content-ShoppingCart-Receipt-Total-Cost">20€</p>
                </div>
            </div>
        </div>
        <div class="Content-Payment-Button">
            <button type="button" class="Content-Payment-Button-Item" 
            onclick="PaymentDeploy()"> 
            Payment
            </button>
        </div>
        <div class="Content-Payment" id="Content-Payment"> <!--Está oculto hasta que se le da al botón-->
            <div class="Content-Payment-Container">
                <div class="Content-Payment-Container-Method">
                    <p class="Content-Payment-Container-Method-Text">Choose your method of payment:</p>
                    <form>
                        <input type="radio" 
                        id="Content-Payment-Payment-Container-Method-CreditCard" 
                        name="Content-Payment-Payment-Container-Method-CreditCard"
                        value="Content-Payment-Payment-Container-Method-CreditCard">
                        <label class="Content-Payment-Container-Method-Label-Text" 
                        for="Content-Payment-Payment-Container-Method-CreditCard">Credit card</label><br>
                        <input type="radio" 
                        id="Content-Payment-Payment-Container-Method-DebtCard" 
                        name="Content-Payment-Payment-Container-Method-DebtCard"
                        value="Content-Payment-Payment-Container-Method-DebtCard">
                        <label class="Content-Payment-Container-Method-Label-Text"
                        for="Content-Payment-Payment-Container-Method-DebtCard">Debt card</label><br>
                        <input type="radio" 
                        id="Content-Payment-Payment-Container-Method-PayPal" 
                        name="Content-Payment-Container-Payment-Method-PayPal"
                        value="Content-Payment-Payment-Container-Method-PayPal">
                        <label class="Content-Payment-Container-Method-Label-Text"
                        for="Content-Payment-Payment-Container-Method-PayPal">PayPal</label>
                    </form>
                </div>
                <form class="Content-Payment-Container-Info">
                    <label class="Content-Payment-Container-Info-Label-Text" 
                    for="Content-Payment-Container-Info-CardNumber">Card number</label><br>
                    <input type="text" class="Content-Payment-Container-Info-Field" 
                    id="Content-Payment-Container-Info-CardNumber" 
                    name="Content-Payment-Container-Info-CardNumber"><br>
    
                    <label class="Content-Payment-Container-Info-Label-Text" 
                    for="Content-Payment-Container-Info-CardHolder">Cardholder name</label><br>
                    <input type="text" class="Content-Payment-Container-Info-Field" 
                    id="Content-Payment-Container-Info-CardCardHolder" 
                    name="Content-Payment-Container-Info-CardCardHolder"><br>
    
                    <label class="Content-Payment-Container-Info-Label-Text" 
                    for="Content-Payment-Container-Info-ExpiryDate">Expiry date</label><br>
                    <input type="text" class="Content-Payment-Container-Info-Field 
                    id="Content-Payment-Container-Info-ExpiryDate" 
                    name="Content-Payment-Container-Info-ExpiryDate"
                    placeholder="MM/YY"><br>
    
                    <label class="Content-Payment-Container-Info-Label-Text" 
                    for="Content-Payment-Container-Info-SecurityNumber">Security number</label><br>
                    <input type="text" class="Content-Payment-Container-Info-Field" 
                    id="Content-Payment-Container-Info-SecurityNumber" 
                    name="Content-Payment-Container-Info-SecurityNumber"
                    placeholder="CVC"><br>
                </form>
            </div>
            <div class="Content-Payment-Pay-Button">
                <button type="button" class="Content-Payment-Pay-Button-Item" 
                onclick="PayFeedback()"> 
                Pay
                </button>
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

