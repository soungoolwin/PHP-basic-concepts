<?php


abstract class Car
{
    abstract public function function();
}
class Marcedes extends Car
{
    public function function()
    {
        echo "This mercedes is good condition.";
    }
}

class Bmw extends Car
{
    public function function()
    {
        echo "This Bmw is not a good condition";
    }
}
function app(Car $car)
{
    echo $car->function();
}


app(new Marcedes);
app(new Bmw);
