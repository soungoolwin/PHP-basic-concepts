<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Student
{
    public $name;
    public $major;
    public $class;

    public function __construct(string $name, string $major, string $class)
    {
        $this->name = $name;
        $this->major = $major;
        $this->class = $class;
        $this->connect();
    }
    public function connect()
    {
        $this->test = "This is wakeup tesing";
        echo "Wakeup success" . "<br>";
    }
    public function __sleep()
    {
        return ['name','major','class'];
    }
    public function __wakeup()
    {
        $this->connect();
    }
}

$student = new Student("Mg Mg", "CS", "E");
$s_student = serialize($student);
echo $s_student . "<br>";
$u_student = unserialize($s_student);
var_dump($u_student);
