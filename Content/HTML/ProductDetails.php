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
        <div class="Content-Description">
            <p><?PHP echo $fila["NOMBRE"] ?></p>
            <p><?PHP echo $_SESSION['Menu'] ?></p>
            <p><?PHP echo $id_prod ?></p>
            <h3 class="Content-Products-Container-Item-Precio"><?PHP echo $row["PRECIO"] ?>€</h3>
        </div>
    </div>

    <?php include 'Footer.php'; ?>
</body>

</html>