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
                    <!--<ul>-->
                    <!--    <li><a href="logout">Log out</a></a></li>    -->
                    <!--</ul>-->
                     <div class="nope">
                        <!--Print no user found -->
                        <?php echo $nope ?>    
                    </div>
                </nav>
            </div>
        </div>
        <div class="left-body">
        
            <img src="img/car.jpg" width="800px"></img>
        </div>
        <div class="right-body">
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <form action="" method="post" name="LoginForm" id="LoginForm">
                <div class="formElement">
                    <input type="text" name="Email" required="required" class="TField" id="Email" placeholder="Email"/>
                </div>
                <div class="formElement">
                    <input type="password" name="Password" required="required" class="TField" id="Password" placeholder="Password"/>
                </div>
                <div class="formElement">
                    <input name="Login" type="submit" class="button" id="Login" value="Login" />
                </div>
            </form>
        </div>
        <div class="footer">
       
        </div>
    </div>
    

</body>
</html>