<?php
$host = getenv("DATABASE_HOST") ?: "mainline.proxy.rlwy.net";
$user = getenv("DATABASE_USER") ?: "root";
$pass = getenv("DATABASE_PASSWORD") ?: "edSrffrYiYSGtyMyBpOXXYVcPZriYrPo";
$dbname = getenv("DATABASE_NAME") ?: "railway";
$port = getenv("DATABASE_PORT") ?: "49816";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname, (int)$port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "✅ Database connected successfully!";
?>
