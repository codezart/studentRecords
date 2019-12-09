<?php
  require_once 'sessionStart.php';
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>student records</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="d-md-flex justify-content-md-center align-items-md-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>STUDENT GRADERS CENTER</h2>
                <form action='addstudentGrades.php' method='POST'>
                  <label>STUDENT ID</label>
                  <input class="form-control" type="text" placeholder="Student ID" name="studentID">

                  <label>SEMESTER</label>
                  <select class="form-control" id="semester" name='semester'>
                    <option value="191">191</option>
                    <option value="182">182</option>
                    <option value="181">181</option>
                  </select>

                  <label>COURSE CODE</label>
                  <select class="form-control" id="Allcourses" name='course'>
                  </select>

                  <label>LETTER GRADE</label>
                  <select class="form-control" id='grade' name='grade'>
                    <option value="A+">A+</option>
                    <option value="A">A</option>
                    <option value="B+">B+</option>
                    <option value="B">B</option>
                    <option value="C+">C+</option>
                    <option value="C">C</option>
                    <option value="D+">D+</option>
                    <option value="D">D</option>
                    <option value="F">F</option>
                  </select>

                  <button class="btn btn-warning" type="submit" style="margin: 22px;">SUBMIT</button>
                </form>
            </div>
        </div>
        <div class="row">
          <button type="button" id="courseadd" onclick="visitAddCourse()">Add Course</button>
            <button type="button" id="courseadd" onclick="visitdbcreate()">Create Database</button>
              <button type="button" id="courseadd" onclick="visitAddgrade()">Add Student Grade</button>
                <button type="button" id="courseadd" onclick="visitTranscript()">View Student Transcript</button>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#Allcourses').load('displayCourses.php');
      });

        function visitAddCourse(){
          window.location.href = "courses.php";
        }
        function visitdbcreate(){
          window.location.href = "index.php";
        }
        function visitAddgrade(){
          window.location.href = "insertGrades.php";
        }
        function visitTranscript(){
          window.location.href = "studentGrades.php";
        }

    </script>
</body>

</html>
