<?php
class Product {
    private $description;
    private $quantity;
    private $price;

    public function __construct($description, $quantity, $price) {
        if (!is_string($description)) {
            echo "Error: Description must be a string.\n";
        }
        if (!is_numeric($quantity) || !is_numeric($price)) {
            echo "Error: Quantity and price must be numbers.\n";
        } else {
            $this->description = $description;
            $this->quantity = $quantity;
            $this->price = $price;
        }
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function calculatePrice() {
        return $this->quantity * $this->price;
    }
}

// Example Usage
$product = new Product("Laptop", 5, 800);
echo "Description: " . $product->getDescription() . "\n";
echo "Quantity: " . $product->getQuantity() . "\n";
echo "Price: " . $product->getPrice() . "\n";
echo "Total Price: " . $product->calculatePrice() . "\n";
?>

