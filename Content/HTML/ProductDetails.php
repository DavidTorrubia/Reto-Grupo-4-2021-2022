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
                <h1 class="Content-Letter-header"><?php echo $fila["NOMBRE"] ?></h1>
                <p class="Content-Letter-Desc">
                    <?php echo $fila["DETALLE"] ?>
                </p>
                <h3 class="Content-Letter-Price"><?php echo $fila["PRECIO"] ?>€</h1>
                <form class="Content-Letter-Button-Container">
                    <input type="number" name="quantity" min="1" max="<?php echo $fila["STOCK"] ?>" class="Content-Letter-Button-Container-input">
                    <input type="submit" name="buy" value="add to cart" class="Content-Letter-Button-Container-input">
                </form>
            </div>
        </div>

    </div>

    <?php include 'Footer.php'; ?>
</body>

</html>