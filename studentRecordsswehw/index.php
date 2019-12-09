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
                <h2>WEB CONFIGURATIONS</h2>
                <form action='connect.php' method='POST' id='createDb'>
                  <label>DATABASE NAME</label>
                  <input class="form-control" type="text" placeholder="DATABASE NAME" name="dbName">
                  <label>USER NAME</label>
                  <input class="form-control" type="text" placeholder="USER NAME" name="userName">
                  <label>PASSWORD</label>
                  <input class="form-control" type="text" placeholder="PASSWORD" name="pswd">
                  <button class="btn btn-warning" type="submit" style="margin: 22px;">create database</button>
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
      function visitAddCourse(){
        window.location.href = "courses.php";
      }
      function visitdbcreate(){
        window.location.href = "databaseCreate.php";
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
