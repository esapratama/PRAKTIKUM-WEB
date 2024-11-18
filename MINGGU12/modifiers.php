<?php
class Animal {
    public $name;
    protected $age;
    private $color;

    public function __construct($name, $age, $color) {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function getName() {
        return $this->name;
    }

    // Tambahkan metode public untuk mengakses protected $age
    public function getAge() {
        return $this->age;
    }

    // Tambahkan metode public untuk mengakses private $color
    public function getColor() {
        return $this->color;
    }
}

$animal = new Animal("Dog", 3, "Brown");

echo "Name: " . $animal->getName() . "<br>";
echo "Age: " . $animal->getAge() . "<br>"; // Sekarang dapat diakses melalui metode public
echo "Color: " . $animal->getColor() . "<br>"; // Sekarang dapat diakses melalui metode public
?>