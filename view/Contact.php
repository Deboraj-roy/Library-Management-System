
<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration</title>
<meta charset="UTF-8"> 

<link rel="stylesheet" type="text/css" href="css/Contact.css">

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

<h2>Responsive Contact Section</h2>
<p>Resize the browser window to see the effect.</p>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="../model/2020-07-20.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="#">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>


 <br><br>
 
  <?php include('include/Fooder.php') ?>

</body>
</html>
