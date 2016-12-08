<?php require 'connections/connections.php'; ?>
<?php 
//   print_r($_POST);
    if(isset($_POST['Register'])) {
       
      session_start();
       
       $FName = $local->real_escape_string($_POST['First_Name']);
       $LName = $local->real_escape_string($_POST['Last_Name']);
       $Email = $local->real_escape_string($_POST['Email']);
       $Street1 = $local->real_escape_string($_POST['Street1']);  
       $Street2 = $local->real_escape_string($_POST['Street2']); 
       $City = $local->real_escape_string($_POST['City']);
       $ZipCode = $local->real_escape_string($_POST['ZipCode']); 
       $Phone = $local->real_escape_string($_POST['Phone']); 
       $Notes = $local->real_escape_string( $_POST['Notes']);
       $Lat = $local->real_escape_string( $_POST['Lat']);
       $Lon = $local->real_escape_string( $_POST['Lon']);
      // wont need long and lat in this section as these efforts are duplicated on the profile page and since they cannot get long and lat from this screen point is moot will only need on prof pagel
       //$allowed_domains = array("nmsu.edu");
       //$email_domain = array_pop(explode("@", $email));
       //if(!in_array($email_domain, $allowed_domains)) {
      // Not an authorised email 
      //}
       $PW = $local->real_escape_string($_POST['Password']);
       
       $StorePassword = password_hash($PW, PASSWORD_BCRYPT, array('cost' => 10));
       
       $query = "INSERT INTO users (Fname, Lname, Email, Street1, Street2, City, ZipCode, Phone, Notes, Lat, Lon, Password) VALUES ('$FName', '$LName','$Email', '$Street1', '$Street2', '$City', '$ZipCode', '$Phone', '$Notes', '$Lat', '$Lon', '$PW')";
       $results = $local->query($query) or die($local->error);
       header('Location: login.php');
       echo 'UserID = '.$row['UserID'];
       print_r($_SESSION);
    }

?>
<!doctype html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Raleway|Belleza|Cinzel" rel="stylesheet" >
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
                        <li><a href="contact">Contact Us</a></li>
                    </ul>
                    <!--<ul id="logout">-->
                    <!--    <li><a href="logout">Log out</a></a></li>    -->
                    <!--</ul>-->
                </nav>
            </div>
        </div>



        <div class="left-body">
            <br><br><br>
            
            <div id="instructions">                        <!-- geo button -->
              <strong>Welcome!</strong><br>
              Here are some instructions to get you started:<br>
              1. Click on the Get Location Button.<br>
              2. Copy and paste the coordinates into the registration form.<br>
              3. Complete all fields on the Registration Form.<br>
              <u>PLEASE NOTE:</u> A Current NMSU email account must be used.<br>
              4. Log into your account.<br><br>
              
               <input type="submit" name="get_location" class="button" id="get_location" value="Get Location" />
                   <div class="map_location">
                      <div id="map">
                        <iframe id="google_map" width="0" height="0" scrolling="0" marginheight="0" marginwidth="0" src="https://maps.google.com?output=embed" frameborder="0"></iframe>
                    
                         <p id="coordinates"></p>  
                      </div>
                  </div>
            </div>
            <!--<br>
            <br>
            <br>-->
               

            
        <!--    <p id="footer_info"><strong>NMSU Grants Ride Board</strong><br>
                1500 N Third St <br>
                Grants, NM 87020 <br>
                505-287-6656</p>-->
                
        </div>
        
        

        <div class="left-body">
      <br>
        <br>
            <form method="post" name="RegisterForm" id="RegisterForm" action="" onsubmit="javascript:return validateEmail('RegisterForm','Email');">
                <div class="formElement">
                    <input type="text" name="First_Name" required="required" class="TField" id="First_Name" placeholder="First Name"/>
                </div>
                <div class="formElement">
                    <input type="text" name="Last_Name" required="required" class="TField" id="Last_Name" placeholder="Last Name"/>
                </div>
                <div class="formElement">
                    <input type="email" name="Email" required="required" class="TField" id="Email" placeholder="Email"/>
                </div>
                  <div class="formElement">
                    <input type="text" name="Street1" required="required" class="TField" id="Street1" placeholder="Street 1"/>
                </div>
                 <div class="formElement">
                    <input type="text" name="Street2"  class="TField" id="Street2" placeholder="Street 2"/>
                </div>
                 <div class="formElement">
                    <input type="text" name="City" required="required" class="TField" id="City" placeholder="City"/>
                </div>
                 <div class="formElement">
                    <input type="text" name="ZipCode" required="required" class="TField" id="ZipCode" placeholder="Zip Code"/>
                </div>
                 <div class="formElement">
                    <input type="tel" name="Phone" required="required" class="TField" id="Phone" placeholder="Phone 505-123-4567" />
                </div>
                <div class="formElement">
                    <input type="text" name="Notes"  class="TField" id="Notes" placeholder="Special Instructions about your address!"/>
                </div>
                
                <div class="formElement">
                    <input type="text" name="Lat"  class="TField" id="Lat" placeholder="Latitude"/>
                </div>
                <div class="formElement">
                    <input type="text" name="Lon"  class="TField" id="Lon" placeholder="Longitude"/>
                </div>
                <div class="formElement">
                    <input type="password" name="Password" required="required" class="TField" id="Password" placeholder="Password"/>
                </div>
                <div class="formElement">
                    <input type="password" name="Password_Verify" required="required" class="TField" id="Password_Verify" placeholder="Password Verify"/> 
                </div>
                <div class="formElement">
                    <input name="Register" type="submit" class="button" id="Register" value="Register" onclick="return validatePassword();" />
                    <input name="Reset" type="reset" class="button" id="Reset" value="Reset"/>
                </div>
            
            </div>
            
            </form>
                <p id="footer_disclaimer"><strong><em>DISCLAIMER:</em></strong><br>New Mexico State University and its branch NMSU Grants make no claims on this web site. No liability is offered! NMSU LEGAL</p>
                <!--<p id="footer_disclaimer"><h5 align="center"><strong><em>Contact Us</em></strong></h5><center>NMSU Grants Ride Board1500 N Third St Grants, NM 87020 <br>505-287-6656</center></p>-->
            <div id="disclaimer">
            &copy;Copyright 2016 ~ Developers of ICT435 Senior Project
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
 
    <script type="text/javascript" src="js/scripts.js"></script>
    <script>
    

        function validatePassword() {
            // alert("Working"); Test to make sure form is working 
            if((RegisterForm.Password.value).length < 8) {
                alert("Password should be a minimum of 8 characters.");
                RegisterForm.password.focus();
                return false;
            }
            if(RegisterForm.Password_Verify.value != RegisterForm.Password.value) {
                alert("Passwords do not match!");
                return false;
            }
            
            
        return true;
        }
        
    </script>
 
        



</body>
</html>