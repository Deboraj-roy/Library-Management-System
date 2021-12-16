<?php
// Start the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Action</title>
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

	<h1>Login Action</h1>

		<?php




  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "lmsproject";


  $connection = new mysqli($servername, $username, $password, $dbname);

  if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }


				$email  =  $password = ""; 
				$flag = 1;
				

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
			


			  $sql = "SELECT * FROM user WHERE Email = ? and Password = ?";

			  $stmt = $connection->prepare($sql);
			  
			  $stmt->bind_param("ss", $email, $password);


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


    
    // $username = $_POST["username"];
    
    // $password = $_POST["password"];

    $response = $stmt->execute();

    if ($response) {

    $data = $stmt->get_result();

    if ($data->num_rows > 0) {

    while ($row = $data->fetch_assoc()) {


    echo "<h2> Welcome </h2>";

    $_SESSION["Email"] = $_POST["email"];;
		$_SESSION["Password"] =$_POST["password"];

		$_SESSION["SESSION_have"] = "YES";
       
    echo "<br> Name: " . $row["Name"];
    $_SESSION["UserType"] = $row["UserType"];
    $_SESSION["Name"] =  $row["Name"];
    echo "<br><br> Login Successful 😊😊😊💗";
    
      header("Location: ../view/UserProfile.php");




        }
      }
       

       else {
        echo "Login Failed 😣😫😫☹ <br><br> Check Email and Password";
        }
         
   }



   
  $connection->close();
}

	



	 ?>

<br><br>

	 <?php if ($flag == 0) {
	 		 echo "Try again!<br><br>";
	 } ?>


<br><br>
Already registered?  <a href="../view/LoginSignup.php"><button class="btn3">Login</button></a> for Login.

    <br><br>

 <br><br>
 
  <?php include('../view/Include/Fooder.php') ?>

</body>
</html>
