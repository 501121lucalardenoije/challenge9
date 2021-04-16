<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Confirmation</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>



<body>
</br>
    <center>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "db_car_5");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
      
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $gender =  $_REQUEST['gender'];
        $date_of_birth = $_REQUEST['dateofbirth'];
        $address  =  $_REQUEST['address'];
        $postal_code = $_REQUEST['postalcode'];
        $location = $_REQUEST['location'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $motivation = $_REQUEST['motivation'];
    
        $sql = "INSERT INTO tb_application VALUES ('$first_name', 
            '$last_name','$gender','$date_of_birth','$address','$postal_code','$location','$phone','$email','$motivation')";
          
        if(mysqli_query($conn, $sql)){
        
            echo "<h3>Wij hebben uw sollicitatie ontvangen, u krijgt in korte tijd nog te weten of we u uitnodigen voor een gesprek. " 
                . "</br> " 
                . " </h3>";
          
  
            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $date_of_birth\n $address\n $postal_code\n $location\n $phone\n $email\n $motivation");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        mysqli_close($conn);
        ?>
</br>
        <h4>Ga naar<a href="index.php"> 'Home'</a></h4>
    </center>

<
</body>
  
</html>