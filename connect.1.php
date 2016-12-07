<?php 
  $con = new mysqli("localhost", "zrsmith75", "", "c9");
 
  if($con->connect_errno > 0){
    die('Unable to connect to database [' . $con->connect_error . ']');
  }
?>