

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login Action</title>
<meta charset="UTF-8"> 

<link rel="stylesheet" type="text/css" href="../view/css/loginAction.css">


</head>
<body >

<div class="header">

  <?php include('../view/Include/Hader.php') ?>
</div>

<div class="navbar">
  <a href="../index.php" class="active">Home</a>
  <a href="../view/About.php">About</a>
  <a href="../view/Photos.php">Photos</a>
  <a href="../view/Contact.php">Contact Us</a>
  <a href="../view/LoginSignup.php" class="right">Login/Sign up</a>
</div>
 
 <br><br>

	<h1>Admin Login Action</h1>

		<?php

				$email  =  $password = ""; 
				$flag = 1;
				

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
			

				if (empty($_POST["email"])) {
				echo "Email is required  <br><br>";
				$flag = 0;

				} else {
				$email =  $_POST["email"];
				}



				if (empty($_POST["password"])) {
				echo "Password is required  <br><br>";
				$flag = 0;

				} else {
				$password = $_POST["password"];
				}



				}

		if ($flag == 1) {

			echo "Admin Login Successfull";
		}
		else{
			echo "Admin Login Failed 😣😫😫☹ <br><br> Check Email and Password";
		}
	



	 ?>

<br><br>

	 <?php if ($flag == 0) {
	 		 echo "Try again!<br><br>";
	 } ?>


<br><br>
Already registered?  <a href="LoginSignup.php"><button class="btn3">Login</button></a> for Login.

    <br><br>

 <br><br>
 
  <?php include('../view/Include/Fooder.php') ?>

</body>
</html>
