<?php

    //require_once "db.php";

    //$coursename = $_POST['coursename'];
    //$numofstudents = $_POST['numofstudents'];
    //$classdescription = $_POST['description'];

    //$sql = INSERT INTO Course (coursename,numofstudents, classdescription)
    //VALUES ($coursename, $numofstudents, $classdescription);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Canvas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon"> <!-- Here We can add our own logo to change head of page logo-->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.7.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

    <form action="addCourse.php" method="POST">
    <h1>Please Fill in the Course Information:</h1>
    <form>
  <!-- Course Name input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control" />
    <label class="col-sm-2 col-form-label" for="form4Example1">Course Name</label>
  </div>

    <!--Input field for number of students-->
  <div class="form-outline mb-4">
    <input type="number" id="numberofstudents" name="numberofstudents" min="1" max="30" placeholder="25" class="form-control" />
    <label class="form-label" for="form4Example1">Number of Students</label>
  </div>

  <!-- Course Date -->
  <div class="form-outline mb-4">
  <label for="courseDates">Course dates: (date and time):</label>
  <input type="datetime-local" id="courseDates" name="courseDates">
  </div>

  <!-- Course Description input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="form4Example3" rows="4"></textarea>
    <label class="form-label" for="form4Example3">Course Description</label>
  </div>


  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
</form>
</body>
</html>