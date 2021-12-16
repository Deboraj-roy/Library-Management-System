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
  <a href="../view/About.php">About</a>
  <a href="../view/Photos.php">Photos</a>
  <a href="../view/Contact.php">Contact Us</a>
  <a href="../view/userProfile.php">Portal</a>
  <a href="../view/RequestBook.php">Request Book</a>
  <a href="../view/ReportBook.php">Report Book</a>
  <a href="../controler/Logout.php" class="right">Log out</a>
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




    //     echo "<table border>" ;
    //     echo "<td>" ;
    //     echo "Name" ;
    //     echo "</td>";;
    //     echo  "<td>" ;
    //     echo "Birthday" ;
    //     echo  "</td>";
    //     echo  "<td>" ;
    //     echo "Religion";
    //     echo  "</td>";
    //     echo  "<td>" ;
    //     echo "Email";
    //     echo  "</td>";
    //     echo  "<td>" ;
    //     echo "Phone"; 
    //     echo  "</td>";
    //     echo  "<td>" ;
    //     echo "Gender";
    //     echo "</td>";
    //     echo "<td>" ;
    //     echo "UserType";
    //     echo  "</td>";
    //     echo  "<td>" ;
    //     echo "Username";
    //     echo  "</td>";
    //     echo  "</tr>";
    //     echo "</table";

    // echo "<tr>" . "<td>" .$row["Name"] . "</td>". "<td>" .$row["Birthday"] . "</td>". "<td>" .$row["Religion"] . "</td>". "<td>" .$row["Email"] . "</td>". "<td>" .$row["Phone"] . "</td>". "<td>" .$row["Gender"] . "</td>". "<td>" .$row["UserType"] . "</td>". "<td>" .$row["Username"] . "</td>". "</tr>";

$row4=$row["Name"];
$row5=$row["Birthday"];
$row6=$row["Religion"];
$row7=$row["Email"];
$row8=$row["Phone"];
$row9=$row["Gender"];
$row10=$row["UserType"];
$row11=$row["Username"];

    


    echo "<h2> Your Details </h2>";
       
    // echo "<br> Name: " . $row["Name"];

        }
      }
       

     $connection->close();      
   }



  
  ?>


  



      <br><br><br>


<!-- 

  <h1>JS Ajax</h1>

  <p id="i1"></p>

  <button type="button" onclick="getData();">Click Me!</button>

  <script>
    function getData() {
      const xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {

        if (this.readyState === 4 && this.status === 200) {
          // document.getElementById("i1").innerHTML = this.responseText;

          const json = JSON.parse(this.responseText);
          Let x = "";
          for (let i = 0; i <1;  i++) {
            x += "<tr>" +
             "<td>" +json[i].Name + "</td>"+
             "<td>" +json[i].Birthday + "</td>"+
             "<td>" +json[i].Religion + "</td>"+
             "<td>" +json[i].Email + "</td>"+
             "<td>" +json[i].Phone + "</td>"+
             "<td>" +json[i].Gender + "</td>"+
             "<td>" +json[i].UserType + "</td>"+
             "<td>" +json[i].Username + "</td>"+
             "</tr>"
          }


            document.getElementById("i1").innerHTML = "<table border=1>" +
            "<tr>" +
             "<td>" +"Name" + "</td>"+
             "<td>" +"Birthday" + "</td>"+
             "<td>" +"Religion"+ "</td>"+
             "<td>" +"Email"+ "</td>"+
             "<td>" +"Phone" + "</td>"+
             "<td>" +"Gender"+ "</td>"+
             "<td>" +"UserType"+ "</td>"+
             "<td>" +"Username"+ "</td>"+
             "</tr>" +
             x +
             "</table";



        }
      }
      xhttp.open("GET", "js-ajaxUser.php");
      xhttp.send();
    }
  </script>


 -->

<table border="1">
  <tr>
    <th>  Name  </th>
    <th>  Birthday  </th>
    <th>  Religion  </th>
    <th>  Email  </th>
    <th>  Phone  </th>
    <th>  Gender  </th>
    <th>  User Type  </th>
    <th>  Username  </th>
  </tr>
  <tr>
    <td> <?php echo $row4; ?></td>
  <td> <?php echo $row5; ?></td>
  <td> <?php echo $row6; ?></td>
  <td> <?php echo $row7; ?></td>
  <td> <?php echo $row8; ?></td>
  <td> <?php echo $row9; ?></td>
  <td> <?php echo $row10; ?></td>
  <td> <?php echo $row11; ?></td>
  </tr>
</table>

<div class="navbar">
  <a href="../view/updateProfile.php" class="active">Update Profile</a>
  <a href="../view/ChangPassword.php" class="right">Chang Password</a>

</div>
    <br>
    <br>
    <br>
      


  <?php include('include/Fooder.php'); ?>



</body>
</html>
