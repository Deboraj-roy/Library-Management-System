
<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration</title>
<meta charset="UTF-8"> 

<link rel="stylesheet" type="text/css" href="css/About.css">

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
<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="../model/deb.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>DEBORAJ ROY</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>deboraj@mail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../model/uddipto.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Uddipta Kumar Roy</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>uddipta@mail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="../model/Sujaur.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Sujaur Rahman Pavel</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>sujaur@mail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>



 <br><br>
 
  <?php include('include/Fooder.php') ?>

</body>
</html>
