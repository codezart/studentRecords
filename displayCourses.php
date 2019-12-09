<?php
  require_once 'sessionStart.php';

    require 'dbconnection.php';
     //query to get courses
     $query = "select course_code from courses";
     $result = mysqli_query($connection, $query);

     if(mysqli_num_rows($result) > 0){
         while ($row = mysqli_fetch_array($result)) {
             echo " <option value'".$row['course_code']."'>".$row['course_code']."</option>";
      }
     }

 ?>
