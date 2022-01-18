<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class JuiceMaker
{
    public $name;
    public static $isObject;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public static function addWater($name)
    {
        if (!self::$isObject instanceof JuiceMaker) {
            self::$isObject = new JuiceMaker($name);
        }
        echo "Water Added <br>";
        return self::$isObject;
    }

    public function addOrange()
    {
        echo "Orange Added <br>";
        return $this;
    }
    public function addApple()
    {
        echo "Apple Added <br>";
        return $this;
    }

    public function addSugar()
    {
        echo "Sugar Added <br>";
        return $this;
    }
    public function blend()
    {
        echo "Juice Ready <br>";
    }
}

// $applejuice = new JuiceMaker("apple");
// $applejuice->addWater()
//         ->addApple()
//         ->addSugar()
//         ->blend();
JuiceMaker::addWater("orange")
        ->addOrange()
        ->addSugar()
        ->blend();
