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
                        <?php echo VAC_READ; ?>
                        <?php echo VAC_INFO; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
   

            <?php
   

    if(isset($_POST['frmGegevens'])) {
        //opslaan van de gegevens
    
        //print_r($_POST); //developers code!

        include_once("assets/includes/connected.inc.php"); //conntectie DB
        include_once("assets/includes/admin_verwerkform.inc.php");    //gegevens uit formulier verzamelen
        include_once("assets/includes/adminform.inc.php");     //opslaan gegevens uit DB
    } 
    include_once("assets/includes/connected.inc.php"); //conntectie DB
    include_once("assets/includes/select.inc.php"); //toon gegevens uit DB
    ?>  
  <div class="container">
<div class="row">
  <div class="column">
    <div class="content">
      <img src="assets/images/DOC.jpg" alt="DOC" style="width:25%">
      <a href="VerzorgendeA.php"><h3>Verzorgende A</h3></a>
      <p>Als Verzorgende A werk jij intensief met diegene in nood om samen een oplossing te vinden. Jij bent betrouwbaar en staat altijd klaar om mensen te helpen.</p>
    </div>
  </div>
</div>
  <div class="row">
  <div class="column">
    <div class="content">
    <img src="assets/images/DOC.jpg" alt="DOC" style="width:25%">
      <a href="VerzorgendeB.php"><h3>Verzorgende B</h3></a>
      <p>Als Verzorgende B ondersteun jij de Verzorgende A bij het helpen van mensen in nood. Je werkt voornamelijk samen in een groep met andere verpleegkundigen. Jij bent Behulpzaam en kaunt goed problemen oplsossen onder druk.</p>
    </div>
  </div>
</div>
  <div class="row">
  <div class="column">
    <div class="content">
    <img src="assets/images/Design.jpg" alt="Design" style="width:25%">
      <a href="SoftwareDeveloperA.php"><h3>Software Developer A</h3></a>
      <p>Als Software Developer A zorg jij voor de Front-end van de website, jij wilt dat het toegangelijk is voor iedereen die jouw website bezoekt. Jij denkt ook dat het altijd beter kan.</p>
    </div>
  </div>
</div>
  <div class="row">
  <div class="column">
    <div class="content">
    <img src="assets/images/Code.jpg" alt="Code" style="width:25%">
      <a href="SoftwareDeveloperB.php"><h3>Software Developer B</h3></a>
      <p>Als Software Developer B Zorg jij voor de Back-end van de website. Jij wilt dat alles perfect werkt zoals jij het voorheen hebt gepland, jij bent pas blij als de website gesynchroniseerd werkt met de Front-end.</p>
    </div>
  </div>
</div>

  
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