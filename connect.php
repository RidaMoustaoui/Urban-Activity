<?php

$servername="127.0.0.1";
$username="root";
$password="";
$base="urbanactivity";

// Create connection
$conn = new mysqli($servername, $username, $password,$base, 3306);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>