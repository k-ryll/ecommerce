<?php

class Order {
    public $items = [];

    public function addToCart(Product $product) {
        $id = $product->id;
        if (isset($this->items[$id])) {
            $this->items[$id]['quantity']++;
        } else {
            $this->items[$id] = [
                'product' => $product,
        
                'quantity' => 1
            ];
        }
    }

    public function displayCart() {
        if (!empty($this->items)) {
            foreach ($this->items as $item) {
                $product = $item['product'];
                $quantity = $item['quantity'];
                echo "<p>{$product->name} - {$product->price} x {$quantity}</p>";
            }
        } else {
            echo "No products added.";
        }
    }

    public function removeFromCart($productId) {
        if (isset($this->items[$productId])) {
            unset($this->items[$productId]);
        }
    }

    public function updateQuantity($productId, $quantity) {
        if (isset($this->items[$productId])) {
            if ($quantity > 0) {
                $this->items[$productId]['quantity'] = $quantity;
            } else {
                
            }
        }
    }
}
?>