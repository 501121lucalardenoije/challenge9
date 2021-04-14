<?php
session_start();

$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$lang = substr($lang, 0,2);

if(isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}

require_once("assets/languages/lang.$lang.php");



?>

<?Php include_once("assets/includes/Header.Area.php");?>
<!DOCTYPE html>
<html lang="en">

  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/DOC.jpg)">
<div class="container">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="cta-content">
                <br>
                <br>
                <?php echo EMP_READ; ?>
                <?php echo EMP_INFO; ?>
            </div>
        </div>
    </div>
</div>
</section>

<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=db_application", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

<?php
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // collect value of input field
    $data = $_REQUEST['val1'];
  
    if (empty($data)) {
        echo "data is empty";
    } else {
        echo $data;
    }
}

        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $email =  $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $preposition = $_REQUEST['preposition'];
        $motivation = $_REQUEST['motivation'];
        $status = $_REQUEST['status'];
        $timestamp = $_REQUEST['timestamp'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO college  VALUES ('$first_name', 
            '$last_name','$email','$phone','$preposition','$motivation','$status','$timestamp')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$first_name\n $last_name\n "
                . "$email\n $phone\n $preposition\n $motivation\n $status\n $timestamnp");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
?>

    <center>
        <h1>Vacancy form</h1>
  
        <form action="insert.php" method="post">
              
            <p>
                <label for="firstName">First Name:</label>
                <input type="text" name="first_name" id="firstName">
            </p>
  
  
              
            <p>
                <label for="lastName">Last Name:</label>
                <input type="text" name="last_name" id="lastName">
            </p>
  
  
              
            <p>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
            </p>
  
              
              
            <p>
                <label for="phone">Phone:</label>
                <input type="text" name="phone" id="phone">
            </p>
  
              
              
            <p>
                <label for="preposition">Preposition:</label>
                <input type="text" name="preposition" id="preposition">
            </p>


            <p>
                <label for="motivation">Motivation:</label>
                <textarea><input type="text" name="motivation" id="motivation"></textarea>
            </p>


            <p>
                <label for="status">Status:</label>
                <input type="text" name="status" id="status">
            </p>


            <p>
                <label for="timestamp">Timestamp:</label>
                <input type="text" name="timestamp" id="timestamp">
            </p>
  
              
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  




