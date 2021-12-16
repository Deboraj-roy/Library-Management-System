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
<title>Change password Action</title>
<meta charset="UTF-8"> 

<link rel="stylesheet" type="text/css" href="../view/css/ChangPassword.css">

<!-- 
  <script src="js/ChangPassword.js"></script> -->
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

<h1>Change password Action</h1>



<?php  


        if ($_SERVER["REQUEST_METHOD"] == "POST") {


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

        if ($password ===$confirm_password) {

           $setpassword = $_POST["confirm_password"];
          // code...
        
         $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "lmsproject";
          $connection = new mysqli($servername, $username, $password, $dbname);
          if ($connection->connect_error) {
          die("Connection failed: " . $connection->connect_error);
          }
      
    
          $sql2 = "UPDATE user SET Password = ? WHERE Email = ?";
          $stmt2 = $connection->prepare($sql2);
          $stmt2->bind_param("ss", $setpassword, $email);
           $setpassword = $_POST["confirm_password"];
           $email = $_POST["email"] ;

           $response2 = $stmt2->execute();
          
          if ($response2)
            { 
              echo "<h3>Password Changed successful</h3>";
            }

            else
            {
              echo "<h3>Execution error</h3>";
              echo "<h3>Please try  again</h3>";
            }


        }



      }

      
 $connection->close();

?>






<br><br>


      <br><br><br>


      


  <?php include('include/Fooder.php'); ?>



</body>
</html>
