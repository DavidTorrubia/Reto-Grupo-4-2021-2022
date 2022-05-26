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
        <div class="Content-Image">
            <img <?PHP echo "src=" . $fila["IMAGENPROD"] ?>>
        </div>
        
        <div class="Content-Letter">
        <h1><?PHP echo $fila["NOMBRE"] ?></h1>
            <div class="Content-Letter-Details">
                <div class="Content-Letter-Details-Titles">
                    <h2>Description</h2>
                    <h2>Price</h2>
                </div>
                <div class="Content-Letter-Details-Description">
                    <h3><?PHP echo $fila["DETALLE"] ?></h3>
                    <h3 class="Content-Products-Container-Item-Precio"><?PHP echo $fila["PRECIO"] ?>€</h3>
                </div>
            </div>
            <div class="Content-Letter-Buy">
                <input type="number" name="number" min="1" max="<?php echo $fila["STOCK"]?>" onchange="Precio_productos(<?php echo $fila['PRECIO']?>,<?php $_GET['number']?>)">
                   <h2></h2>
                <button>Purchase</button>
            </div>
        </div>
    </div>

    <?php include 'Footer.php'; ?>
</body>

</html>