<?php
session_start();
require_once('db.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'add' && isset($_GET['id'])) {
        $product_id = $_GET['id'];
        $result = $conn->query("SELECT * FROM products WHERE id = $product_id");

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $_SESSION['cart'][] = array(
                'id' => $row['id'],
                'name' => $row['name'],
                'price' => $row['price']
            );
        }
    }
}

// Display cart items
echo "<h2>Shopping Cart</h2>";
foreach ($_SESSION['cart'] as $item) {
    echo "{$item['name']} - {$item['price']}<br>";
}

// Add checkout link
echo "<a href='checkout.php'>Checkout</a>";
?>
