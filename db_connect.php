<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "PatynasDB"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
