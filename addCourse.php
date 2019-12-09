<?php
  require_once 'sessionStart.php';
  require 'dbconnection.php';
  $courseCode =   $_POST['courseCode'];
  $title =   $_POST['courseTitle'];
  $creditHours =   $_POST['creditHours'];

  if(!isset($creditHours) || !isset($title) || !isset($courseCode)){
    header('location: courses.php');
    return;
  }

  $query = "INSERT INTO courses values('$courseCode','$title','$creditHours')";
  mysqli_query($connection, $query);

  header('location: courses.php');
?>
