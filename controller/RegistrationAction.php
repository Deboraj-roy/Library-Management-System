

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration Action</title>
<meta charset="UTF-8"> 

<link rel="stylesheet" type="text/css" href="../view/css/RegistrationAction.css">


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

	<h1>Registration Action</h1>

	<?php



	$res2 = true;

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "lmsproject";


  $connection = new mysqli($servername, $username, $password, $dbname);

  if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }




				$name = $birthday  = $religion  = $email  = $phone = $gender = $userType = $username  = $password = $confirm_password = ""; 
				$flag = 0;
				

				if ($_SERVER["REQUEST_METHOD"] == "POST") {


				if (empty($_POST["name"])) {
					$nameErr = "Name is required  <br><br>";
				echo $nameErr;
				
				$flag = 0;

				} else {
				$name =  $_POST["name"];
				// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
				$nameErr = "Only letters and white space allowed  <br><br>";
				}
				}


				if (empty($_POST["birthday"])) {
				echo "Birthday is required  <br><br>";
				$flag = 0;

				} else {
				$birthday =  $_POST["birthday"];
				}



				if (empty($_POST["religion"])) {
				echo "Religion is required  <br><br>";
				$flag = 0;

				} else {
				$religion = $_POST["religion"];
				}



				if (empty($_POST["email"])) {
				echo "Email is required  <br><br>";
				$flag = 0;

				} else {
				$email = $_POST["email"] ;
				// check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "Invalid email format  <br><br>";

				$flag = 0;

				}
				}




				if (empty($_POST["phone"])) {
				$phoneErr = "";
				$flag = 0;

				} else {
				$phone = $_POST["phone"];
				}




				if (empty($_POST["gender"])) {
				echo "Gender is required  <br><br>";
				$flag = 0;

				} else {
				$gender = $_POST["gender"];
				}


				if (empty($_POST["userType"])) {
				echo "User Type required  <br><br>";
				$flag = 0;

				} else {
				$userType = $_POST["userType"];
				}

				if (empty($_POST["username"])) {
				echo  "Username is required  <br><br>";
				$flag = 0;

				} else {
				$username = $_POST["username"];
				}


				if (empty($_POST["password"])) {
				echo "Password is required  <br><br>";
				$flag = 0;

				} else {
				$password = $_POST["password"];
				}


				if (empty($_POST["confirm_password"])) {
				echo "Confirm password is required  <br><br>";
				$flag = 0;

				} else {
				$confirm_password = $_POST["confirm_password"];
				}


				if ($password === $confirm_password) {
				
				$setpassword = $_POST["confirm_password"];


 				$sql = "INSERT INTO user (Name, Birthday, Religion, Email, Phone, Gender, UserType, Username, Password) VALUES ('$name', '$birthday', '$religion', '$email', '$phone', '$gender', '$userType', '$username', '$setpassword')" ;


      $res = $connection->query($sql);

      echo "<br><br><br>";
      if ($res == true) {
        // code...

        echo " Data Inserted Successfully !<br><br>";
        echo "You have been successfully registered.🥰";

      }
      else{

        echo " Error While saving 😣";
      }
	
				


				} else {
					$res2 = false;
					echo "Password doesn't match!  <br><br>";
				}
			echo "<br><br>";




	 if ($res2 == false) {
	 		 echo "Try again!<br><br>";


 				echo "<br><br>";

	 		

	 }


}
  $connection->close();

	 ?>

<br><br>






 <br><br>
 
  <?php include('../view/Include/Fooder.php') ?>

</body>
</html>
