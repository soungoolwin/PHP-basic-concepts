<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Programmer
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat(string ...$foods)
    {
        $response = $this->name . "is eating" . " ";
        foreach ($foods as $food) {
            $response .= $food . ",";
        }
        $response .= ".";
        if (substr($response, -2, 1) == ',') {
            $response = substr($response, 0, -2).substr($response, -1);
        }
        echo $response . "<br>";
        return $this;
    }
    public function code()
    {
        echo "$this->name is coding <br>";
        return $this;
    }
    public function sleep()
    {
        echo "$this->name is sleeping <br>";
        return $this;
    }
}


$programmer = new Programmer("Mg Mg");
$programmer->eat("Rice", "Burger", "Juice")
        ->code()
        ->sleep();
