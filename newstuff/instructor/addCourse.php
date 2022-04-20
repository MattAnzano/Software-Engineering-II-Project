<?php

    require_once "db.php";

    $coursename = $_POST['coursename'];
    $numofstudents = $_POST['numofstudents'];
    $classdescription = $_POST['description'];

    //$sql = INSERT INTO Course (coursename,numofstudents, classdescription)
    //VALUES ($coursename, $numofstudents, $classdescription);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addCourse</title>
</head>
<body>

    <form action="addCourse.php" method="POST">
    <h1>TEST HEADER FOR OUR PHP ADD COURSE FORM</h1>
    <form>
  <!-- Course Name input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control" />
    <label class="form-label" for="form4Example1">Course Name</label>
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