<?php 


require('./Pedia_database.php');



if(isset($_POST['create'])){
    
    $FullName =$_POST['FullName'];
    $Gender =$_POST['Gender'];
    $BirthDate =$_POST['BirthDate'];
    $BloodType =$_POST['BloodType'];
    $age =$_POST['Age'];
    $Address =$_POST['Address'];
    $PhoneNumber =$_POST['PhoneNumber'];


   
$InsertData = "INSERT INTO  New_Patient VALUES(id , '$FullName' ,'$Gender','$BirthDate','$BloodType' ,'$Address', '$PhoneNumber')";
$GetInsertData = mysqli_query($con, $InsertData);


 header('location:addPatients.php');


}






?>