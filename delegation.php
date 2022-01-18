<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

interface CeoInterface
{
    public function scold();
}
interface GmInterface
{
    public function giveMoney();
}
interface ManagerInterface
{
    public function manage();
}

class Ceo implements CeoInterface
{
    public function scold()
    {
        echo "CEO is scolding <br>";
    }
}
class Gm implements GmInterface
{
    public function giveMoney()
    {
        echo "Gm gives many budgets <br>";
    }
}

class Manager implements ManagerInterface
{
    public $ceo;
    public $gm;
    public function __construct(CeoInterface $ceo, GmInterface $gm)
    {
        $this->ceo = $ceo;
        $this->gm = $gm;
    }
    public function manage()
    {
        echo "Blah Blah <br>";
    }
}


$manager = new Manager(new Ceo, new Gm);
$manager->ceo->scold();
$manager->gm->giveMoney();
$manager->manage();
