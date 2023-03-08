<?php
require('./Pedia_database.php');


$ids = $_GET['ID'];
if(isset($_POST['removeData'])){
    $deleted = $_POST['removeId'];

// $rowData ="DELETE FROM  New_Patient profile  WHERE id = '$deleted',id = '$ids'  ";
    $rowData ="DELETE a.*, b.* FROM New_Patient a
    INNER JOIN profile b ON a.id = b.ids
    WHERE a.id= '$deleted'";
    $rowDeleted = mysqli_query($con,$rowData);

    header('location:addPatients.php'); 
 }else{
    echo '<script>not deleted  dahil  wlaa pang lamaam</script>';
 }
?>