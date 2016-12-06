              <?php
                //Connect to the database
    
mysql_connect("127.0.0.1", "zrsmith75", "") or die("Connection Failed");
mysql_select_db("c9")or die("Connection Failed");
$user = $_POST['user'];
$password = $_POST['userpassword'];
$query = "UPDATE users SET Long = '$long' WHERE name = '$user'";

?>  