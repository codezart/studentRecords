<?php
require_once 'sessionStart.php';
$connection = mysqli_connect('localhost',"root","",$_SESSION['databaseName']); //database related

if(!$connection){
  die("ERROR: Could not connect. ". mysqli_connect_error);
}
mysqli_select_db($connection, $_SESSION['databaseName']);  //databse related
 ?>
