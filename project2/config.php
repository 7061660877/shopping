<?php
$host = "localhost"; // Your MySQL host
$user = "root"; // Your MySQL username (default 'root' in XAMPP)
$password = ""; // Your MySQL password (leave empty if no password)
$database = "shop"; // Your MySQL database name

// Connect to MySQL server
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
