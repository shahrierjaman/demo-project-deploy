<?php
$host = getenv("DATABASE_HOST") ?: "mainline.proxy.rlwy.net";
$user = getenv("DATABASE_USER") ?: "root";
$pass = getenv("DATABASE_PASSWORD") ?: "edSrffrYiYSGtyMyBpOXXYVcPZriYrPo";
$db = getenv("DATABASE_NAME") ?: "railway";
$port = getenv("DATABASE_PORT") ?: "49816";

$conn = new mysqli($host, $user, $pass, $db, (int)$port);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
