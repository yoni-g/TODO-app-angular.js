<?php
$servername = "test.example";
$username = "yourUserName";
$password = "yourPass";
$db_name = "1868644_bytecode";
// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
