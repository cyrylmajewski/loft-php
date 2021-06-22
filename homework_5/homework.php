<?php

$bmw = [
    "model" => "X5",
    "speed" => "120",
    "doors" => "5",
    "year" => "2015"
];

$toyota = [
    "model" => "camry",
    "speed" => "145",
    "doors" => "5",
    "year" => "2017"
];

$opel= [
    "model" => "astra",
    "speed" => "145",
    "doors" => "5",
    "year" => "2017"
];


$cars = [
    "bmw" => $bmw,
    "toyota" => $toyota,
    "opel" => $opel,
];
echo "<pre>";
foreach ($cars as $key => $car) {
    echo "CAR $key </br>";
    echo implode( ' ', $car);
    echo "</br>";
}

echo "</pre>";
