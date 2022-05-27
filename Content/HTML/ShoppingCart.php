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
    <?php include 'Header.php'; ?>

    <div class="Content">
        <h1 class="Content-ShoppingCart-Title">Order</h1>
        <div class="Content-ShoppingCart">
            <div class="Content-ShoppingCart-ProductsList">
                <?php
                for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
                    $ids = array_keys($_SESSION["cart"] );
                    $sql = "SELECT * FROM PRODUCTOS WHERE ID_TIPOPROD =".$ids[$i];
                    $result = mysqli_query($con, $sql) or die('Error');
                    $row = mysqli_fetch_assoc($result)
                ?>
                    <div class="Content-ShoppingCart-ProductsList-Item">
                        <img class="Content-ShoppingCart-ProductsList-Item-Image" src="<?php echo $row["IMAGENPROD"] ?>">
                        <h1 class="Content-ShoppingCart-ProductsList-Item-Name"><?php echo $row["NOMBRE"] ?></h1>
                        <h1 class="Content-ShoppingCart-ProductsList-Item-Quantity-Text">Quantity: </h1>
                        <h1 class="Content-ShoppingCart-ProductsList-Item-Quantity-Text" id="Content-ShoppingCart-ProductsList-Item-Quantity-Number" name="Content-ShoppingCart-ProductsList-Item-Quantity-Number" value="1"> <?php echo $_SESSION["cart"][$ids[$i]];?> </h1>
                        <p class="Content-ShoppingCart-ProductsList-Item-Cost"><?php echo $row["PRECIO"] ?>€</p>
                        <img class="Content-ShoppingCart-ProductsList-Item-Delete" src="../Images/ShoppingCart/Quit.png">
                    </div>
                <?php
                }
                ?>
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
            <button type="button" class="Content-Payment-Button-Item" onclick="PaymentDeploy()">
                Payment
            </button>
        </div>
        <div class="Content-Payment" id="Content-Payment">
            <!--Está oculto hasta que se le da al botón-->
            <div class="Content-Payment-Container">
                <div class="Content-Payment-Container-Method">
                    <p class="Content-Payment-Container-Method-Text">Choose your method of payment:</p>
                    <form>
                        <input type="radio" id="Content-Payment-Payment-Container-Method-CreditCard" name="Content-Payment-Payment-Container-Method-CreditCard" value="Content-Payment-Payment-Container-Method-CreditCard">
                        <label class="Content-Payment-Container-Method-Label-Text" for="Content-Payment-Payment-Container-Method-CreditCard">Credit card</label><br>
                        <input type="radio" id="Content-Payment-Payment-Container-Method-DebtCard" name="Content-Payment-Payment-Container-Method-DebtCard" value="Content-Payment-Payment-Container-Method-DebtCard">
                        <label class="Content-Payment-Container-Method-Label-Text" for="Content-Payment-Payment-Container-Method-DebtCard">Debt card</label><br>
                        <input type="radio" id="Content-Payment-Payment-Container-Method-PayPal" name="Content-Payment-Container-Payment-Method-PayPal" value="Content-Payment-Payment-Container-Method-PayPal">
                        <label class="Content-Payment-Container-Method-Label-Text" for="Content-Payment-Payment-Container-Method-PayPal">PayPal</label>
                    </form>
                </div>
                <form class="Content-Payment-Container-Info">
                    <label class="Content-Payment-Container-Info-Label-Text" for="Content-Payment-Container-Info-CardNumber">Card number</label><br>
                    <input type="text" class="Content-Payment-Container-Info-Field" id="Content-Payment-Container-Info-CardNumber" name="Content-Payment-Container-Info-CardNumber"><br>

                    <label class="Content-Payment-Container-Info-Label-Text" for="Content-Payment-Container-Info-CardHolder">Cardholder name</label><br>
                    <input type="text" class="Content-Payment-Container-Info-Field" id="Content-Payment-Container-Info-CardCardHolder" name="Content-Payment-Container-Info-CardCardHolder"><br>

                    <label class="Content-Payment-Container-Info-Label-Text" for="Content-Payment-Container-Info-ExpiryDate">Expiry date</label><br>
                    <input type="text" class="Content-Payment-Container-Info-Field 
                    id=" Content-Payment-Container-Info-ExpiryDate" name="Content-Payment-Container-Info-ExpiryDate" placeholder="MM/YY"><br>

                    <label class="Content-Payment-Container-Info-Label-Text" for="Content-Payment-Container-Info-SecurityNumber">Security number</label><br>
                    <input type="text" class="Content-Payment-Container-Info-Field" id="Content-Payment-Container-Info-SecurityNumber" name="Content-Payment-Container-Info-SecurityNumber" placeholder="CVC"><br>
                </form>
            </div>
            <div class="Content-Payment-Pay-Button">
                <button type="button" class="Content-Payment-Pay-Button-Item" onclick="PayFeedback()">
                    Pay
                </button>
            </div>
        </div>


    </div>
    <?php include 'Footer.php'; ?>
</body>

</html>