<?php

class Animal
{
    protected $name;
    protected $claws;
    protected $food;

    public function __construct(string $name, bool $claws, string $food)
    {
        $this->name = $name;
        $this->claws = $claws;
        $this->food = $food;
    }
}

class Dog extends Animal
{
    public function something()
    {
        echo "$this->name"."<br>";
        echo "$this->claws"."<br>";
        echo "$this->food"."<br>";
    }
}

$dog = new Dog("aung nat", true, "Bone");
$dog->something();
