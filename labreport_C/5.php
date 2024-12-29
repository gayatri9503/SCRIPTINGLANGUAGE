<?php
interface HasInfo {
    public function getInfo();
}

class Address implements HasInfo {
    public $street;
    public $number;
    public $city;

    public function __construct($street, $number, $city) {
        $this->street = $street;
        $this->number = $number;
        $this->city = $city;
    }

    public function getInfo() {
        return "Address: street {$this->street}, number {$this->number}, city {$this->city}";
    }
}

class Phone implements HasInfo {
    public $prefix;
    public $number;

    public function __construct($prefix, $number) {
        $this->prefix = $prefix;
        $this->number = $number;
    }

    public function getInfo() {
        return "Number: {$this->prefix} / {$this->number}";
    }
}

class User implements HasInfo {
    public $name;
    public $surname;
    private $address;
    private $phone;

    public function __construct($name, $surname, Address $address, Phone $phone) {
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function getInfo() {
        return "User: {$this->name} {$this->surname}\n" . 
               $this->address->getInfo() . "\n" . 
               $this->phone->getInfo();
    }
}

// Example Usage
$address = new Address("Main St", 123, "Kathmandu");
$phone = new Phone("+977", "123456789");
$user = new User("Jiban", "Kadel", $address, $phone);

echo $user->getInfo();
?>
