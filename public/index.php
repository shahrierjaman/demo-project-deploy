<?php
$servername = "mysql"; 
$username = "root";
$password = "rootpassword";
$database = "mydatabase";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h2>Connected to MySQL successfully!</h2>";
?>
