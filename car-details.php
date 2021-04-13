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
     <!--***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <?php include_once("assets/includes/Header.Area.php");?>
    <!-- ***** Header Area End ***** -->

    

    <!-- ***** id pages Starts ***** -->
    <?php 
      $id = $_GET['id']; 


      $sql = "SELECT * FROM tb_cars WHERE id=?";
      $data = array($id);

      require_once('assets/includes/connection.inc.php');
      $stmt = $pdo->prepare($sql);
      $stmt->execute($data);
      $result = $stmt->fetchAll();
      $row = $result[0];

   

    ?>
    <!-- ***** id pages End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                      
                        <p><?php echo $row['brand']  . " , " .  $row['model'] ;?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="assets/images/car-image-1-1200x600.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/car-image-1-1200x600.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/car-image-1-1200x600.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            
            <br>
            <br>

            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><i class="fa fa-briefcase"></i> About this job</a></li>
                  <li><a href='#tabs-2'><i class="fa fa-info-circle"></i> Job Description</a></li>
                  <li><a href='#tabs-3'><i class="fa fa-plus-circle"></i> Job Extras</a></li>
                  <li><a href='#tabs-4'><i class="fa fa-phone"></i> Contact Details</a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content' style="width: 100%;">
                  <article id='tabs-1'>
                    <h4>About this job</h4>

                    <div class="row">
                       <div class="col-sm-6">
                            <label><?php echo TYPE; ?></label>
                            <p><?php echo $row['type'];?></p>
                       </div> 

                       <div class="col-sm-6">
                            <label><?php echo REGISTRATIE; ?></label>
                            
                            <p><?php echo $row['registration'];?></p>
                       </div>

                       <div class="col-sm-6">
                            <label><?php echo MERK; ?></label>
                       
                            <p><?php echo $row['brand'];?></p>
                       </div>

                       <div class="col-sm-6">
                            <label><?php echo MODEL; ?></label>
                       
                            <p><?php echo $row['model'];?></p>
                       </div>

                       <div class="col-sm-6">
                            <label><?php echo BOUWJAAR; ?></label>
                       
                            <p><?php echo $row['bouwjaar'];?></p>
                       </div>

                       <div class="col-sm-6">
                            <label>Mileage</label>
                       
                            <p><?php echo $row['kilometerstand'];?>km</p>
                       </div>                                                               
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <h4>Vehicle Description</h4>
                    
                    <p>- Colour coded bumpers <br> - Tinted glass <br> - Immobiliser <br> - Central locking - remote <br> - Passenger airbag <br> - Electric windows <br> - Rear head rests <br> - Radio <br> - CD player <br> - Ideal first car <br> - Warranty <br> - High level brake light <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco                         laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat                     cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                   </article>
                  <article id='tabs-3'>
                    <h4>Vehicle Extras</h4>

                    <div class="row">   
                        <div class="col-sm-6">
                            <p>ABS</p>
                        </div>
                        <div class="col-sm-6">
                            <p>Leather seats</p>
                        </div>
                        <div class="col-sm-6">
                            <p>Power Assisted Steering</p>
                        </div>
                        <div class="col-sm-6">
                            <p>Electric heated seats</p>
                        </div>
                        <div class="col-sm-6">
                            <p>New HU and AU</p>
                        </div>
                        <div class="col-sm-6">
                            <p>Xenon headlights</p>
                        </div>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <h4>Contact Details</h4>

                    <div class="row">   
                        <div class="col-sm-6">
                            <label>Names</label>

                            <p>
                            Luca Lardenoije
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <label>Phone</label>

                            <p>+31 (0)6 00 11 55 11</p>
                        </div>
                        <div class="col-sm-6">
                            <label>Mobile phone</label>
                            <p>+31 (0)6 00 11 55 11</p>
                        </div>
                        <div class="col-sm-6">
                            <label>Email</label>
                            <p><a href="#">info@vistacars.nl</a></p>
                        </div>
                        <div class="main-button text-center">
                <a href="mailform1.php"><?php echo OFFERTE; ?></a>
            </div>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
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