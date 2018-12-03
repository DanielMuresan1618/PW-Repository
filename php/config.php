<?php $servername = "localhost";
$username = "root";
$password = "";
$database = "pw"; // corect

// Create connection
$conn= mysqli_connect($servername, $username, $password, $database); // apelat corect

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$cfg['collation_connection'] = 'utf8mb4_unicode_ci';?>