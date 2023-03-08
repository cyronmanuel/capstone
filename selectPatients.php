<?php 
require('./Pedia_database.php');





// sorting functions  for the database tables
 $sort = 'ASC'; $column = 'id';
if (isset($_GET['column']) && isset($_GET['sort'])) {
    $column = $_GET['column'];
    $sort = $_GET['sort'];
    $sort == 'ASC' ? $sort = 'DESC' : $sort = 'ASC'; 
}



if(isset($_POST['create']))
  {$age =$_POST['Age'];}

$SelectData = "SELECT * ,(TIMESTAMPDIFF(day, BirthDate, CURDATE())) AS Age  FROM New_Patient   ORDER BY $column $sort";
$GetData = mysqli_query($con,$SelectData);



?>