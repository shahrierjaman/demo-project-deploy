<?php
$host = "mysql";
$user = "root";
$pass = "rootpassword";
$db = "mydatabase";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
