<?php

include 'lib/Database.php';
include 'lib/config.php';

$db = new database();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>All Students Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

    body{ background: skyblue; }
    th,td{ text-align: center; font-weight: bold; }

  </style>
</head>
<body>

<div class="container1">
  <h2 class="top1">All Student Information</h2></br></br>

  <div class="text-center" >
      <a class="hh1 bold" href="index.php">New Registration</a>
  </div></br></br>

  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search By Names..." style="background: #cbf328;">
  

  <table class="table table-bordered" id="myTable">
    <thead>
      <tr class="top2">
        <th>Serial No.</th>
        <th>Name</th>
        <th>Age</th>
        <th>Education Qualification</th>
        <th>Gender</th>
        <th>Blood Group</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

  <?php
    if(isset($_GET['delid'])){
      $deleteid = $_GET['delid'];
      $query = "DELETE FROM student WHERE id='$deleteid'";
      $delete = $db->delete($query);
      if($delete){
        echo "<span class='tt bold'>Data Delete Successfully</h3>";
      }else{
        echo "<span class='tt1 bold'>Data Delete Failed</h3>";
      }
    }
  ?>

  <?php
    $query = "SELECT * FROM student";
    $view  = $db->select($query);
    if($view){
    while($result = $view->fetch_assoc()){
  ?>
      <tr class="hover">
        <td><?php echo $result['id']; ?></td>
        <td><?php echo $result['name']; ?></td>
        <td><?php echo $result['age']; ?></td>
        <td><?php echo $result['education']; ?></td>
        <td><?php echo $result['gender']; ?></td>
        <td><?php echo $result['blood']; ?></td>
        <td><?php echo $result['address']; ?></td>
        <td>
        	<a href="view.php?delid=<?php echo $result['id']; ?>" class="btn btn-danger hover4">Delete</a>
        	<a href="edit.php?editid=<?php echo $result['id']; ?>" class="btn btn-info hover3">Edit</a>
        </td>
      </tr>

<?php }} ?>

    </tbody>
  </table>
</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


</body>
</html>
