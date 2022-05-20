<?php
include("conexion.php");

$sql = "SELECT * FROM metodospago";

$resultado = mysqli_query($con, $sql) or die('Error: ' . mysqli_error($con));
while ($row = mysqli_fetch_assoc($resultado)) {
?>
    <div>
        <p> <?php echo $row['ID_METPAGO'] ?>;</p>
        <p><?php echo $row['ID_TIPOMETPAGO']; ?></p>
        <p><?php echo $row['ID_USUARIO']; ?></p>
        <p><?php echo $row['DETALLE']; ?></p>
    </div>


<?php
}

?>
