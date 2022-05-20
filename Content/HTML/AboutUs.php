<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/AboutUsStyle.css">
    <link rel="stylesheet" href="../CSS/MainStyle.css">
    <script src="../JS/HeaderScripts.js"></script>
    <title>Ecoffe - About us</title>
    <script src="../JS/AboutUsScript.js"></script>
</head>

<body>
 <?php include 'Header.php'; ?>

    <div class="Content">
        <div class="Content-InteractiveImageDescription-Container">

            <img src="https://images.pexels.com/photos/9892384/pexels-photo-9892384.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                class="Content-InteractiveImageDescription-Container-Background">
            <div class="Content-InteractiveImageDescription-Container-Aux">
                <h1 class="Content-InteractiveImageDescription-Container-Header-front">What do we represent?</h1>
            </div>
            <p class="Content-InteractiveImageDescription-Container-Text">We are an ecofriendly coffeeshop which works
                with natural products. We do not use pesticides or similars to grow the coffee plants in order to 
                improve the planet with the best taste. We support local farmers with the objective of
                reduce our carbon footprint, we also use biodegradables packages.</p>


        </div>
        <div class="Content-BusinessValues-Container" id="Content-BusinessValues-Container">
            <div class="Content-BusinessValues-Container-Item">
                <img class="Content-BusinessValues-Container-Item-Icon"
                    src="../Icons/AboutUs/icons8-earth-96.png">
                <h1 class="Content-BusinessValues-Container-Item-Text">Eco-friendly</h1>
                <p>We ensure the minimal enviromental footprint</p>
            </div>
            <div class="Content-BusinessValues-Container-Item">
                <img class="Content-BusinessValues-Container-Item-Icon"
                    src="../Icons/AboutUs/icons8-astrology-96.png">
                <h1 class="Content-BusinessValues-Container-Item-Text">Quality</h1>
                <p>We make our products with the best quality ingredients</p>
            </div>
            <div class="Content-BusinessValues-Container-Item">
                <img class="Content-BusinessValues-Container-Item-Icon" 
                src="../Icons/AboutUs/icons8-connection-96.png">
                <h1 class="Content-BusinessValues-Container-Item-Text">Social Responsability</h1>
                <p>We take care of our clients and employees</p>
            </div>
        </div>
        <div class="Content-Separator"></div>
        <div class="Content-Works">
            <div class="Content-Works-Item">
                <img class="Content-Works-Item-Image"
                    src="https://as1.ftcdn.net/v2/jpg/04/33/37/78/1000_F_433377839_FmBCe5bPE36qx8qYgIgwR9AOmONVTrLZ.jpg">
                <h1 class="Content-Works-Item-Header">Manager</h1>
                <p class="Content-Works-Item-Description">
                    The manager's job is to encourage the workers and to administrate the business
                </p>
                <p class="Content-Works-Item-Description">
                    1600€
                </p>
            </div>
            <div class="Content-Works-Item">
                <img class="Content-Works-Item-Image"
                    src="https://as2.ftcdn.net/v2/jpg/01/31/27/37/1000_F_131273792_uhOADVbm9oCssx4lMV7Q8xWUFcjGGAI1.jpg">
                <h1 class="Content-Works-Item-Header">Bartender</h1>
                <p class="Content-Works-Item-Description">
                    The bartender's job is to talk to customers and to serve them their order
                </p>
                <p class="Content-Works-Item-Description">
                    1300€
                </p>
            </div>
            <div class="Content-Works-Item">
                <img class="Content-Works-Item-Image"
                    src="https://cdn.create.vista.com/api/media/small/460816796/stock-photo-cropped-view-delivery-man-coffee">
                <h1 class="Content-Works-Item-Header">Delivery man</h1>
                <p class="Content-Works-Item-Description">
                    The delivery man's job is to deliver the products to the customer's home
                </p>
                <p class="Content-Works-Item-Description">
                    1300€
                </p>
            </div>
        </div>
        <div class="Content-Separator"></div>
        <div class="Content-WorkWithUs">
            <h1 class="Content-WorkWithUs-Header-Title">Work with us</h1>
            <p class="Content-WorkWithUs-Header-Text">Each coffee shop is managed by five employees minimum: 
                one manager, two bartenders and two delivery-men.<br> 
                Nowadays we are five employees in Zaragoza and we are hiring employees 
                for Zaragoza and our new coffee shop in Madrid.</p>
            <div class="Content-WorkWithUs-CV">
                <p class="Content-WorkWithUs-CV-Text">Send us your CV <a href="https://mail.google.com/mail/u/1/?pli=1#inbox">here</a></p>
            </div>
            <div class="Content-WorkWithUs-Info">
                <div class="Content-WorkWithUs-JobVacanciesLink">
                    <button class="Content-WorkWithUs-JobVacanciesLink-Link" 
                    onclick="JobVacanciesDeploy()">
                    <h1 class="Content-WorkWithUs-JobVacanciesLink-Text">
                        Job vacancies
                    </h1>
                    </button>
                </div>
                <div class="Content-WorkWithUs-OccupationalRiskPreventionLLink">
                    <h1 class="Content-WorkWithUs-OccupationalRiskPreventionLink-Text">
                        <a class="Content-WorkWithUs-OccupationalRiskPreventionLink-Link" 
                        onclick="">
                        Occupational Risk Prevention</h1>
                </div>
            </div>
            <div class="Content-WorkWithUs-JobVacancies">
                <div class="Content-WorkWithUs-JobVacancies-Vacant">
                    <h1 class="Content-WorkWithUs-JobVacancies-Vacant-Name">Bartender</h1>
                    <h2 class="Content-WorkWithUs-JobVacancies-Vacant-Info">Indefinite contract</h2>
                    <h2 class="Content-WorkWithUs-JobVacancies-Vacant-Info">Full-time</h2>
                    <h2 class="Content-WorkWithUs-JobVacancies-Vacant-Info">Work schedule: M 7:00 - 15:00 / A 15:00 - 23:00</h2>
                    <h2 class="Content-WorkWithUs-JobVacancies-Vacant-Info">Zaragoza, C/Violeta Parra 8</h2>
                    <h2 class="Content-WorkWithUs-JobVacancies-Vacant-Info">Madrid, C/Gran Vía 41</h2>
                    <br>
                    <h2 class="Content-WorkWithUs-JobVacancies-Vacant-Description">Description</h2>
                    <p class="Content-WorkWithUs-JobVacancies-Vacant-DescriptionText">
                        Ecoffe is a company of coffeshops which is compromised with the natural enviroment.
                        We ensure the minimal enviromental footprint, the best quality ingredients and 
                        a warm friendly treatment between clients, suppliers and employees.
                        <br>
                        <br>
                        <strong>Responsabilities:</strong><br>
                        Customer service<br>
                        Order management<br>
                        Keep work area clean
                        <br>
                        <br>
                        <strong>Requirements:</strong><br>
                        Kind and friendly attitude<br>
                        Desire to learn<br>
                        Good presence<br>
                        English skills<br>
                        Spanish skills<br>
                    </p>
                </div>
            </div>
            
        </div>
    </div>
    <?php include 'Footer.php' ?>
</body>

</html>