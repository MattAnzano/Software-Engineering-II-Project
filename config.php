<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'anzanom1_testuser');
define('DB_PASSWORD', 'csit355-02');
define('DB_NAME', 'anzanom1_golfBallRetail');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>


//This is the command needed to connect our other php scripts "require_once "config.php";"
