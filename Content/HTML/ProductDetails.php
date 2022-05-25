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
</head>

<body>
    <?php include 'Header.php'; ?>

    <div class="Content">
        <?php
        $_SESSION['Menu'] = $id_prod;
        $sql = "SELECT * FROM PRODUCTOS WHERE ID_PRODUCTO = '.$id_prod.'";
        $result = mysqli_query($con, $sql) or die('Error');
        $fila = mysqli_fetch_array($result);
        ?>
        <div class="Content-Image">
            <img <?PHP echo "src=" . $fila["IMAGENPROD"] ?>>
        </div>
        <div class="Content-Description">
        <p ><?PHP echo $fila["NOMBRE"] ?></p>
                    <h3 class="Content-Products-Container-Item-Precio"><?PHP echo $row["PRECIO"] ?>€</h3>
        </div>
    </div>

    <?php include 'Footer.php'; ?>
</body>

</html>