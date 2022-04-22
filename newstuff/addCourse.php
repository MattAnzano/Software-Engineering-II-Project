<?php

    require_once "db.php";

    $coursename = $_POST['coursename'];
    $numofstudents = $_POST['numofstudents'];
    $classdescription = $_POST['description'];

    $sql = INSERT INTO Course (coursename,numofstudents, classdescription)
VALUES ($coursename, $numofstudents, $classdescription);


?>
