<?php include ('lib/Dataprocessing2.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Data Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background: skyblue; font-size:17px;">

  <div class="container">
    <h2 class="top1">Update Your Data</h2></br></br>

    <div class="text-center" >
      <a class="hh1 bold" href="index.php">New Registration</a>
      <a class="hh2 bold" href="view.php">View All Data</a>
    </div>

  <?php

  $editid = $_GET['editid'];
  $query = "SELECT * FROM student WHERE id='$editid'";
  $edit = $db->select($query);

  while ($result = $edit->fetch_assoc()) { 

  ?>

    <form action="" method="post">
      <h2>
          <i><?php if(isset($success1)){  echo $success1; } ?></i>
          <i><?php if(isset($failed1)){  echo $failed1; } ?></i>
      </h2>
        
      <div class="form-group">        
        <label for="usr">Name:</label>
        <input type="text" class="form-control" id="usr" name="name" value="<?php echo $result['name']; ?>" style="background:#cbf328">
      </div>

      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control" id="age" name="age" value="<?php echo $result['age']; ?>" style="background:#cbf328">
      </div>

      <div class="form-group">
        <label for="education">Education Qualification:</label>
        <input type="text" class="form-control" id="education" name="education" value="<?php echo $result['education']; ?>" style="background:#cbf328">
      </div>

      <div class="form-group">
        <label for="gender">Gender:</label></br>
        <select name="gender" style="width: 100%; background: #cbf328;">
          <option value="">Select One</option>
          <option value="Male" selected>Male</option>
          <option value="Female">Female</option>
        </select>
      </div>

      <div class="form-group">
        <label for="blood">Blood Group:</label>
        <input type="text" class="form-control" id="blood" name="blood" value="<?php echo $result['blood']; ?>" style="background:#cbf328">
      </div>

      <div class="form-group">
        <label for="address">Address(city):</label>
        <input type="text" class="form-control" id="address" name="address" value="<?php echo $result['address']; ?>" style="background:#cbf328">
      </div>


      <div class="form-group">
        <input type="submit" class="form-control hover2" id="submit" value="Update" name="submit" style="background: green; color: #fff; font-size:16px;">
      </div>

    </form>

  <?php } ?>

  </div>

</body>
</html>
