<?php
$sql = "SELECT * FROM tb_cars INNER JOIN tb_image ON tb_cars.id = tb_image.car_id";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result

$pathtoproject = "/groep13/challenge 6/";

echo "<div class='row'>";
foreach($result as $key => $row) {
    echo "<div class='col-lg-4'>";
    echo '<div class="trainer-item">';
    echo '<div class="image-thumb">';
    echo "<img src='" . $pathtoproject . "/autoimages/".$row['id'] . "/" . $row['name'] . "' '>";
    echo "</div>"; //end image
    echo '<div class="down-content">';
    echo "<span>";
  
    echo "</span>"; //einde prijs
    echo "<h4>" . $row['brand'] . "," . "<br>" . $row['model'] . "</h4>";// brand/type
   
    echo '<ul class="social-icons"><li><a href="car-details.php?id='.$row['id'].'">+ View vacancy</a></li></ul>';
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
?>