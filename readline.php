<?php

echo "Finding Area Program \n";
echo "Enter your shape : \n";

$shape = readline("Circle : c, Ratangle : r, Triangle : t = ");

switch ($shape) {
    case "c":
        echo "Circle";
        area();
        break;
        case "r":
            echo "Ractangle";
            break;
        case "t":
            echo "Triangle";
            // no break
        default:
        echo "No Shape!";
        break;
}

function area()
{
    $pi = 3.1415;
    $radius = readline("radius of circle : ");
    $final = $pi * pow($radius, 2);
    echo "Your Circle Area is $final";
};
