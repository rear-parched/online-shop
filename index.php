<?php
require_once('db.php');

$result = $conn->query("SELECT * FROM products");

while ($row = $result->fetch_assoc()) {
    echo "Product: {$row['name']} - Price: {$row['price']} ";
    echo "<a href='cart.php?action=add&id={$row['id']}'>Add to Cart</a><br>";
}
?>
