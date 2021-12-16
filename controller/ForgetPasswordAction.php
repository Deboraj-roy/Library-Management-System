<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    Forget Password Action
  </title>

<link rel="stylesheet" type="text/css" href="../view/css/ForgetPassword.css">

<script src="js/ForgetPassword.js"></script>

</head>
<body>
  <div class="header">

  <?php include('../view/include/Hader.php') ?>
</div>

<div class="navbar">
  <a href="../index.php" class="active">Home</a>
  <a href="../view/Photos.php">Photos</a>
  <a href="../view/About.php">About</a>
  <a href="../view/Contact.php">Contact Us</a>
  <a href="../view/AdminLogin.php">Admin</a>
  <a href="../view/LoginSignup.php" class="right">Login/Sign up</a>


</div>

      <br><br>

<h2>Forget Password Action</h2>


<br><br>


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


  <?php include('../view/Include/Fooder.php') ?>

</body>
</html>