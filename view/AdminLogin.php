<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="UTF-8"> 

<link rel="stylesheet" type="text/css" href="css/login.css">

<script src="js/AdminLogin.js"></script>


</head>
<body >

<div class="header">

  <?php include('include/Hader.php') ?>
</div>

<div class="navbar">

  <a href="../index.php" class="active">Home</a>
  <a href="../view/About.php">About</a>
  <a href="../view/Photos.php">Photos</a>
  <a href="../view/Contact.php">Contact Us</a>
  <a href="../view/LoginSignup.php" class="right">Login/Sign up</a>

</div>
 
 <br><br>


<div class="bg-img">
  <form name="Login" action="../controller/AdminLoginAction.php" method="POST" onsubmit="return isValid(this);" class="container">

    <h1>Admin Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email"  >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password"  >

    <button type="submit" class="btn">Login</button><button type="Reset" class="btn2">Reset</button>

<br>
  <p id="message"></p>
  <br>
  </form>
</div>

<br><br>
<!-- 
Not registered yet? <a href="Registration.php"><button class="btn3">Sign Up</button></a> for registration. -->

    <br><br>

 <br><br>
 
  <?php include('include/Fooder.php') ?>

</body>
</html>
