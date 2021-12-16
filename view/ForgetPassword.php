
<!DOCTYPE html>
<html lang="en">
<head>
<title>Forget Password</title>
<meta charset="UTF-8"> 

<link rel="stylesheet" type="text/css" href="css/ForgetPassword.css">

  <script src="js/ForgetPassword.js"></script>
</head>
<body>

<div class="header">

  <?php include('include/Hader.php') ?>
</div>

<div class="navbar">
  <a href="../index.php" class="active">Home</a>
  <a href="Photos.php">Photos</a>
  <a href="About.php">About</a>
  <a href="Contact.php">Contact Us</a>
  <a href="AdminLogin.php">Admin</a>
  <a href="LoginSignup.php" class="right">Login/Sign up</a>


</div>


      <br><br>

<h2>Forget Password Form</h2>

<div class="container">
<!-- 
  <form action="../controller/ChangPasswordAction.php"> -->

    <form name="ChangPassword" action="../controller/ForgetPasswordAction.php" method="POST" onsubmit="return isValid(this);">  


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

    



  <?php include('Include/Fooder.php') ?>

</body>
</html>
