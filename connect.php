<?php
$dbSevername = "localhost:3306";
$dbUsername = "root";
$dbPassword = "Pun230941";
$dbName = "database";
// Create connection
$conn = mysqli_connect($dbSevername, $dbUsername, $dbPassword, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
?>