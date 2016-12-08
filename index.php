<?php require 'connections/connections.php'; ?>

<?php 
    // print_r($_POST);
    
    if(isset($_POST['Login'])) {
        $Email = $_POST['Email'];
        $PW = $_POST['Password'];
        
        // $StorePassword = password_hash($PW, PASSWORD_BCRYPT, array('cost' => 10));
        $result = $local->query("SELECT * FROM users WHERE Email='$Email' AND Password='$PW'"); 
        # look to see that we got a UserID
        $row_cnt = $result->num_rows;
        if($row_cnt == 1){
            $row = $result->fetch_array(MYSQLI_BOTH);
            $_SESSION["UserID"] = $row['UserID'];
            $_SESSION["Fname"] = $row['Fname'];
            $_SESSION["Lname"] = $row['Lname'];
            $_SESSION["Email"] = $row['Email'];
            $_SESSION["Street1"] = $row['Street1'];
            $_SESSION["Street2"] = $row['Street2'];
            $_SESSION["City"] = $row['City'];
            $_SESSION["ZipCode"] = $row['ZipCode'];
            $_SESSION["Notes"] = $row['Notes'];
            $_SESSION["Lon"] = $row['Lon'];
            $_SESSION["Lat"] = $row['Lat'];
            header('Location:account');
        
        # We did not find a UserId so we echo an error
        } else {
            $nope = 'Incorrect User / Password';
        }
        
    }
?>
 
<!doctype html>
<html lang="en">
<head>
    
    <link href="https://fonts.googleapis.com/css?family=Raleway|Belleza|Cinzel" rel="stylesheet" >
    <link rel="stylesheet" href="css/info.css" type="text/css" />
    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    
    <meta charset="UTF-8">
    <title>Login</title>
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
                </nav>
            </div>
        </div>
        <div class="left-body">
        
            <img src="img/car.jpg" width="800px"></img>
            <p id="footer_info"><strong>NMSU Grants Ride Board</strong><br>
            1500 N Third St <br>
            Grants, NM 87020 <br>
            505-287-6656</p>
        </div>
       
        <div class="right-body">
        </div>


</body>
</html>