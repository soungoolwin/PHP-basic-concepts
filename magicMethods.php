<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Car
{
    public $name;
    private $args = [];
    public function __construct(string $name)
    {
        echo "This class construct" . "<br>";
        $this->name = $name;
    }
    public function __destruct()
    {
        echo "This class destructed" . "<br>";
    }
    public function __set($name, $value)
    {
        echo "__set run!" . "<br>";
        $this->args[$name]= $value;
    }
    public function __get($name)
    {
        echo "__get run!" . "<br>";
        return $this->args[$name];
    }
    public function __call($name, $arguments)
    {
        echo $name . "<br>";
        var_dump($arguments) . "<br>";
    }
    public static function __callStatic($name, $arguments)
    {
        echo $name;
        var_dump($arguments) . "<br>";
    }
}

$car = new Car("Marcedes");
$car->color = "Black";
$car->wheel = 4;
echo $car->color . "<br>";
echo $car->wheel . "<br>";
$car->drive("The car is driving", "All condition is good", 4);
Car::emergemcy("THis is emg condition");
