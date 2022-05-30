<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/LandingPageStyle.css">
    <link rel="stylesheet" href="../CSS/MainStyle.css">
    <script src="../JS/HeaderScripts.js"></script>
    <script src="../JS/LandingPageScripts.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvu_yP8noN4t377JxS6_vsk5tiRu6rTAc&callback=initMap">
    </script>
    <title>Ecoffe - Landing Page</title>
</head>

<body>
    <?php include 'Header.php'; ?>

    <div class="Content">
        <a href="../HTML/AboutUs.php" class="content-href Content-video-Display"><video class="Content-video" autoplay muted id="myVideo" loop>
                <source src="../videos/Ecoffe.mp4" type="video/mp4" class="Content-video-source">
            </video></a>
        <a href="../HTML/Menu.php" class="content-href">
            <div class="carousel">
                <div class="carousel-inner">
                    <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                    <div class="carousel-item">
                        <img src="../Images/LandingPage/orangeCoctel.png" class="carousel-item-image">
                        <div class="carousel-item-image-Container ">
                            <h1 class="carousel-item-image-Header">Fruit Coctails</h1>
                            <p class="carousel-item-image-Text">Orange, Grapes and Pineapple Juice with Special Liquor</p>
                        </div>
                    </div>
                    <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                    <div class="carousel-item">
                        <img src="../Images/LandingPage/Frappuccino.jpg" class="carousel-item-image">
                        <div class="carousel-item-image-Container">
                            <h1 class="carousel-item-image-Header">Frappuccino</h1>
                            <p class="carousel-item-image-Text">Cofee with milk, chocolate and ice cream</p>
                        </div>
                    </div>
                    <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                    <div class="carousel-item">
                        <img src="../Images/LandingPage/IcedCoffee.jpg" class="carousel-item-image">
                        <div class="carousel-item-image-Container">
                            <h1 class="carousel-item-image-Header">Iced coffee</h1>
                            <p class="carousel-item-image-Text">Try our new cold cofees selections</p>
                        </div>
                    </div>
                    <label for="carousel-3" class="carousel-control prev control-1">‹</label>
                    <label for="carousel-2" class="carousel-control next control-1">›</label>
                    <label for="carousel-1" class="carousel-control prev control-2">‹</label>
                    <label for="carousel-3" class="carousel-control next control-2">›</label>
                    <label for="carousel-2" class="carousel-control prev control-3">‹</label>
                    <label for="carousel-1" class="carousel-control next control-3">›</label>
                    <ol class="carousel-indicators">
                        <li>
                            <label for="carousel-1" class="carousel-bullet">•</label>
                        </li>
                        <li>
                            <label for="carousel-2" class="carousel-bullet">•</label>
                        </li>
                        <li>
                            <label for="carousel-3" class="carousel-bullet">•</label>
                        </li>
                    </ol>
                </div>
            </div>
        </a>
        <div class="Content-LandingText" id="Content-LandingText">
            <h1 class="Content-LandingText-Header">
                Why ecoffe?
            </h1>
            <p class="Content-LandingText-Text">
                Ecoffe is a branch who respects nature and local production, our coffee is elaborated by traditional ways in localized parts of the world where coffee masters as we call them recollect the grain and prepares it for our shops. Once it reaches our shops the coffee gets prepared by our baristas and packed by our employees, and finally our delivery service brings it carefully to your home.
            </p>
        </div>
        <div class="FixedAdv">
            <div class="FixedAdv-Container" id="FixedAdv-Left">
                <a class="FixedAdv-Container-Text" href="https://www.google.es/maps/place/C%2F+Gran+V%C3%ADa,+20,+28013+Madrid/@40.4200622,-3.7022514,17z/data=!3m1!4b1!4m5!3m4!1s0xd422886fcca0709:0xc56f6ff7b61095fd!8m2!3d40.4200581!4d-3.7000627">
                    <h1 class="Advertise-Title">NEW OPENING</h1>
                    <p class="Advertise-Text">Gran Vía 20, Madrid<br>10th June 2022</p>
                </a>

            </div>
            <div class="FixedAdv-Container" id="FixedAdv-Right">
                <a class="FixedAdv-Container-Text" href="AboutUs.php">
                    <h1 class="Advertise-Title">We are hiring!</h1>
                    <p class="Advertise-Text">Join to our team</p>
                </a>
            </div>
        </div>

        <button type="button" class="Content-LocationsButton" onclick="LocationMenuDeploy()">
            <img src="../Icons/LandingPage/flecha.png" class="Content-LocationButton-Icon" id="Content-LocationButton-Icon">
            <h1 class="Content-Header Content-LocationButton-Header">Find Us!</h1>
        </button>
        <div class="Locations" id="Locations">
            <div id="Map" class="map"></div>
            <div class="Locations-Container">
                <div class="Locations-Container-item" onclick="Localizacion('Zaragoza')">
                    <h1 class="Locations-Container-Header">Zaragoza</h1>
                    <p class="Locations-Container-Text">
                        C/ Violeta Parra 9<br>
                        50015, Zaragoza, Spain</p>
                </div>
                <div class="Locations-Container-item" onclick="Localizacion('Madrid')">
                    <h1 class="Locations-Container-Header">Madrid</h1>
                    <p class="Locations-Container-Text">
                        C/ Gran Via 20<br>
                        28013, Madrid, Spain</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include 'Footer.php'; ?>
</body>

</html>