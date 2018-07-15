<?php include ('lib/Dataprocessing.php'); ?>

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
    <h2 class="top1">Student Management</h2>

    <div class="text-center">
    	<span class="tt1">Trainner :</span>
    	<span class="tt2">
    		<img src="img/img3.jpg" alt="">
    		<p class="tt3">Raihan Islam<br><small>CSE</small></p>
    	</span>
    </div>

    <div class="text-center" >
      <a class="hh1 bold" href="index.php">New Registration</a>
      <a class="hh2 bold" href="view.php">View All Data</a>
    </div>
      
    <form action="" method="post">
        <h2>
        	<i class="success"><?php if(isset($success)){  echo $success; } ?></i>
        	<i class="failed"><?php if(isset($failed)){  echo $failed; } ?></i>
    	</h2>
        
      <div class="form-group">        
        <label for="usr">Name : <span style="color: red;"><i>
        <?php if(isset($problem1)){  echo $problem1; } ?></i></span></label>
        <input type="text" class="form-control" id="usr" name="name" style="background:#cbf328">
      </div>

      <div class="form-group">
        <label for="age">Age : <span style="color: red;"><i>
        <?php if(isset($problem2)){  echo $problem2; } ?></i></span></label>
        <input type="number" class="form-control" id="age" name="age" style="background:#cbf328">
      </div>

      <div class="form-group">
        <label for="education">Education Qualification : <span style="color: red;"><i>
        <?php if(isset($problem3)){  echo $problem3; } ?></i></span></label>
        <input type="text" class="form-control" id="education" name="education" style="background:#cbf328">
      </div>

      <div class="form-group">
        <label for="gender">Gender : <span style="color: red;"><i>
        <?php if(isset($problem4)){  echo $problem4; } ?></i></span></label></br>
        <select name="gender" class="form-control" style="background: #cbf328;">
          <option value="">Select One</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>

      <div class="form-group">
        <label for="blood">Blood Group : <span style="color: red;"><i>
        <?php if(isset($problem5)){  echo $problem5; } ?></i></span></label>
        <input type="text" class="form-control" id="blood" name="blood" style="background:#cbf328">
      </div>

      <div class="form-group">
        <label for="address">Address (city) : <span style="color: red;"><i>
        <?php if(isset($problem6)){  echo $problem6; } ?></i></span></label>
        <input type="text" class="form-control" id="address" name="address" style="background:#cbf328">
      </div>


      <div class="form-group">
        <input type="submit" class="form-control hover2" id="submit" value="Submit" name="submit">
      </div>
    </form>
  </div>

</body>
</html>
