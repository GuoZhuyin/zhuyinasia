<?php
session_start();

// Create connection
$conn = new mysqli("localhost", "root", "sql108022062wp", "asiawork");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset('utf8mb4');

?>