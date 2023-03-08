<?php 
require('./Pedia_database.php');








$ids = $_GET['ID'];
$Select = "SELECT *  FROM  profile WHERE ids='$ids' ";
$Get = mysqli_query($con,$Select);


echo "selected";
?>