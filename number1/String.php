<?php

// or double quote
$name = "Mike";

// Example text and email used by functions below
$text = "ini teks";
$email = "abcd@gmail.com";

// Double quote string can escape characters \n = new line  \t = tab  \\ = backslash
echo "Hello Mike\nHello David\n";

// Double quote string can do interpolation
echo "Hello $name\n <br>";

// string concat
echo 'Hello ' . $name . "\n <br>";

// string length
echo "Name Length:  " . strlen($name) . "\n <br>";

// Remove space(s) before and after
echo "Trimmed Text: " . trim($text) . "\n <br>";

// Convert to lowercase / uppercase
echo strtolower($email) . "\n <br>";
echo strtoupper($name) . "\n <br>";

// Converts the first character to uppercase
echo ucfirst(strtolower($name)) . "\n";  // 'Mike' 

// Replace text a by text b in $text
echo str_replace('a', 'b', $text) . "\n";

// String Contains (PHP 8)
echo (str_contains($name, 'ke') ? 'true' : 'false') . "\n";  // true

// Find numeric position of first occurrence 
$pos = strpos($name, 'k'); // 2

// Returns portion of string (offset / length)
echo substr($name, 0, $pos) . "\n"; // Mi

?>