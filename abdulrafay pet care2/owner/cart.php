<?php
session_start();

echo "<h1>Your Cart</h1>";

if (empty($_SESSION['cart'])) {
    echo "<p>Your cart is empty.</p>";
} else {
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $subtotal = $item['price'] * $item['quantity'];
        $total += $subtotal;
        echo "<div class='cart-item'>
                <h3>".$item['name']."</h3>
                <p>Price: ".$item['price']." | Quantity: ".$item['quantity']."</p>
                <p>Subtotal: ".$subtotal."</p>
              </div>";
    }
    echo "<h2>Total: $total</h2>";
}
?>
