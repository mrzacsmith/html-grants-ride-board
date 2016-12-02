<?php require 'connections/connections.php' ?>
// <?php 
//     session_start();
//     if(isset($_SESSION["UserID"])) {
        
//     } else {
//         header('Location: login.php');
//     }
// ?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/info.css" type="text/css" />
    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>

    <div class="container">
        <div class="header">
            
        </div>
        <div class="menu">
            <div id="menu">
                <nav>
                    <ul id="cssmenu">
                        <li><a href="register">Register</a></li>
                        <li><a href="login">Log In</a></li>
                        <li><a href="faq">FAQ</a></li>
                    </ul>
                    <ul>
                        <li><a href="logout">Log out</a></a></li>    
                    </ul>
                </nav>
            </div>
        </div>
        <div class="main">
            <h1>Aggie Ride Board FAQ</h1>

            <div class="faq">
                <p>Who can use this Ride Board</p>
                <blockquote>
                    Students currently enrolled at NMSU can use the Ride Board.
                </blockquote>
            </div>
            <div class="faq">
                <p>Do I have to use my NMSU email?</p>
                <blockquote>
                    Yes, all Drivers and Riders are required to use their NMSU email account. 
                </blockquote>
            </div>
            <div class="faq">
                <p>The "Get My Location" button is not working!</p>
                <blockquote>
                    You need to make sure your geolocation is turned on, click this button to test your geolocation status. <br>
                <p>
                    <input type="button" onclick="show_islocationenabled();" value="Is Geolocation supported?" />
                </p>
                </blockquote>
            </div>
       
        </div>

    </div>
    
            <div class="footer">
       
        </div>
                <?php
                include("footer.php");
?>
    <script>
        function show_islocationenabled() {
          var str = "No, geolocation is not supported.";
    
          if (window.navigator.geolocation) {
            str = "Yes, geolocation is supported.";
          }
    
          document.getElementsByTagName('div')[0].textContent = str;
        }
        
    </script>

</body>
</html>