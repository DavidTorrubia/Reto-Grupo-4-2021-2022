<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/MainStyle.css">
    <link rel="stylesheet" href="../CSS/MenuStyle.css">
    <script src="../JS/HeaderScripts.js"></script>
    <script src="../JS/MenuScript.js"></script>
    <title>Ecoffe - Menu</title>
</head>

<body>
<?php include 'Header.php'; ?>

    <div class="Content">
        <button class="Content-Menu-SlideUp" type="button" id="Content-Menu-SlideUp" onclick="ScrollUp()"><img src="../Icons/Menu/UpArrow.png" class="Content-Menu-SlideUp-Image"></button>
        <div class="Content-Menu-Searchbar-Aux">
            <input type="text" class="Content-Menu-Searchbar" id="Content-Menu-Searchbar" placeholder="Search ...">
        </div>
        <h1 class="Content-Header"> Types </h1>
        <div class="Content-Menu-Types-Container">
            <div class="Content-Menu-Types-Container-Item1 Content-Menu-Types-Container-Item" onclick="ScrollToDyC()">
                <img src="../Images/menu/TakeAwayImage.png" class="Content-Menu-Types-Container-Images Content-Menu-Types-Container-Item1-Image">
                <h1 class="Content-Menu-Types-Container-Images-Text Content-Menu-Types-Container-Item1-text">Drinks <br>
                    & <br> Coffee</h1>
            </div>
            <div class="Content-Menu-Types-Container-Item2 Content-Menu-Types-Container-Item" onclick="ScrollToPastries()">
                <img src="../Images/menu/cheesecake.png" class="Content-Menu-Types-Container-Images Content-Menu-Types-Container-Item2-Image">
                <h1 class="Content-Menu-Types-Container-Images-Text Content-Menu-Types-Container-Item2-text">Pastries
                </h1>
            </div>
            <div class="Content-Menu-Types-Container-Item3 Content-Menu-Types-Container-Item" onclick="ScrollToSnacks()">
                <img src="../Images/menu/Snacks.png" class="Content-Menu-Types-Container-Images Content-Menu-Types-Container-Item3-Image">
                <h1 class="Content-Menu-Types-Container-Images-Text Content-Menu-Types-Container-Item3-text">Snacks</h1>
            </div>
        </div>
        <h1 class="Content-Header" id="Menu-Drinks-Coffee"> Drinks & Coffe </h1>
        <div class="Content-Products-Container-DrinksCoffe">

        </div>
        <h1 class="Content-Header" id="Menu-Pastries"> Pastries </h1>
        <div class="Content-Products-Container-Pastries">

        </div>
        <h1 class="Content-Header" id="Menu-Snacks"> Snacks </h1>
        <div class="Content-Products-Container-Snacks">

        </div>
    </div>
    <?php include 'Footer.php'; ?>
</body>

</html>