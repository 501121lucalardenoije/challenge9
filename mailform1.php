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

    <title>V!st@ CARS</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
  

    <!-- ***** Preloader Start ***** -->
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
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <?php include_once("assets/includes/Header.Area.php");?>
    <!-- ***** Header Area End ***** -->

    
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <?php echo OFFERTE_AANVRAAG; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
    //back-end mailform
    if(isset($_POST['to']) && $_POST['to'] != '') {

      if(filter_var($_POST['to'], FILTER_VALIDATE_EMAIL) ) {
          //De ingevulde naam
          $fullname = $_POST['fullname'];

          //De ontvanger van de mail
          $to = "bestel@lucaportfolio.nl";

          //Het onderwerp van de mail
          $subject = $_POST['to'];

          //Het bericht wat wordt verstuurd, kan je dus helemaal aanpassen zoals je wilt
          $message = "Hello " . $fullname . ".<br>In this mail you can find the proposal you requested.<br>Thank you for using V!ST@CARS. ";

          //Van welk Mail adress de mail verstuurd wordt en de naam, test@brunovanleeuwen.nl dus veranderen naar een mail van jou domein
          $headers = "From: V!ST@CARS <bestel.lucaportfolio.nl>\r\n";

          //Maakt het bericht html
          $headers .= "Content-type: text/html\r\n";

          //Het versturen van de mail
          mail($to, $subject, $message, $headers);

          //melden dat de email verstuurd is
          echo "Mail Send!";
      }
  }
    ?>

   <!--Formulier voor de nodige info van de klant-->
   <div class="wrapper">
        <h3> <?php echo OFFERTE_TITLE; ?></h3>
            <form action="" method="POST">
            <label for="fullname">Full name: </label>
            <input type="text" placeholder="Email" name="fullname"><br>
            <label for="to">Email: </label>
            <input type="text" placeholder="<?php echo OFFERTE_NAAM ; ?>" name="to"><br>
            <div class="main-button text-center">
            <input type="submit" name="submit" value="<?php echo SEND; ?>">
            </div>
        </form>  
    </div>

    
    

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