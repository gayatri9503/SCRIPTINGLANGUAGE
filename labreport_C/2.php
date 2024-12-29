<?php
class Bicycle {
    public $brand;
    public $model;
    public $year;
    public $description = "Used bicycle";
    private $weight; // Stored in grams

    public function __construct($brand, $model, $year, $weight) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->setWeight($weight);
    }

    public function getInfo() {
        return "{$this->brand} {$this->model} ({$this->year})";
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getWeight($inKilograms = false) {
        return $inKilograms ? $this->weight / 1000 : $this->weight;
    }
}

// Example Usage
$bike1 = new Bicycle("Giant", "Escape 3", 2020, 12000);
$bike2 = new Bicycle("Trek", "FX 2", 2021, 14000);

echo $bike1->getInfo() . "\n";
echo "Weight in kg: " . $bike1->getWeight(true) . "\n";
echo "Weight in grams: " . $bike1->getWeight() . "\n";

echo $bike2->getInfo() . "\n";
echo "Weight in kg: " . $bike2->getWeight(true) . "\n";
echo "Weight in grams: " . $bike2->getWeight() . "\n";
?>

