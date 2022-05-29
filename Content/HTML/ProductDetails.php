<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecoffe - Product Details</title>
    <link rel="stylesheet" href="../CSS/MainStyle.css">
    <link rel="stylesheet" href="../CSS/ProductDetailsStyle.css">
    <script src="../JS/HeaderScripts.js"></script>
    <script src="../JS/ProductDetails.js"></script>
</head>

<body>
    <?php include 'Header.php'; ?>
    <?php
    $id_prod = $_GET['id'];
    ?>

    <div class="Content">
        <?php
        $sql = "SELECT * FROM PRODUCTOS WHERE ID_PRODUCTO = $id_prod ";
        $result = mysqli_query($con, $sql) or die('Error');
        $fila = mysqli_fetch_array($result);
        ?>
        <div class="Content-Container">
            <img class="Content-Image" <?PHP echo "src=" . $fila["IMAGENPROD"] ?>>
            <div class="Content-Letter">
                <img class="Content-Image-Responsive" <?PHP echo "src=" . $fila["IMAGENPROD"] ?>>
                <h1 class="Content-Letter-header"><?php echo $fila["NOMBRE"] ?></h1>
                <p class="Content-Letter-Desc">
                    <?php echo $fila["DETALLE"] ?>
                </p>
                <h3 class="Content-Letter-Price"><?php echo $fila["PRECIO"] ?>€ per unit</h1>
                    <form class="Content-Letter-Button-Container" method="get" action="../PhpScripts/AddCart.php">
                        <?php if (($WebPageUser)->get_isLogged()) { ?>
                            <input type="number" name="quantity"  max="<?php echo $fila["STOCK"] ?>" min="1" class="Content-Letter-Button-Container-input quantity" value="">
                            <input type="hidden" name="id" value="<?php echo $fila["ID_PRODUCTO"] ?>">
                            <input type="submit" name="buy" value="add to cart" class="Content-Letter-Button-Container-input submit">
                        <?php } else { ?>
                            <h3 class="Content-Letter-Price" >You must be logged in to buy products</h3>
                        <?php } ?>
                    </form>
            </div>
        </div>

    </div>

    <?php include 'Footer.php'; ?>
</body>

</html>