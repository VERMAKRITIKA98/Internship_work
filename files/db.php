<?php
$servername = "localhost";
$database = "intern";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database );

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
}
?>