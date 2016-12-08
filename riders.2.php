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
        <div id="map"></div>
          <script>
            function initMap() {
              var uluru = {lat: 35.166559, lng: -107.843142};
              var address1 = {lat: 35.145043, lng: -107.827740};
              var address2 = {lat: 35.155682, lng: -107.856132};
              var address3 = {lat: 36.804752, lng: -108.693662};
              var address4 = {lat: 32.357212, lng: -106.769846};
              var address5 = {lat: 35.168734, lng: -106.574941};
              
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: uluru
              });
              var marker = new google.maps.Marker({
                postion: uluru;
                position: address5,
                map: map
              });
             
            }
          </script>
          <script async defer
      	    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAttvBtlHvLpEm6mDgiooDBxYyVrlpCVdY&callback=initMap">
          </script>
    </div>
    

</body>
</html>