<?php
$con=mysqli_connect("example.com","peter","abc123");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create database
$sql="CREATE DATABASE websyslab9";
if (mysqli_query($con,$sql)) {
  echo "Database websyslab9 created successfully";
} else {
  echo "Error creating database: " . mysqli_error($con);
}



?>
