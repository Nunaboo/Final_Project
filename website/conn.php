<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitnessexpert"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connected successfully";
}

// Select the database
if (!$conn->select_db($dbname)) {
  die("Error selecting database: " . $conn->error);
}
?>
