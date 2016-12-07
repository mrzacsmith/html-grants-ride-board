<?php require 'connections/connections.php'; ?>
<?php 
   // print_r($_POST);
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
      // wont need long and lat in this section as these efforts are duplicated on the profile page and since they cannot get long and lat from this screen point is moot will only need on prof pagel
       //$allowed_domains = array("nmsu.edu");
       //$email_domain = array_pop(explode("@", $email));
       //if(!in_array($email_domain, $allowed_domains)) {
      // Not an authorised email 
      //}
       $PW = $local->real_escape_string($_POST['Password']);
       
       $StorePassword = password_hash($PW, PASSWORD_BCRYPT, array('cost' => 10));
       
       $query = "INSERT INTO users (Fname, Lname, Email, Street1, Street2, City, ZipCode, Phone, Notes, Password) VALUES ('$FName', '$LName','$Email', '$Street1', '$Street2', '$City', '$ZipCode', '$Phone', '$Notes', '$PW')";
       $results = $local->query($query) or die($local->error);
       header('Location: login.php');
       echo 'UserID = '.$row['UserID'];
       print_r($_SESSION);
    }

?>
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
                    <!--<ul id="logout">-->
                    <!--    <li><a href="logout">Log out</a></a></li>    -->
                    <!--</ul>-->
                </nav>
            </div>
        </div>
        <div class="left-body">
            <img src="img/car.jpg" width="800px" alt="">
        </div>
        <div class="left-body">
            <br>
  
            
            <form method="post" name="RegisterForm" id="RegisterForm" action="login" onsubmit="javascript:return validate('RegisterForm','Email');">
                <div class="formElement">
                    <input type="text" name="First_Name" required="required" class="TField" id="First_Name" placeholder="First Name"/>
                </div>
                <div class="formElement">
                    <input type="text" name="Last_Name" required="required" class="TField" id="Last_Name" placeholder="Last Name"/>
                </div>
                <div class="formElement">
                    <input type="text" name="Email" required="required" class="TField" id="Email" placeholder="Email"/>
                </div>
                  <div class="formElement">
                    <input type="text" name="Street1" required="required" class="TField" id="Street1" placeholder="Street1"/>
                </div>
                 <div class="formElement">
                    <input type="text" name="Street2"  class="TField" id="Street2" placeholder="Street2"/>
                </div>
                 <div class="formElement">
                    <input type="text" name="City" required="required" class="TField" id="City" placeholder="City"/>
                </div>
                 <div class="formElement">
                    <input type="text" name="ZipCode" required="required" class="TField" id="ZipCode" placeholder="ZipCode"/>
                </div>
                 <div class="formElement">
                    <input type="text" name="Phone" required="required" class="TField" id="Phone" placeholder="Phone"/>
                </div>
                 <div class="formElement">
                    <input type="text" name="Notes"  class="TField" id="Notes" placeholder="Special Instructions about your address!"/>
                </div>
                <!-- <div class="formElement">-->
                <!--    <input type="text" name="Long"  class="TField" id="Long" placeholder="Longitude"/>-->
                <!--</div>-->
                
                <!-- <div class="formElement">-->
                <!--    <input type="text" name="Lat"  class="TField" id="Lat" placeholder="Latitdue"/>-->
                <!--</div>-->
                
                <div class="formElement">
                    <input type="password" name="Password" required="required" class="TField" id="Password" placeholder="Password"/>
                </div>
                <div class="formElement">
                    <input name="Register" type="submit" class="button" id="Register" value="Register" />
                </div>
            </form>
        </div>
        
  

<!--//      class validate_email {-->
<!--//              private $accepted_domains;-->
<!--//             public function __construct() {-->
<!--//                   //Set the accepted domains property-->
<!--//                   $this->accepted_domains = array(-->
<!--//                      'nmsu.edu');-->
<!--//             }-->
<!--//              //Validate email address by domain-->
<!--//               //Checks if the email address belongs to an accepted domain-->
            
<!--//               public function validate_by_domain($Email) {-->
<!--//                   //Get the domain from the email address-->
<!--//                   $domain = $this->get_domain( trim( $Email ) );-->
<!--//                   //Check if domain is accepted. -->
<!--//                   if ( in_array( $domain, $this->accepted_domains ) ) {-->
<!--//                       return true;-->
<!--// }-->
<!--//               return false;-->
<!--//           }-->
            
<!--//              //Get the domain from email address-->
<!--//               private function get_domain($Email) {-->
<!--//                  //Check if a valid email address was submitted-->
<!--//                   if (! $this->is_email( $Email ) ) {-->
<!--//                       return false;-->
<!--//                  }-->
<!--//                   $email_parts = explode( '@', $Email );-->
<!--//                   $domain = array_pop( $email_parts );-->
<!--//                  return $domain;-->
<!--//                   }-->
                
<!--//                   //Checks if the submitted value is a valid email address-->
<!--//                   private function is_email($Email) {-->
<!--//                       if ( filter_var ( $Email, FILTER_VALIDATE_EMAIL ) ) {-->
<!--//                          return true;-->
<!--//                       }-->
<!--//                       return false;-->
<!--//                   }-->
<!--//               }-->
    
        
        

    </div>
    <script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>