<?php
require '../src/db.php'; // Include database connection

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
