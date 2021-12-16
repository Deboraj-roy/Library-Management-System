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

<link rel="stylesheet" type="text/css" href="../view/css/MyAccount.css">


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



  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "lmsproject";


  $connection = new mysqli($servername, $username, $password, $dbname);

  if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }
      


        $sql = "SELECT * FROM user WHERE Email = ? and Password = ?";

        $stmt = $connection->prepare($sql);
        
        $stmt->bind_param("ss", $email, $password);

        $email = $_SESSION["Email"];
        $password = $_SESSION["Password"] ;
       


    $response = $stmt->execute();

    if ($response) {

    $data = $stmt->get_result();

    if ($data->num_rows > 0) {

    while ($row = $data->fetch_assoc()) {





    


    echo "<h2> Update Your Profile </h2>";
       
   echo "<br> Name: " . $row["Name"];

        }
      }
       

     $connection->close();      
   }



  
  ?>


  



      <br><br><br>


      


  <?php include('include/Fooder.php'); ?>



</body>
</html>
