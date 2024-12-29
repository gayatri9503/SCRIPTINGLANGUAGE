<?php
interface Vehicle {
    public function startEngine();
    public function stopEngine();
}

class Car implements Vehicle {
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function startEngine() {
        echo "Car engine started.\n";
    }

    public function stopEngine() {
        echo "Car engine stopped.\n";
    }

    public function start() {
        echo "Car started.\n";
    }

    public function displayInfo() {
        echo "Make: {$this->make}, Model: {$this->model}, Year: {$this->year}\n";
    }

    public function getDescription() {
        return "This is a {$this->make} {$this->model} from {$this->year}.";
    }

    public function setMake($make) {
        $this->make = $make;
    }

    public function getMake() {
        return $this->make;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getYear() {
        return $this->year;
    }
}

class ElectricCar extends Car {
    private $batteryCapacity;

    public function __construct($make, $model, $year, $batteryCapacity) {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function charge() {
        echo "Car is charging.\n";
    }

    public function getDescription() {
        return parent::getDescription() . " It has a battery capacity of {$this->batteryCapacity} kWh.";
    }
}

// Example Usage
$car = new Car("Toyota", "Corolla", 2022);
$car->displayInfo();
echo $car->getDescription() . "\n";

$electricCar = new ElectricCar("Tesla", "Model 3", 2023, 75);
$electricCar->displayInfo();
echo $electricCar->getDescription() . "\n";
$electricCar->charge();

