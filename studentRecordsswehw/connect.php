<?php

  require_once 'sessionStart.php';
  $databaseName = $_POST['dbName'];
  $userName = $_POST['userName'];
  $password = $_POST['pswd'];

  $_SESSION['databaseName']=$databaseName;
  $_SESSION['userName']=$userName;
  $_SESSION['password']=$password;

  $connection = mysqli_connect('localhost',"root","",'studentrecords'); //database rekated

  if(!$connection){
    die("ERROR: Could not connect. ". mysqli_connect_error);
  }

  $db = "CREATE DATABASE $databaseName";  //database related
  if(mysqli_query($connection,$db))
    echo "Database created successfully";
  else {
    echo "ERROR: could not create the database";
  }
  mysqli_select_db($connection, $databaseName);
  $createCourseTable = "  CREATE TABLE courses(
                          course_code VARCHAR(30) NOT NULL,
                          title VARCHAR(50) NOT NULL,
                          credit_hours INT NOT NULL,
                          PRIMARY KEY(course_code))";

  $createGradesTable = "  CREATE TABLE grades(
                          sID VARCHAR(30) NOT NULL,
                          course_code VARCHAR(30) NOT NULL,
                          semester int not null,
                          letter_grade CHAR(5),
                          FOREIGN KEY(course_code) REFERENCES courses(course_code))";

  if(mysqli_query($connection,$createCourseTable)){
      echo "'course table created successfully";
    }
  else {
    echo 'check table syntax or mysqlquery';
  }

  if(mysqli_query($connection,$createGradesTable)){
      echo "grades table created successfullyy";
    }
  else {
    echo 'check table syntax or mysqlquery';
  }
  header('location: courses.php')
 ?>
