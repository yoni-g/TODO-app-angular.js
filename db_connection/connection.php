<?php
$servername = "fdb3.runhosting.com";
$username = "1868644_bytecode";
$password = "qwer1qwerQ";
$db_name = "1868644_bytecode";
// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>