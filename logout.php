<?php 
    require 'connections/connections.php';
    session_start();
    unset($_SESSION["UserID"]);
    session_destroy();
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
                    </ul>
                </nav>
            </div>
        </div>
        <div class="logout">
            <h2>You have logged out!</h2>
        </div>
     
       
    </div>
    

</body>
</html>