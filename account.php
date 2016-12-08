<?php 
    require 'connections/connections.php';
    //print_r($_SESSION);

    //session_start();
    if(isset($_SESSION["UserID"])) {
        
    } else {
        header('Location: login.php');
    }
    
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account</title>
    <link rel="stylesheet" href="css/info.css" type="text/css" />
    <link rel="stylesheet" href="css/menu.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Raleway|Belleza|Cinzel" rel="stylesheet" >
</head>
<body>

    <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
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
                    </ul>
                    <ul>
                        <li><a href="logout">Log out</a></li>    
                    </ul>
                </nav>
            </div>
        </div>
        <div class="welcome">
           <div id="loggedIn">
                Welcome 
                <!--<?php echo $_SESSION["UserID"]; ?>-->
                <?php echo $_SESSION["Fname"]; ?>
                <?php echo $_SESSION["Lname"]; ?>, lets ride!<br>
                <?php echo "Today is " . date(l) . ", " .date("m-d-Y"); ?> : 
                <?php 
                    date_default_timezone_set("America/Denver");
                    echo date("h:i a"); 
                ?>
            
           </div>
 
        </div>
        <div class="main_location">
            <div id="first">
                <div id="twitter_feed">
                    <center>
                        <a href="https://twitter.com/NMSUGrants" class="twitter-follow-button" data-show-count="false">Follow @NMSUGrants</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script> <a href="https://twitter.com/intent/tweet?screen_name=NMSUGrants" class="twitter-mention-button" data-show-count="false">Tweet to @NMSUGrants</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </center>
                    <a class="twitter-timeline" data-width="390" data-height="1000" href="https://twitter.com/NMSUGrants">Tweets by NMSUGrants</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
            <div id="second">
                <div class="fb-like" data-href="https://www.facebook.com/NMSUGrantsStudentServices/" data-width="390" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                <div class="fb-page" data-href="https://www.facebook.com/NMSUGrantsStudentServices/" data-tabs="timeline" data-width="390" data-height="1000" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/NMSUGrantsStudentServices/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/NMSUGrantsStudentServices/">NMSU Grants Student Services</a></blockquote></div>
            </div>
            <div id="clear"></div>
            <div id="disclaimer">
                &copy;Copyright 2016 ~ Developers of ICT435 Senior Project
            </div>  
        </div>
    </div>
            
</body>
</html>