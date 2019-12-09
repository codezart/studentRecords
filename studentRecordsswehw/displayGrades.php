<?php
  require_once 'sessionStart.php';
    $studentID = $_POST['studentID'];

    require 'dbconnection.php';
     //query to get courses
     $query = "select DISTINCT( semester) from grades where sID   ='$studentID'";
     $semresult = mysqli_query($connection, $query);

     if(mysqli_num_rows($semresult) > 0){
         while ($row = mysqli_fetch_array($semresult)) {
           echo "<h2>".$row['semester']."<h2>";
           $cursem = $row['semester'];
           $query = "SELECT * from grades where sid ='$studentID' and semester =$cursem";
           $courseresult = mysqli_query($connection, $query);
           if(mysqli_num_rows($courseresult) > 0){
               while ($courserow = mysqli_fetch_array($courseresult)) {
                 echo "<tr>";
                 echo " <td>".$courserow['course_code']."</td>";
                 $ccode = $courserow['course_code'];
                 $query = "SELECT title from courses where course_code ='$ccode'";
                 $result = mysqli_query($connection, $query);
                 $result = $result->fetch_assoc();
                 echo " <td>".$result['title']."</td>";
                 echo " <td>".$courserow['letter_grade']."</td>";
                 echo "</tr>";
           }}
      }
     }

 ?>
