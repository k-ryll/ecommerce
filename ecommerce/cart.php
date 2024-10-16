<link rel="stylesheet" href="css/homepage.css">
<?php
    include 'includes/header.php';
?>
<div class="checkout">
<?php

include 'classes/Order.php';
include 'classes/Product.php';

// Simulate adding product to the cart
$order = new Order();
if (isset($_GET['add'])) {
    $productId = $_GET['add'];
    $selectedProduct = new Product($productId, "Product $productId", 100 * $productId, "Description of product $productId");
    $order->addToCart($selectedProduct);
}

echo "<h2>Your Cart:</h2>";
?>
<div class="cart-item">
<?php
$order->displayCart();

include 'includes/footer.php';
?>
</div>


</div>
<?php 
    include "checkout.php";
?>
