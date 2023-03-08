<?php 
 require('Pedia_database.php');
 require('select.php');






//  $SelectDat = "SELECT *  FROM profile WHERE id ='$ids' ";
//  $GetDat = mysqli_query($con,$SelectDat);
   

 $ids = $_GET['ID'];
 $name = $_GET['NAME'];
   
 $FullName =$_POST['FullName'];
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
          }
          .avatar {
  vertical-align: middle;
  width: 150px;
  height:150px;
  border-radius: 50%;
} 
h2{
    border:solid black 5px;
    width:auto ; 
}
form{
    border:solid black 2px;
    background:blue;
    width:200px; 
    color: white;
}
        </style>
    </head>
    
    <body>
    <h1 >profile</h1>
<!-- FORM -->
<img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="avatar">
<h2 ><?php echo  $ids?> <?php echo  $name?></h2> 
      <form action="createPro.php" method="post">

      <input type="hidden" name="IDS"  value="<?php echo  $ids?>">
      <input type="date"  name="date">
     <br>
    <select   name="doctor" required>
         <option  name="doctor" value="">select doctor</option>
        <option   name="doctor" value='<img src="https://www.pinnaclecare.com/wp-content/uploads/2017/12/bigstock-African-young-doctor-portrait-28825394.jpg"
         alt="Girl in a jacket" width="50" height="60">'>doc1</option>

        <option   name="doctor" value='<img src="https://img.freepik.com/free-photo/doctor-with-his-arms-crossed-white-background_1368-5790.jpg?w=2000"
         alt="Girl in a jacket" width="50" height="60">'>doc2</option>

        <option   name="doctor" value='<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDUiXFuarEJUMRXt77SKGrmaTpN-dUQG7lj2T4II1Eqmb9pehb9vn9ZL0Ubz7BklGbfS8&usqp=CAU"
         alt="Girl in a jacket" width="50" height="60">'>doc3</option>

    </select>
    <br>
    bill
      <input type="number" name="bill">
      <br>
      <br>
     <input type="submit" name="pro" value="Patient Data">
  
     
      </form>



      <table border>
        <tr>
            <th>ids</th>
            <th>date</th>
            <th>doc</th>
            <th>bill</th>
        </tr>
        <?php while ($gets = mysqli_fetch_array($Get)) {?>
            
            <tr>
            <td><?php echo $gets['ids']?></td>
            <td><?php echo $gets['date']?></td>
            <td><?php echo $gets['doctor']?></td>
            <td><?php echo $gets['bill']?></td>
           </tr>
         
          <?php }?>
        
      </table>




         

       
       
          <h1><?php echo   $value['FullName']?></h1>
 
 


    </body>
</html>