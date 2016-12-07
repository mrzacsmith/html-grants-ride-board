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
    <meta charset="UTF-8">
    <title>Account</title>
    <link rel="stylesheet" href="css/info.css" type="text/css" />
    <link rel="stylesheet" href="css/menu.css" type="text/css" />
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
        <div class="main_location">
            <div class="map_location">
                <input type="submit" name="get_location" class="button" id="get_location" value="Get Location" />
            </div>
            <div class="map_location">
                <div id="map">
                    <iframe id="google_map" width="800" height="500" scrolling="0" marginheight="0" marginwidth="0" src="https://maps.google.com?output=embed" frameborder="0"></iframe>
                </div>
                       
               </div>
            </div>
        </div>
        <script>
            var c = function(pos) {
            var lat = pos.coords.latitude,
              long = pos.coords.longitude,
              coords = lat + ', ' + long;

              document.getElementById('google_map').setAttribute('src', 'https://maps.google.com/?q=' + coords + '&z=15&output=embed');
            //   window.alert(coords);
                
            }
        
            document.getElementById('get_location').onclick = function() {
                navigator.geolocation.getCurrentPosition(c);
                return false;
            }
            

            
        </script>
</body>
</html>