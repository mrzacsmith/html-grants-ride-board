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
    <title>Account</title>
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
        <div class="welcome">
           <div id="loggedIn">
                Welcome: 
            <!--<?php echo $_SESSION["UserID"]; ?>-->
            <?php echo $_SESSION["Fname"]; ?>
            <?php echo $_SESSION["Lname"]; ?> <br>
            <?php echo "Today is " . date(l) . " " .date("m-d-Y"); ?> : 
            <?php 
                date_default_timezone_set("America/Denver");
                echo date("h:i:sa"); 
            ?>
           </div>
 
        </div>
        <div class="footer">
       
        </div>
    </div>
    

</body>
</html>