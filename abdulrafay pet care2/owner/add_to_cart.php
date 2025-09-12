<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$product_id = $_POST['product_id'];
$name = $_POST['name'];
$price = $_POST['price'];

// check if product already in cart
$found = false;
foreach ($_SESSION['cart'] as &$item) {
    if ($item['id'] == $product_id) {
        $item['quantity'] += 1;
        $found = true;
        break;
    }
}

if (!$found) {
    $_SESSION['cart'][] = [
        'id' => $product_id,
        'name' => $name,
        'price' => $price,
        'quantity' => 1
    ];
}

header("Location: cart.php");
exit();
