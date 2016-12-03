<?php require 'connections/connections.php'; ?>

 <?php session_start();
    if(isset($_SESSION["UserID"])) {
        
    } else {
        header('Location: login.php');
    }
    ?>

  


<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/info.css" type="text/css" />
    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>

    <div class="container">
        <div class="header">
            
        </div>
        <div class="menu">
            <div id="menu">
             <nav>
                    <ul id="cssmenu">
                        <li><a href="location">Get Location</a></li>
                        <li><a href="riders">Riders</a></a></li>
                        <li><a href="profile">Profile</a></li>
                    </ul>
                    <ul>
                        <li><a href="logout">Log out</a></a></li>    
                    </ul>
                </nav>
            </div>
        </div>
        <div class="left-body">
            <img src="img/car.jpg" width="800px" alt="">
        </div>
        <div class="right-body">
            <br><br><br><br>
  
      <?php  
      
      $UserID = $_SESSION["UserID"];
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysql_query($sql);
      if($row = mysql_fetch_array($result)) {
    $Fname = $row["Fname"];
    $Lname = $row["Lname"];
    $Email = $row["Email"];

      echo "
    <table>
        <tr><td>First Name</td><td> : </td><td>$Fname</td></tr>
        <tr><td>Last Name</td><td> : </td><td>$Lname</td></tr>
        <tr><td>Email</td><td> : </td><td>$Email</td></tr>
    </table>
    ";
      }
   ?>
            
        </div>
        <div class="footer">
       
        </div>
    </div>
    

</body>
</html>