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
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

</br>
<center>
        <h1>Application Form</h1>
  </br>
        <form action="insert.php" method="post">
              
            <p>
                <label for="firstName">First Name:</label>
                <input type="text" name="first_name" id="firstName" required>
            </p>
  
  
              
            <p>
                <label for="lastName">Last Name:</label>
                <input type="text" name="last_name" id="lastName" required>
            </p>
  
  
              
            <p>
                <label for="Gender">Gender:</label>
                <input type="text" name="gender" id="Gender" required>
            </p>

            <p>
                <label for="Dateofbirth">Date of birth:</label>
                <input type="text" name="dateofbirth" id="Dateofbirth" required>
            </p>

            <p>
                <label for="Address">Address:</label>
                <input type="text" name="address" id="Address" required>
            </p>

            <p>
                <label for="Postalcode">Postal code:</label>
                <input type="text" name="postalcode" id="Postalcode" required>
            </p>

            <p>
                <label for="Location">Location:</label>
                <input type="text" name="location" id="Location" required>
            </p>

            <p>
                <label for="Phone">Phone:</label>
                <input type="text" name="phone" id="Phone" required>
            </p>

            <p>
                <label for="email">Email Address:</label>
                <input type="text" name="email" id="email" required>
            </p>
  
  
              <p>
            <label for="Motivation">Motivation:</label>
            <textarea id="motivation" name="motivation" rows="4" cols="50" required></textarea>
              </p>
              
      
  
              
            <input type="submit" value="Submit">
        </form>
    </center>