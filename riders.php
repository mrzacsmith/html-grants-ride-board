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
    <title>Riders</title>
     <style>
       #map {
        height: 400px;
        width: 750px;
        padding: 25px 0;
        margin: 0 auto;
       }
    </style>
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
          <div class="main_location">
            <div class="map_location">
                <div id="map">
                    <iframe id="google_map" width="800" height="800" scrolling="0" marginheight="0" marginwidth="0" src="https://maps.google.com?output=embed" frameborder="0"></iframe>
                </div>
                 <script>
                    function initMap() {
                      var uluru = {lat: 35.166559, lng: -107.843142};
                      var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 10,
                        center: uluru
                      });
                      var marker = new google.maps.Marker({
                        position: uluru,
                        map: map
                      });
                    }
                  </script>
                  <script async defer
              	    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAttvBtlHvLpEm6mDgiooDBxYyVrlpCVdY&callback=initMap">
                  </script> 
                  <?php
                  $servername = "localhost";
                  $username ="zrsmith75";
                  $password ="";
                  
$query = mysql_query("SELECT * FROM users")or die(mysql_error());
while($row = mysql_fetch_array($query))
{
  $UserID = $row['UserID'];
  $Lat = $row['Lat'];
  $Lon = $row['Lon'];
  $desc = $row['desc'];



  echo("addMarker($Lat, $Lon, '<b>$UserID</b><br />$desc');\n");

}

?>
            </div>
        </div>
</body>
</html>