<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration</title>
<meta charset="UTF-8"> 

<link rel="stylesheet" type="text/css" href="css/Registration.css">


  <script src="js/Registration.js"></script>
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




<?php 
$name = $birthday  = $religion  = $email  = $phone = $gender = $userType = $username  = $password = $confirm_password = ""; ?>

 <fieldset>
    <legend><h2>Registration</h2></legend>


    <form name="Registration" action="../controller/RegistrationAction.php" method="POST" onsubmit="return isValid(this);">  


      Name: <input type="text" name="name" value="<?php echo $name;?>">
      
      <br><br>

          <br>


        <label for="birthday" >Birthday:</label>
          <input type="date" id="birthday" name="birthday" >
         
         <br>
         <br>

        <label for="religion">Religion:</label>
          <select id="religion" name="religion" >

            <option value="">Select a value</option>
            <option value="Christians">Christians</option>
            <option value="Muslims">Muslims</option>
            <option value="Hindus">Hindus</option>
            <option value="Buddhists">Buddhists</option>

          </select>
          
          <br><br>


      E-mail: <input type="text" name="email" value="<?php echo $email;?>">
      
      <br><br>

          <label for="phone">Enter a phone number:</label>
          <input type="tel" id="phone" name="phone" placeholder="01234567899" pattern="[0-9]{11}">
          <br>
          <br>
      
      Gender:
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
      
      <br><br>






      <label for="userType">User Type:</label>
          <select id="userType" name="userType" >

            <option value="">Select a value</option>
            <option value="Student">Student</option>
            <option value="Teacher">Teacher</option>
            <option value="Manager">Manager</option>

          </select>
         
          <br><br>


         <label for="username">Username:</label><br>
         <input type="text" id="username" name="username" placeholder="Username">         
         
         <br><br>

        <label for="password">Password :</label>
        <input type="password" id="password" name="password" placeholder="ex : !@#12345abMaZ">
         <br><br>

        <label for="confirm_password">Confirm Password :</label>
        <input type="password" id="confirm_password" name="confirm_password">
         
         <br><br>



      <input type="submit" name="submit" value="Submit" class="btn btn-info"> 
      <input type="reset" name="reset" value="Reset" class="btn btn-info">

     
    </form>
     </fieldset>


    <br><br>

  <p id="message"></p>

<br><br>
Already registered?  <a href="LoginSignup.php"><button class="btn3">Login</button></a> for Login.

    <br><br>

 <br><br>
 
  <?php include('include/Fooder.php') ?>

</body>
</html>
