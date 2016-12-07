<?php require 'connections/connections.php' ?>
 <?php 
//     session_start();
//     if(isset($_SESSION["UserID"])) {
        
//     } else {
//         header('Location: login.php');
//     }
// ?>
<!doctype html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Raleway|Belleza" rel="stylesheet" >
    <link rel="stylesheet" href="css/info.css" type="text/css" />
    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    <meta charset="UTF-8">
    <title>FAQ</title>
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
                </nav>
            </div>
        </div>
        <div class="main">
            <h1>Aggie Ride Board FAQ</h1>
             <div class="faq">
                <p>What is the purpose of the Aggie Ride Board?</p>
                <blockquote>
                    The Ride Board is a carpool service for students. Carpooling provides students to reduce transportation costs
                    by car-sharing.
                </blockquote>
            </div>
            <div class="faq">
                <p>What do I need to do to use Ride Board?</p>
                <blockquote>
                    NMSU students who wish to use the Ride Board must Register first with a valid and active NMSU account. 
                </blockquote>
            </div>
            
            <div class="faq">
                <p>Who can use this Ride Board</p>
                <blockquote>
                    Students currently enrolled at NMSU can use the Ride Board.
                </blockquote>
            </div>
                        <div class="faq">
                <p>Is there a fee to use the Ride Board?</p>
                <blockquote>
                    There is no fee to use Ride Board, however you can split transportation costs with Riders and Drivers.
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
            <div class="faq">
                <p>Will my infomation remain private?</p>
                <blockquote>
                    Yes, the Ride Board is available to current NMSU students only.<br>
                    Any person outside the NMSU community will not have access.
                </blockquote>
            </div>
            <div class="faq">
                <p>After I register, am I obligated to be a Driver or Rider?</p>
                <blockquote>
                    No, you are not obligated to use the Ride Board once you register.<br>
                    It is an available service to NMSU students who need transporation services.
                </blockquote>
            </div>
            <div class="faq">
                <p>Will NMSU pay for any vehicle damage caused by a Rider?</p>
                <blockquote>
                    NMSU is not liable for any damages that occur by the Rider or Driver?
                </blockquote>
            </div>
            <div class="faq">
                <p>Will NMSU pay for any lost or stolen items from Riders or Drivers?</p>
                <blockquote>
                    NMSU is not liable for any lost or stolen items from Riders or Drivers.
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