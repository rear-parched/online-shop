<?php
session_start();
require_once('db.php');

// Display cart items and calculate total
$total = 0;

echo "<h2>Checkout</h2>";
foreach ($_SESSION['cart'] as $item) {
    echo "{$item['name']} - {$item['price']}<br>";
    $total += $item['price'];
}

echo "<h3>Total: $total</h3>";

// Implement payment processing logic here
// ...

// Clear the cart after checkout
unset($_SESSION['cart']);
?>
