<?php
echo 'Hello World';

// Var
$names = "rifky";
$products = [
    'marlboro',
    'vapes',
    'liquid',
    'catridge'
];

// Debug output
var_dump($names);
print_r($products);

// Input from console
$name = readline('What is your name : ');

// Print
echo "\nHello, " . $name . "!\n";
echo "Nice to meet you, " . $name . ".\n";

?>