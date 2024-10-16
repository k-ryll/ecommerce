<?php 
    include 'includes/header.php';
?>
<link rel="stylesheet" href="css/homepage.css">
<div class="product">
<?php
include 'classes/session.php';
include 'classes/Product.php';

$products = [
    new Product(1, "T-shirt", 100, "Description of product 1"),
    new Product(2, "Jeans", 200, "Description of product 2"),
    new Product(3, "Hoodie", 300, "Description of product 3")
];

foreach ($products as $product) {
    $product->displayProduct();
}

?>    
</div>
<?php
    include 'includes/footer.php';
?>



