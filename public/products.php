<?php
$host = getenv("DATABASE_HOST") ?: "mainline.proxy.rlwy.net";
$user = getenv("DATABASE_USER") ?: "root";
$pass = getenv("DATABASE_PASSWORD") ?: "edSrffrYiYSGtyMyBpOXXYVcPZriYrPo";
$dbname = getenv("DATABASE_NAME") ?: "railway";
$port = getenv("DATABASE_PORT") ?: "49816";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname, (int)$port); // Include database connection

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Product List</h2><ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['name']} - $ {$row['price']}</li>";
    }
    echo "</ul>";
} else {
    echo "No products found.";
}
$conn->close();
?>
