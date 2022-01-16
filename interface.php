<?php

interface Animal
{
    public function bark();
}
class Dog implements Animal
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function bark()
    {
        echo "$this->name is barking";
    }
}
class Cat implements Animal
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function bark()
    {
        echo "$this->name is mewoing";
    }
}

function app(Animal $animal)
{
    echo $animal->bark();
}
app(new Dog("Aung Nat"));
app(new Cat("shwe wah"));
