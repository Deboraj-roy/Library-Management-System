 <?php

// Start the session
session_start();

// $cookie_value = "powderblue";
// setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day
if (!isset($_COOKIE['visited'])) {

  setcookie("visited", "1", time() + (86400), "/" ) or die("Could not set Cookie !");
  // code...
  $Ccho = "This is your First Login in you profile";
}
else{
  $Ccho = "You Are our old Login user ";
}

      $SESSION_have = $_SESSION["SESSION_have"];
      
      if ($SESSION_have != "YES") {

    setcookie("visited", "", time() - 86400*2);

      header("Location: ../index.php");


   }


?>





<!DOCTYPE html>
<html lang="en">
<head>
<title>User Profile</title>
<meta charset="UTF-8"> 

<link rel="stylesheet" type="text/css" href="../view/css/a.css">


</head>
<body>

<div class="header">

  <?php include('include/Hader.php') ?>
</div>

<div class="navbar">
  <a href="../index.php" class="active">Home</a>
  <a href="../view/About.php">About</a>
  <a href="../view/Photos.php">Photos</a>
  <a href="../view/Contact.php">Contact Us</a>
  <a href="../view/MyAccount.php">My Account</a>
  <a href="../view/RequestBook.php">Request Book</a>
  <a href="../view/ReportBook.php">Report Book</a>
  <a href="../controller/Logout.php" class="right">Log out</a>
  <a href="#" class="right"> <?php echo $_SESSION["UserType"] ;?> </a>

</div>


      <br><br>




    <br><br>
    
      <p> Hello, and welcome to your library's portal.</p> <br><br><br>
<?php echo $Ccho ;?>
      
      <br><br><br>








    <br>
      


  <?php include('include/Fooder.php') ?>

</body>
</html>
