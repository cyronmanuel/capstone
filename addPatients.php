<?php 
 require('Pedia_database.php');
 require('selectPatients.php');



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

        <style>
          body{
            font-family: Arial, Helvetica, sans-serif;
          }table {
            position: absolute;
             top:0px;
             left: 300px;
          }
        </style>
    </head>
    <body>
          <h1>New Patient</h1>
        <div >
              <div class="AddPatients-form">
                <form action="CreatePatients.php" method="post" >

                    <label><h4>Full Name</h4>
                        <input type="text" name="FullName" required>
                    </label>

                    <label ><h4>Gender</h4>
                       <label >
                        <input type="radio" name="Gender"  value="Male" required>
                        Male
                      </label><br>
                      <label>
                        <input type="radio" name="Gender"  value="Female">
                        Female
                      </label>
                    </label>

                    <label><h4>Birth Date</h4>
                        <input type="date" name="BirthDate" required>
                    </label>
                    

                    <label><h4>Blood Type</h4>
                          <select name="BloodType" required  pattern="[A]{2}">
                          <option value="">Please choose BloodType</option>
                          <optgroup label="Positive Blood Type ">
                           <option name="BloodType"  value="A+">A+</option>
                           <option name="BloodType"  value="B+">B+</option>
                           <option name="BloodType"  value="AB+">AB+</option>
                           <option name="BloodType"  value="O+">0+</option>
                           <optgroup label="Negative Blood Type ">
                           <option name="BloodType"  value="A-">A-</option>
                           <option name="BloodType"  value="B-">B-</option>
                           <option name="BloodType"  value="AB-">AB-</option>
                           <option name="BloodType"  value="O-">O-</option>
                        </select>
                    </label>

                    <label><h4>Address</h4>
                        <input type="text" name="Address" placeholder="" required>
                    </label>
                    <label><h4>Phone Number</h4>
                        <input type="number" name="PhoneNumber" pattern="[0-9]{10}" required>
                    </label>

                     <br>
                     <br>
                     <br>
                        <input type="submit" name="create" value="CREATE">
                   
           
                
                </form>
              </div>
           


   <div class="w3-container">
 

 <div class="w3-bar w3-black">
   <button class="w3-bar-item w3-button" onclick="openCity('London')">None</button>
   <button class="w3-bar-item w3-button" onclick="openCity('Tokyo')">New Patients</button>
 </div>
 
 <div id="London" class="w3-container city">
   <h2>none</h2>
   <table border>
     <tr>
        <th><a href="?column=id&sort=<?php echo $sort ?>">ID</a></th>
        <th><a href="?column=id&sort=<?php echo $sort ?>">Profile</a></th>
        <th><a href="?column=FullName&sort=<?php echo $sort ?>">Full Name</a></th>
        <th><a href="?column=Gender&sort=<?php echo $sort ?>">Gender</a></th>
        <th><a href="?column=BirthDate&sort=<?php echo $sort ?>">Birth Date</a></th>
        <th><a href="?column=Age&sort=<?php echo $sort ?>">Age  --  Years  --  Months -- Days</a></th>
        <!-- <th><a href="?column=Months&sort=<?php echo $sort ?>"> Month</a></th> -->
        <th><a href="?column=BloodType&sort=<?php echo $sort ?>">Blood Type</a></th>
        <th><a href="?column=Address&sort=<?php echo $sort ?>">Address</a></th>
        <th><a href="?column=PhoneNumber&sort=<?php echo $sort ?>">PhoneNumber</a></th>
        <th colspan="2">Action</th>
     </tr>
     <?php while ($value = mysqli_fetch_assoc($GetData )) {?>
            <tr>
         
                <td><?php echo $value['id']?></td>
                <td><a href="profile.php?ID=<?php echo $value['id']?>&NAME=<?php echo $value['FullName']?>">profile</a></td>
                <td><?php echo $value['FullName']?></td>
                <td><?php echo $value['Gender']?></td>
                <td><?php echo $value['BirthDate']?></td>
                <td><?php		


 

    $convert = $value['Age']; // days you want to convert

		$years = ($convert / 365) ; // days / 365 days
		$years = floor($years); // Remove all decimals

		$month = ($convert % 365) / 31; // I choose 30.5 for Month (30,31) ;)
		$month = floor($month); // Remove all decimals

		$days = ($convert % 365) % 31; // the rest of days
   
   
   
    if($value['Age'] =	$years){
      echo "years ",$years;
    }
    if($value['Age'] = 	$month){
      echo "months ",$month;
    }
    if($value['Age'] =	$days){
      echo "days ", $days;
    }
		// Echo all information set
		/* echo " " .$years.' year - '.$month.' month - '.$days.' day'; */
?>
                                                    </td>
                <td><?php echo $value['BloodType']?></td>
                <td><?php echo $value['Address']?></td>
                <td><?php echo $value['PhoneNumber']?></td>
              <td>
                 <!-- update data form -->
             <form action="PatientsUpdate.php" method="post">
               <input type="submit"  name="edit"             value="Update">
                <input type="hidden" name="Id"                 value="<?php echo $value['id']?>">  
                <input type="hidden" name="upateIdFullName"    value="<?php echo $value['FullName']?>">
                <input type="hidden" name="upateIdGender"      value="<?php echo $value['Gender']?>">
                <input type="hidden" name="upateIdBirthDate"   value="<?php echo $value['BirthDate']?>">
                <input type="hidden" name="upateIdAge"         value="<?php echo $value['Age']?>">
                <input type="hidden" name="upateIdBloodType"   value="<?php echo $value['BloodType']?>">
                <input type="hidden" name="upateIdAddress"     value="<?php echo $value['Address']?>">
                <input type="hidden" name="upateIdphoneNumber" value="<?php echo $value['PhoneNumber']?>">
              </form>
              </td> 
              <td> 
                       <!-- delete data form -->
              <form action="PatientsDelete.php" method="post">
              <input type="submit" name="removeData" value="DELETE">
                <input type="hidden" name="removeId" value="<?php echo $value['id']?>">  
              </form>
              </td>
             
          </tr>
          <?php }?>
 
   </table>
 </div>
               <!-- form table -->
 <div id="Tokyo" class="w3-container city" style="display:none">
 
 </div>
             </div>



 
   
<script>
    
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script>



    </body>
</html>