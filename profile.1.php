<?php require 'connections/connections.php'; ?>





<!doctype html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Raleway|Belleza|Cinzel" rel="stylesheet" >
    <link rel="stylesheet" href="css/info.css" type="text/css" />
    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    <meta charset="UTF-8">
    <title>Profile </title>
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
         
  
  
      <p style="font-size: 30px; color: yellow;">Profile Info:      </p>
      
  
    
    <div id="test">
        <form  align="center" method="GET" name="update" id="update"  />
            
            <div class="formElement">
                    <input type="text" name="Fname"  class="TField" id="Fname" value="<?php echo $_SESSION["Fname"]; ?>" placeholder="First Name"/>
                </div>
                <div class="formElement">
                    <input type="text" name="Lname"  class="TField" id="Lname" value="<?php echo $_SESSION["Lname"]; ?>" placeholder="Last Name"/>
                </div>
                <div class="formElement">
                    <input type="text" name="Email"  class="TField" id="Email" value="<?php echo $_SESSION["Email"]; ?>" placeholder="Email"/>
                </div>

                <div class="formElement">
                    <input type="text" name="Lat"  class="TField" id="Lat" value="<?php echo $_SESSION["Lat"]; ?>" placeholder="Latitude"/>
                </div>
                <div class="formElement">
                    <input type="text" name="Lon"  class="TField" id="Lon" value="<?php echo $_SESSION["Lon"]; ?>" placeholder="Longitude "/>
                </div>
                <div class="formElement">
                    <input type="text" name="Street1"  class="TField" id="Street1" value="<?php echo $_SESSION["Street1"]; ?>" placeholder="Street 2"/>
                </div>
                <div class="formElement">
                    <input type="text" name="Street2"  class="TField" id="Street2" value="<?php echo $_SESSION["Street2"]; ?>" placeholder="Street 2"/>
                </div>
                <div class="formElement">
                    <input type="text" name="City"  class="TField" id="City" value="<?php echo $_SESSION["City"]; ?>" placeholder="City"/>
                </div>
                <div class="formElement">
                    <input type="text" name="ZipCode"  class="TField" id="ZipCode" value="<?php echo $_SESSION["ZipCode"]; ?>" placeholder="Zip Code"/>
                </div>
                <div class="formElement">
                    <input type="text" name="Notes"  class="TField" id="Notes" value="<?php echo $_SESSION["Notes"]; ?>" placeholder="Notes"/>
                </div>

               <!-- <div class="formElement">
                    <input name="Update" type="submit" class="button" id="Update" value="Update" />
                    <input type="submit" name="get_location" class="button" id="get_location" value="Get Location" />
                </div>
                -->
            </form>
    </div>
   <div class="main_location">
            <!--<div class="map_location">-->
            <!--    <div class="formElement">-->
            <!--        <input type="submit" name="get_location" class="button" id="get_location" value="Get Location" />-->
            <!--    </div>-->
            <!--</div>-->
            <div class="map_location">
                <div id="map">
                    <iframe id="google_map" width="0" height="0" scrolling="0" marginheight="0" marginwidth="0" src="https://maps.google.com?output=embed" frameborder="0"></iframe>
                </div>
                     <p id="coordinates"></p>  
               </div>
            </div>
        </div>
        <script>
            var c = function(pos) {
            var lat = pos.coords.latitude,
              long = pos.coords.longitude,
              coords = lat + ', ' + long;

              document.getElementById('google_map').setAttribute('src', 'https://maps.google.com/?q=' + coords + '&z=15&output=embed');
              console.log(coords);
              document.getElementById('coordinates').innerHTML = "Please copy and paste your <br>coordinates in your profile form! <br>Your latitude is: <strong><em>" + lat + "</em></strong><br> your longitude is: <strong><em>" + long + "</em></strong>";
            //   window.alert(coords);
                
            }
        
            document.getElementById('get_location').onclick = function() {
                navigator.geolocation.getCurrentPosition(c);
                return false;
            }
            

            
        </script>
</body>
</html>