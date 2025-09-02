
<?= "Hello World"
// Short syntax for PHP echo example ?>

<?php

// Create a namespace
// <? declare(strict_types=1);
//  PHP opening/closing tag
// if no closing tag the rest of the file will be considered PHP
  echo "Hello World <br>";


//Enable strict typing (first line of your PHP file)

// Include a PHP file
// require 'app/Product.php';

// Use a namespace
// use App\Product;

$firstName = 'Mike';  // camelCase

function updateProduct() { // camelCase
  return "Function updateProduct called ";
}

class ProductItem { // StudlyCaps
  public $name = "Product Item";
}

const ACCESS_KEY = '123abc'; // all upper case with underscore separators

// Echo calls for function, class, and constant
echo updateProduct() . "<br>";

$product = new ProductItem();
echo $product->name . "<br>";

echo ACCESS_KEY . "<br>";


?>