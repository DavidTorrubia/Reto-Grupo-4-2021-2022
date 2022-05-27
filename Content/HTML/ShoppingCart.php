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
        <?php if (($WebPageUser)->get_isLogged()) { ?>
            <h1 class="Content-ShoppingCart-Title">Order</h1>
            <div class="Content-ShoppingCart">
                <div class="Content-ShoppingCart-ProductsList">
                    <?php
                    $ids = array_keys($_SESSION["cart"]);
                    for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
                        if ($ids[$i] != 0) {
                            $sql = "SELECT * FROM PRODUCTOS WHERE ID_PRODUCTO =" . $ids[$i];
                            $result = mysqli_query($con, $sql) or die('Error');
                            $row = mysqli_fetch_assoc($result)

                    ?>
                            <div>
                                <form class="Content-ShoppingCart-ProductsList-Item" method="get" action="../PhpScripts/RemoveCart.php">
                                    <img class="Content-ShoppingCart-ProductsList-Item-Image" src="<?php echo $row["IMAGENPROD"] ?>">
                                    <h1 class="Content-ShoppingCart-ProductsList-Item-Name"><?php echo $row["NOMBRE"] ?></h1>
                                    <h1 class="Content-ShoppingCart-ProductsList-Item-Quantity-Text">Quantity: </h1>
                                    <h1 class="Content-ShoppingCart-ProductsList-Item-Quantity-Text" id="Content-ShoppingCart-ProductsList-Item-Quantity-Number" name="Content-ShoppingCart-ProductsList-Item-Quantity-Number" value="1"> <?php echo $_SESSION["cart"][$ids[$i]]; ?> </h1>
                                    <p class="Content-ShoppingCart-ProductsList-Item-Cost"><?php echo $row["PRECIO"] ?>€</p>
                                    <input type="hidden" name="id" value="<?php echo $ids[$i] ?>">
                                    <input type="image" alt="Submit" class="Content-ShoppingCart-ProductsList-Item-Delete" src="../Images/ShoppingCart/Quit.png">
                                </form>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="Content-ShoppingCart-Receipt">
                    <h1 class="Content-ShoppingCart-Receipt-Title">Receipt</h1>
                    <hr class="Content-ShoppingCart-Receipt-Line">
                    <div class="Content-ShoppingCart-Receipt-Line-container">
                        <?php
                        $preciototal;
                        for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
                            $sql = "SELECT * FROM PRODUCTOS WHERE ID_PRODUCTO =" . $ids[$i];
                            $result = mysqli_query($con, $sql) or die('Error');
                            $row = mysqli_fetch_assoc($result)
                        ?>
                            <div class="Content-ShoppingCart-Receipt-Item">
                                <h1 class="Content-ShoppingCart-Receipt-Item-Name"><?php echo $row["NOMBRE"] ?></h1>
                                <p class="Content-ShoppingCart-Receipt-Item-Quantity"><?php echo $_SESSION["cart"][$ids[$i]]; ?> un</p>
                                <p class="Content-ShoppingCart-Receipt-Item-Cost"> <?php echo $_SESSION["cart"][$ids[$i]] + $row["PRECIO"];
                                                                                    $preciototal += $_SESSION["cart"][$ids[$i]] + $row["PRECIO"]  ?>€</p>
                            </div>
                        <?php } ?>
                    </div>
                    <hr class="Content-ShoppingCart-Receipt-Line">
                    <div class="Content-ShoppingCart-Receipt-Total">
                        <h1 class="Content-ShoppingCart-Receipt-Total-Text">Total:</h1>
                        <p class="Content-ShoppingCart-Receipt-Total-Cost"><?php echo $preciototal ?>€</p>
                    </div>
                </div>
            </div>
            <form class="Content-tramitation">
                <div class="Content-tramitation-Container">
                    <h1 class="Content-ShoppingCart-Title">Payment Method</h1>
                    <div class="Content-Payment-List" id="Content-Payment">
                        <?php
                        $sql = "SELECT * FROM METODOSPAGO WHERE ID_USUARIO =" . $WebPageUser->get_id();
                        $result = mysqli_query($con, $sql) or die('Error');
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <label class="Content-Payment-List-Item">
                                <h1 class="Content-Payment-List-Item-Info"><?php echo $row['DETALLE']; ?></h1>             
                                <?php 
                                $sql = "SELECT * FROM TIPOSMETODOPAGO WHERE ID_TIPOMETPAGO =" . $row['ID_TIPOMETPAGO'];
                                $result = mysqli_query($con, $sql) or die('Error');
                                $row2 = mysqli_fetch_assoc($result)
                                ?>
                                <h1 class="Content-Payment-List-Item-Info"><?php echo $row2['NOMBRE']; ?></h1>
                                <input type="radio" class="" value="<?php echo $row["ID_METPAGO"] ?>" name="Checkbox[]">
                            </label>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="Content-tramitation-Container">
                    <h1 class="Content-ShoppingCart-Title">Shipping Details</h1>
                    <div class="Content-Payment-List" id="Content-Payment">
                        <?php
                        $sql = "SELECT * FROM DIRECCIONES WHERE ID_USUARIO =" . $WebPageUser->get_id();
                        $result = mysqli_query($con, $sql) or die('Error');
                        while ($row = mysqli_fetch_assoc($result)) {
                            $Direction = explode('/', $row["DIRECCION"]);
                        ?>
                            <label class="Content-Payment-List-Item">
                                <h1 class="Content-Payment-List-Item-Info"><?php echo ucfirst((strtolower($Direction[0]))); ?></h1>
                                <h1 class="Content-Payment-List-Item-Info"><?php echo ucfirst((strtolower($Direction[1]))); ?></h1>
                                <h1 class="Content-Payment-List-Item-Info"><?php echo ucfirst((strtolower($Direction[5]))); ?></h1>
                                <h1 class="Content-Payment-List-Item-Info"><?php echo ucfirst((strtolower($Direction[2]))); ?></h1>
                                <input type="radio" class="" value="<?php echo $row["ID_DIRECCION"] ?>" name="Checkbox[]">
                            </label>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <div>

                </div>
            </form>


        <?php } else { ?>
            <script language="javascript">
                alert("You must be logged in to acces the shopping cart");
                window.location.replace("../HTML/LandingPage.php");
            </script>
        <?php } ?>
    </div>

    <?php include 'Footer.php'; ?>
</body>

</html>