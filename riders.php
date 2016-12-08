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
    <link href="https://fonts.googleapis.com/css?family=Raleway|Belleza|Cinzel" rel="stylesheet" >
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
                        <li><a href="contact">Contact Us</a></li>
                        <li><a href="logout">Log out</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="map"></div>
          <script>
            function initMap() {
              var uluru = {lat: 33.664354, lng: -105.897217};
              var address1 = {lat: 35.145043, lng: -107.827740};
              var address2 = {lat: 35.155682, lng: -107.856132};
              var address3 = {lat: 36.804752, lng: -108.693662};
              var address4 = {lat: 32.357212, lng: -106.769846};
              var address5 = {lat: 35.168734, lng: -106.574941};
              var address6 = {lat: 32.420980, lng: -104.256174};
              var address7 = {lat: 35.141747, lng: -107.875665};
              var address8 = {lat: 35.166559, lng: -107.843142};
              
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 6,
                center: uluru
              });
              var marker = new google.maps.Marker({
                position: address8,
                map: map,
                title:"NMSU Grants"
              });
             var marker = new google.maps.Marker({
                position: address5,
                map: map,
                title:"6613 Pino Ave"
              });
              var marker = new google.maps.Marker({
                position: address1,
                map: map,
                title:"611 Oso Ridge Rd"
              });
              var marker = new google.maps.Marker({
                position: address2,
                map: map,
                title:"308 Vernon Ave"
              });
              var marker = new google.maps.Marker({
                position: address3,
                map: map,
                title:"1416 Pinon St"
              });
              var marker = new google.maps.Marker({
                position: address4,
                map: map,
                title:"1922 Mercury Ln"
              });
              var marker = new google.maps.Marker({
                position: address6,
                map: map,
                title:"112 MacArthur St"
              });
              var marker = new google.maps.Marker({
                position: address7,
                map: map,
                title:"2850 Ice Caves Rd"
              });
            }
          </script>
          <script async defer
      	    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAttvBtlHvLpEm6mDgiooDBxYyVrlpCVdY&callback=initMap">
          </script>
          <div class="rider-container">
            <button onclick="showHideRiders('rider-list');">Show Riders</button>
            <div id="rider-list">
              <ul>
                <li>Zac Smith</li>
                <li>Bryant Garcia</li>
                <li>Shawna Howard</li>
                <li>Eric Diaz</li>
                <li>Michael Romero</li>
                <li>Louis Bear Eagle</li>
              </ul>
            </div>
          </div>
          <div id="disclaimer">
              &copy;Copyright 2016 ~ Developers of ICT435 Senior Project
          </div>
          
          <script>
           function showHideRiders(id) {
             var riders = document.getElementById(id);
             
             if (riders.style.display = 'none') {
               riders.style.display = 'block';
             } else {
               riders.style.display = 'none';
             }
           }
          </script>
          
          <!--<script type="text/javascript" src="js/scripts.js"></script>-->
          <!--<script src="https://code.jquery.com/jquery-3.1.1.min.js"-->
          <!--        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="-->
          <!--        crossorigin="anonymous"></script>-->
</body>
</html>