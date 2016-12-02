<?php require 'connections/connections.php' ?>
<?php 
    session_start();
    if(isset($_SESSION["UserID"])) {
        
    } else {
        header('Location: login.php');
    }
          
            
    //   session_start();
       
       $Fname = $_POST['First_Name'];
       $Lname = $_POST['Last_Name'];
       $Street1 = $_POST['Street1'];  
       $Street2 = $_POST['Street2']; 
       $City = $_POST['City'];
       $ZipCode = $_POST['ZipCode']; 
       $Phone = $_POST['Phone']; 
       $Notes = $_POST['Notes'];
 
     
     //this update command is not working it updates all accounts so i tanked all current logins..,   
       $query = "UPDATE users set Fname='$Fname', Lname='$Lname',  Street1='$Street1', Street2='$Street2', City='$City', ZipCode='$ZipCode', Phone='$Phone', Notes='$Notes'";
       $results = $local->query($query) or die($local->error);
      
?>
<!doctype html>
      
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/info.css" type="text/css" />
    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>

    <div class="container">
        <div class="header">
            
        </div>
        <div class="menu">
            <div id="menu">
                <nav>
                    <ul id="cssmenu">
                        <li><a href="drivers">Drivers</a></li>
                        <li><a href="riders">Riders</a></a></li>
                        <li><a href="profile">Profile</a></li>
                    </ul>
                    <ul>
                        <li><a href="logout">Log out</a></a></li>    
                    </ul>
                </nav>
            </div>
        </div>
        <div class="main">
            <h2>User Profile</h2>
  

  
            <form action="" method="post" name="ProfileForm" id="Profile">
                <div class="formElement">
                    <input type="text" name="First_Name" required="required" class="TField" id="First_Name" placeholder="First Name"/>
                </div>
                <div class="formElement">
                    <input type="text" name="Last_Name" required="required" class="TField" id="Last_Name" placeholder="Last Name"/>
                </div>
    
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
                    <input type="text" name="Notes" required="required" class="TField" id="Notes" placeholder="Notes"/>
                </div>
                <div class="formElement">
                    <input type="text" name="Bio" required="required" class="TField" id="Bio" placeholder="Bio"/>
                </div>
                
                <div class="formElement">
                    <input name="Save" type="submit" class="button" id="Save" value="Save" />
                </div>
            </form>

 
        </div>
        <div class="footer">
       
        </div>
    </div>
    


</body>
</html>