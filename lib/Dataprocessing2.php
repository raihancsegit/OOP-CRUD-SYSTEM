<?php

include 'Database.php';
include 'config.php';

$db = new database();

?>


<?php

$editid = $_GET['editid'];

if(isset($_POST['submit'])){

  $name       = $_POST['name'];
  $age        = $_POST['age'];
  $education  = $_POST['education'];
  $gender     = $_POST['gender'];
  $blood      = $_POST['blood'];
  $address    = $_POST['address']; 
  

  $query = "UPDATE student SET name='$name',age='$age',education='$education',gender='$gender',blood='$blood',address='$address' WHERE id='$editid'";
  $update = $db->update($query);
  if($update){
      $success1 = "<span class='tt bold'>Data Update Successfully</span>";
    }else{
      $failed1 = "<span class='tt1 bold'>Data Update Failed, Try again</span>";
    }
}


?>