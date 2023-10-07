<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'User';
 
  $conn = mysqli_connect($dn_host, $db_user, $db_password, $db_db);
  
  if(!$conn){
    die("Connection Failed". mysqli_connect_error());
  }
?>