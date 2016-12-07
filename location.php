<?php require 'connections/connections.php' ?>
<?php 
    session_start();
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
    <title>Get My Location</title>
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
        <div class="footer">
       
        </div>
    </div>
    <script>
    
        var c = function(pos) {
        var lat = pos.coords.latitude,
          long = pos.coords.longitude,
          coords = lat + ', ' + long;

        document.getElementById('google_map').setAttribute('src', 'https://maps.google.com/?q=' + coords + '&z=15&output=embed');
        }
    
        document.getElementById('get_location').onclick = function() {
            navigator.geolocation.getCurrentPosition(c);
            return false;
        }
        
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
