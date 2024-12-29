<?php
interface Shape {
    public function calculateArea();
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Square implements Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function calculateArea() {
        return pow($this->side, 2);
    }
}

// Example Usage
$circle = new Circle(5);
$square = new Square(4);

echo "Circle Area: " . $circle->calculateArea() . "\n";
echo "Square Area: " . $square->calculateArea() . "\n";
?>
