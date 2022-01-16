<?php

$students = [
    [
        "id"=>1,
        "name"=>"Mg Mg",
        "address"=>"Hledan"
    ],
    [
        "id"=>3,
        "name"=>"Hla Hla",
        "address"=>"PuZunDaung"
    ],
    [
        "id"=>4,
        "name"=>"Ba Ba",
        "address"=>"Village"
    ],
    [
        "id"=>2,
        "name"=>"Mya Mya",
        "address"=>"Village"
    ]
];
$final = array_search(2, array_column($students, 'id')); //[1,2,3,4]
echo "<pre>";

print_r($students[$final]);
