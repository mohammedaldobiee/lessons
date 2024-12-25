<?php

// Function to increment a value by 5
function addTen(&$number) {
    $number += 10;
}

$value = 3;
addTen($value);
echo "Incrementing the value by 10: $value <br>";

// Function to calculate the total of given numbers
function calculateTotal(...$numbers) {
    $sum = 0;
    foreach ($numbers as $num) {
        $sum += $num;
    }
    return $sum;
}

$totalSum = calculateTotal(10, 20, 30, 40);
echo "Total sum of numbers: $totalSum <br>";

// Function to greet a list of people
function greetPeople($surname, ...$firstNames) {
    $greetingsList = "";
    foreach ($firstNames as $name) {
        $greetingsList .= "Hello, $name $surname. <br>";
    }
    return $greetingsList;
}

$familyGreetings = greetPeople("Smith", "Alice", "Bob", "Charlie");
echo $familyGreetings;

// Adding numbers with strict typing
declare(strict_types=1);

function addStrictly(int $a, int $b) {
    return $a + $b;
}

echo "Sum of strictly typed numbers: " . addStrictly(8, 12) . "<br>";

// Associative array demonstration
$vehicle = [
    "brand" => "Toyota",
    "model" => "Corolla",
    "year" => 2022
];

foreach ($vehicle as $key => $val) {
    echo "$key: $val <br>";
}

?>