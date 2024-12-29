<?php
class User {
    protected $name;
    protected $surname;
    protected $username;
    protected $is_admin = false;

    public function __construct($name, $surname, $username) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    public function isAdmin() {
        return $this->is_admin;
    }

    public function getFullName() {
        $adminText = $this->is_admin ? " (admin)" : "";
        return "{$this->name} {$this->surname}{$adminText}";
    }
}

class Customer extends User {
    private $city;
    private $state;
    private $country;

    public function setLocation($city, $state, $country) {
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    public function getLocation() {
        return "{$this->city}, {$this->state}, {$this->country}";
    }
}

class AdminUser extends User {
    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
        $this->is_admin = true;
    }
}

// Example Usage
$user = new User("Jiban", "Kadel", "jibankadel");
$admin = new AdminUser("aarati", "Sharma", "aaratisharma");
$customer = new Customer("Janu", "Karki", "janukarki");
$customer->setLocation("Maitidevi", "Ktm", "Nepal");

echo $user->getFullName() . "\n";
echo $admin->getFullName() . "\n";
echo $customer->getFullName() . "\n";
echo $customer->getLocation() . "\n";
?>
