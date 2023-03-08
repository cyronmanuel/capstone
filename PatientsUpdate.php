

<?php 
require('Pedia_database.php');

if(isset($_POST['edit'])){
    $edit_id=$_POST['Id'];
    $edit_name=$_POST['upateIdFullName'];
    $edit_gender=$_POST['upateIdGender'];
    $edit_birth =$_POST['upateIdBirthDate'];
    $edit_age  =$_POST['upateIdAge'];
    $edit_Blood =$_POST['upateIdBloodType'];
    $edit_Address =$_POST['upateIdAddress'];
    $edit_phoneNumber =$_POST['upateIdphoneNumber'];

  }
 
  if(isset($_POST['update'])){

    
    $id=$_POST['upadate_id'];
    $name=$_POST['upFullName'];
    $gender=$_POST['upGender'];
    $birth =$_POST['upBirthDate'];
    $age  =$_POST['upateIdAge'];
    $Blood =$_POST['upBloodType'];
    $Address =$_POST['upAddress'];
    $phoneNumber =$_POST['upPhoneNumber'];
  
  $updateSet = "UPDATE New_Patient SET  FullName='$name', Gender='$gender ', BirthDate='$birth', BloodType='$Blood', Address ='$Address',PhoneNumber='$phoneNumber' WHERE  id = '$id' ";
 


    $newUpdate =  mysqli_query($con,$updateSet );
    header('location: addPatients.php');

  }
  


?>


<!DOCTYPE html>




<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
          <h1>Update Patient</h1>
        <div >
              <div class="AddPatients-form">
                <form action="PatientsUpdate.php" method="post" >

                    <label><h4>Full Name</h4>
                        <input type="text" name="upFullName" required value="<?php echo   $edit_name?>">
                    </label>

                    <label ><h4>Gender</h4>
                       <label >
                        <input type="radio" name="upGender"  value="Male" required value="<?php echo  $edit_gender?>">
                        Male
                      </label><br>
                      <label>
                        <input type="radio" name="upGender"  value="Female" value="<?php echo   $edit_gender?>">
                        Female
                      </label>
                    </label>

                    <label><h4>Birth Date</h4>
                        <input type="date" name="upBirthDate" required value="<?php echo  $edit_birth?>">
                    </label>
                    

                    <label><h4>Blood Type</h4>
                        <select name="upBloodType" required value="<?php echo   $edit_Blood?>">
                           <option   hidden >  select</option>
                           <option name="upBloodType"  value="A+"  value="<?php echo   $edit_Blood?>">A+</option>
                           <option name="upBloodType"  value="B+"  value="<?php echo   $edit_Blood?>">B+</option>
                           <option name="upBloodType"  value="AB+" value="<?php echo   $edit_Blood?>">AB+</option>
                           <option name="upBloodType"  value="O+"  value="<?php echo   $edit_Blood?>">0+</option>
                           <option name="upBloodType"  value="A-"  value="<?php echo   $edit_Blood?>">A-</option>
                           <option name="upBloodType"  value="B-"  value="<?php echo   $edit_Blood?>">B-</option>
                           <option name="upBloodType"  value="AB-" value="<?php echo   $edit_Blood?>">AB-</option>
                           <option name="upBloodType"  value="O-"  value="<?php echo   $edit_Blood?>">O-</option>
                        </select>
                    </label>

                    <label><h4>Address</h4>
                        <input type="text" name="upAddress" placeholder="" required value="<?php echo    $edit_Address?>">
                    </label>
                    <label><h4>Phone Number</h4>
                        <input type="number" name="upPhoneNumber" required value="<?php echo   $edit_phoneNumber?>">
                    </label>

                     <br>
                     <br>
                     <br>
                        <input type="submit" name="update" value="UPDATE">
                        <input type="hidden" name="upadate_id"  value="<?php echo  $edit_id?>">
                   
           

                </form>

                