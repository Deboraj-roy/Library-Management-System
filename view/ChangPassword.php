<?php
// Start the session
session_start();

  
     $SESSION_have = $_SESSION["SESSION_have"];
      
      if ($SESSION_have != "YES") {

      header("Location: ../index.php");


   }


?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>User Profile</title>
<meta charset="UTF-8"> 

<link rel="stylesheet" type="text/css" href="css/ChangPassword.css">


  <script src="js/ChangPassword.js"></script>
</head>
<body>

<div class="header">

  <?php include('include/Hader.php') ?>
</div>

<div class="navbar">
  <a href="../index.php" class="active">Home</a>
  <a href="../view/userProfile.php">Portal</a>
  <a href="../controller/Logout.php" class="right">Log out</a>
  <a href="#" class="right"> <?php echo $_SESSION["UserType"] ;?> </a>

</div>


      <br><br><br>




<?php     
   echo "<br> Name: " ;
    echo $_SESSION["Name"];

  ?>




<body>

<h2>Password Chang Form</h2>

<div class="container">
<!-- 
  <form action="../controller/ChangPasswordAction.php"> -->

    <form name="ChangPassword" action="../controller/ChangPasswordAction.php" method="POST" onsubmit="return isValid(this);">  


  <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="email" id="email" name="email" placeholder="Your email..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="password">Password</label>
    </div>
    <div class="col-75">
      <input type="password" id="password" name="password" placeholder="ex : !@#12345abMaZ">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="confirm_password">Confirm password</label>
    </div>
    <div class="col-75">
      <input type="password" id="confirm_password" name="confirm_password" placeholder="confirm your password.">
    </div>
  </div>

  
  <div class="row">
    <br>
    <input type="submit" value="Submit">
    <input type="Reset" value="Reset">
  </div>
  <br><br>

  <p id="message"></p>
  </form>
</div>

</body>


  



      <br><br><br>


      


  <?php include('include/Fooder.php'); ?>



</body>
</html>
