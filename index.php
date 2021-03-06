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

    
    <!-- ***** Preloader Start ***** 
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
     ***** Preloader End ***** -->
    
    <!-- ***** Header Area Start ***** -->
    <?php include_once("assets/includes/Header.Area.php");?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/DOC.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <?php echo VIDEO_CAPTION; ?>
                <div class="main-button">
                    <a href="contact.php"><?php echo CONTACT_US; ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
    

   <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <?php echo FEATURED_CARS; ?>
                        <img src="assets/images/line-dec-alt.jpg" alt="">
                        <p><?php echo FEATURED_CARS_TEXT; ?></p>
                    </div>
                </div>
            </div>
            <br>
            <?php ?>
            <div class="main-button text-center">
                <a href="vacancy.php"><?php echo VIEW_CAR; ?></a>
            </div>
        </div>
    </section>
    <!-- ***** Cars End ***** -->

  

  
    <section class="section section-bg" id="schedule" style="background-image: url(assets/images/DOCWR.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <?php echo READ_ABOUT_US; ?>
                        <img src="assets/images/line-dec.png" alt="">
                        <?php echo READ_ABOUT_US_OPENING; ?>
                    </div>
                </div>
            </div>
            <!--***** Dummytext Start ***** -->
            <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
              <p>Wij bieden thuiszorg, wij zetten ook zetten ervaren verpleegkundigen en wijkziekenverzorgende in. Samen met diegene in nood zoeken zij samen naar een oplossing.</p>
                    </div>
                </div>
            </div>
            <!--***** Dummytext End ***** -->
        </div>
    </section>

    <br>
    <br>

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/DOC.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <?php echo SEND_US_A_MESSAGE; ?>
                        <?php echo SEND_US_A_MESSAGE_TEXT; ?>
                        <div class="main-button">
                            <a href="contact.php">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

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