<?php
$servername = "localhost:3306";
$username = "root";
$password = "test";
$dbname = ""

//placeholders
$email = "email"
$password = "password"

// Create connection
$conn = new mysql_connect($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>