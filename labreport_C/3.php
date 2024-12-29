<?php
class Student {
    public $name;
    public $surname;
    public $country;
    private $tuition;
    protected $indexNumber;

    public function __construct($name, $surname, $country) {
        $this->name = $name;
        $this->surname = $surname;
        $this->country = $country;
    }

    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function helloWorld() {
        return "Hello World";
    }

    protected function helloFamily() {
        return "Hello Family";
    }

    private function helloMe() {
        return "Hello me!";
    }

    private function getTuition() {
        return $this->tuition;
    }
}

class PartTimeStudent extends Student {
    public function helloParent() {
        return $this->helloFamily();
    }
}

// Example Usage
$student = new Student("Jiban", "Sharam", "Nepal");
echo $student->helloWorld() . "\n";

$partTimeStudent = new PartTimeStudent("Janu", "Deol", "India");
echo $partTimeStudent->helloParent() . "\n";
?>

