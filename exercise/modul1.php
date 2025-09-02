
<?php

  echo "Hello World";

// if no closing tag the rest of the file will be considered PHP

// Use a namespace
use App\Product;

$names = 'Mike';  // camelCase
function updateProduct() // camelCase
{
    // Simple function to update a product
    echo "Product updated!";
}

class ProductItem // StudlyCaps
{
    const ACCESS_KEY = '123abc'; // all upper case with underscore separators
}

// $names = readline('What is your name : ');


$name = 'Mike'; //string
$isActive = true; //boolean
$number = 25; //integer
$amount = 99.95; //float
$fruits = ['orange', 'apple', 'banana']; //array

var_dump($isActive );
print_r($names);
?>