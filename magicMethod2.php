<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Dog
{
    public $name;
    public $color;
    public $data;

    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
    public function __get($name)
    {
        echo $this->data[$name];
    }
    public function __toString()
    {
        return "Class Name :" . __CLASS__ . "<br>"
        . "Name : " . $this->name . "<br>"
        . "Color : " . $this->color . "<br>";
    }


    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        unset($this->data[$name]);
    }
}

$dog = new Dog("Aung Nat", "Brown");
// echo $dog;
$dog->test = "Alskan Giant";
if (isset($dog->test)) {
    echo $dog->test . "<br>";
} else {
    echo "Don't know color" . "<br>";
}
unset($dog->test);
if (isset($dog->test)) {
    echo $dog->test . "<br>";
} else {
    echo "Don't know color" . "<br>";
}
