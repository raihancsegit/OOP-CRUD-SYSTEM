<?php

include 'Database.php';
include 'config.php';

$db = new database();

?>


<?php

if(isset($_POST['submit'])){

  $name       = $_POST['name'];
  $age        = $_POST['age'];
  $education  = $_POST['education'];
  $gender     = $_POST['gender'];
  $blood      = $_POST['blood'];
  $address    = $_POST['address'];

  if(isset($_POST['gender'])){
    $gender = $_POST['gender'];
  }


  $data = $name == '' || $age == '' || $education == '' || $gender == '' || $blood == '' || $address == '';

  
  if($name == ''){
    $problem1 = "Name Field Empty";
  };

  if($age == '') {
    $problem2 = "Age Field Empty";
  };

  if($education == '') {
    $problem3 = "Education Field Empty";
  };

  if($gender == '') {
    $problem4 = "Gender Field Empty";
  };

  if($blood == '') {
    $problem5 = "Blood Field Empty";
  };

  if($address == '') {
    $problem6 = "Address Field Empty";
  };
  

  if($data){
    $problem = "Field Empty";
  }else{
    $query = "INSERT INTO student(name,age,education,gender,blood,address) VALUES('$name','$age','$education','$gender','$blood','$address')";
    $result = $db->insert($query);
    
    if($result){
      $success = "Post Successfull";
    }else{
      $failed = "Post Failed";
    }
    
  }

}


?>