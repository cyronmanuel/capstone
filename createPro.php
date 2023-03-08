<?php 


require('Pedia_database.php');




echo  $ids ;


if(isset($_POST['pro'])){
  
    $ids = $_POST['IDS'];
    $date =$_POST['date'];
    $doc =$_POST['doctor'];
    $bill =$_POST['bill'];
    


 
$Insert = "INSERT INTO profile VALUES('$ids', '$date', '$doc' , '$bill')";
$insert = mysqli_query($con, $Insert);
echo "create";
echo $ids;
 header('location:addPatients.php');
}
