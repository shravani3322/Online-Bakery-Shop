<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

$conn = new mysqli('localhost','root','','test1');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$rstpsw = $_POST['rstpsw'];
$rsteml = $_POST['rsteml'];
// Insert data into database
$sql = "INSERT INTO reset (username, password, email, rstpsw, rsteml) VALUES ('$username', '$password', '$email','$rstpsw','$rsteml')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>