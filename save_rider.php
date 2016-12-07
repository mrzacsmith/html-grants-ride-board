<?php
require_once('places.php');
$UserID = $_POST['UserID'];
$Lat = $_POST['Lat'];
$Lon = $_POST['Lon'];
$db->query("INSERT INTO markers SET  Lat='$Lat', Lon='$Lon'");
$UserID = $db->UserID;
echo $UserID;
?>