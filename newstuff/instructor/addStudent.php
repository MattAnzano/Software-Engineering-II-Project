<?php

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

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html">SmartPlan</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <li><a href="index.html">Dashboard</a></li>
            <!--<li><a href="about.html">About</a></li>-->
            <li><a class="active" href="courses.html">Courses</a></li>
            <!--<li><a href="trainers.html">Trainers</a></li>>-->
            <!--<li><a href="events.html">Events</a></li>-->
            <!--<li><a href="pricing.html">Pricing</a></li>-->

            
            <!--<li><a href="contact.html">Contact</a></li>-->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="addCourse.php" class="get-started-btn">Add Course</a>

        </div>
    </header><!-- End Header -->


    <br>
    <br>
    <br>
    <br>
    
    <p>I think the process we need to develop this page is</p>
    <ol>
        <li>Pick the course we want to add a student to</li>
        <li>Create a query that returns the list of all students in that course</li>
        <li>Have a table of students are can be added</li>
        <li>click that student and run an insert query to the course.</li>
        <li>update list</li> 
    </ol>
</body>
</html>