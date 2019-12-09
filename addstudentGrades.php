<?php
  require_once 'sessionStart.php';
  require 'dbconnection.php';
  $studentID =   $_POST['studentID'];
  $semester =   $_POST['semester'];
  $course =   $_POST['course'];
    $grade =   $_POST['grade'];

  if(!isset($studentID) || !isset($semester) || !isset($course) || !isset($grade)){
    echo "<script>";
    echo "alert('YOU DID NOT ENTER ALL THE FIELDS, PLEASE MAKE SURE TO ENTER ALL OF THEM!!')";
    echo "</script>";
    header('location: insertGrades.php');
    return;
  }

  $query = "INSERT INTO grades values('$studentID','$course','$semester','$grade')";
  mysqli_query($connection, $query);

  header('location: insertGrades.php');
?>
