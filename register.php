<?php require 'connections/connections.php'; ?>
<?php 
   // print_r($_POST);
    if(isset($_POST['Register'])) {
       
    //   session_start();
       
       $FName = $_POST['First_Name'];
       $LName = $_POST['Last_Name'];
       $Email = $_POST['Email'];
       $Street1 = $_POST['Street1'];  
       $Street2 = $_POST['Street2']; 
       $City = $_POST['City'];
       $ZipCode = $_POST['ZipCode']; 
       $Phone = $_POST['Phone']; 
       $Notes = $_POST['Notes'];
       
       
       $PW = $_POST['Password'];
       
       $StorePassword = password_hash($PW, PASSWORD_BCRYPT, array('cost' => 10));
       
       $query = "INSERT INTO users (Fname, Lname, Email, Street1, Street2, City, ZipCode, Phone, Notes, Password) VALUES ('$FName', '$LName','$Email', '$Street1', '$Street2', '$City', '$ZipCode', '$Phone', '$Notes', '$PW')";
       $results = $local->query($query) or die($local->error);
       //header('Location: login.php');
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
        <div class="right-body">
            <br><br><br><br>
  
            
            <form action="" method="post" name="RegisterForm" id="RegisterForm">
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
                <div class="formElement">
                    <input type="text" name="Password" required="required" class="TField" id="Password" placeholder="Password"/>
                </div>
                <div class="formElement">
                    <input name="Register" type="submit" class="button" id="Register" value="Register" />
                </div>
            </form>
        </div>
        <div class="footer">
       
        </div>
    </div>
    

</body>
</html>