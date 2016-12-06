<?php 
    require 'connections/connections.php';
    //print_r($_SESSION);

    //session_start();
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
                        <li><a href="account">Home</a></li>
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
  
  
      Profile Info: 
      <table>
  <tr>
   
 
            <!--<?php echo $_SESSION["UserID"]; ?>-->
           <th>  <?php echo $_SESSION["Fname"]; ?> 
            <?php echo $_SESSION["Lname"];?></th> <br>
             <th> <?php echo $_SESSION["Email"]; ?></th>
           <th> <?php echo $_SESSION["Street1"]; ?>
              <?php echo $_SESSION["Street2"]; ?>
            <?php echo $_SESSION["City"]; ?></th> 
    </tr>
        </div>
      
    </div>
    

</body>
</html>