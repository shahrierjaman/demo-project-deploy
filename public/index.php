<?php
$host = getenv("DATABASE_HOST");
$user = getenv("DATABASE_USER");
$pass = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");
$port = getenv("DATABASE_PORT");

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "✅ Database connected successfully!";
?>
