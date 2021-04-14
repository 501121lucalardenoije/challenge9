<?php
session_start();


$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$lang = substr($lang, 0,2);

if(isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}

require_once("assets/languages/lang.$lang.php")


?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Buurtzorg</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
    
    
    <!-- ***** Header Area Start ***** -->
    <?php include_once("assets/includes/Header.Area.php");?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/DOC.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <?php echo CARS_TITLE; ?>
                        <?php echo CARS_UNDER_TITLE; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<<<<<<< Updated upstream:cars.php
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>
            <div class="contact-form">
                <form action="#" id="contact">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

            
                    </div>
                    <br>
                    <br>
                </form>
            </div>

            <?php
    $servername = "localhost";
    $username = "lucal20021";
    $password = "Lucal20021!";
=======
>>>>>>> Stashed changes:VerzorgendeA.php

    <div class="container">
<center>
    <H1>Verzorgende A</H1>
    <div class="card">
    <div class="card-body">
</BR>
    <H5>Vereisten: Algemene kennis hebben van het omgaan met mensen in nood. Er moet ervaring zijn in het werken in een groepen en met mensen in nood.</h5>
</BR>
<H5>Werkomstandigheden: Je werkt samen in een groep met anderen deze bevatten ervaren verpleegkundigen.</h5>
</br>
<H5>Locatie: Je werkt in twee locaties, je werkt op de Sibemaweg 20 en op de Arendstraat 12. Waar je werkt ligt aan de mening van je werkgever.</h5>
</br>
<h5>Salaris: Jij verdient als verzorgende het standaard salaris, dit valt tussen 3197 en 5675 euro.</h5>
</br>
<h5>Werkagenda: Jij werkt als Verzorgende A 6 dagen in de week met een vrije dag naar keuze.</h5>
</br>
<h5>Contractsoort: Je begint met een parttime contract, aan de hand van jouw prestaties kun je worden gepromoveerd naar fulltime Verzorgende A.</h5>
</br>
<h5>Om te solliciteren kun je op de knop onderaan klikken om naar het sollicitatieformulier te gaan. Deze vul je in en stuur je op naar ons je ontvangt ter bevestiging een bericht van ons dat jouw sollcitatie is aangekomen.</h5>
</center>
</div>
</div>

</br>

<center>
<button><a href="SDBF.php" class="button">Solliciteer</a></button>
</center




      
    <!-- ***** Fleet Ends ***** -->

    <!-- FOOTER -->
    <?php Include("assets/includes/footer.php"); ?>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>