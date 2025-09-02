<?php

// Simple function declaration and call
function fullName(string $firstName, string $lastName = 'defaultvalue'): string {
    return "$firstName $lastName";
}

echo fullName('Mike', 'Taylor') . "<br>\n";

echo fullName(firstName: 'Mike', lastName: 'Taylor') . "<br>\n"; // named args (PHP 8)

// Variadic params
function joinNames(...$params): string {
    return implode(' ', $params);
}

echo joinNames('Alice', 'Bob', 'Carol') . "<br>\n";

// Arrow function (short closure)
$greet = fn($name) => "Hello, $name";
echo $greet('World') . "<br>\n";

// Typed parameter and typed return
function display(string $first, string $last): string {
    return "$first $last";
}

echo display('John', 'Doe') . "<br>\n";

// Union type (PHP 8)
function showData(string|int $data): string {
    return (string)$data;
}

echo showData(123) . "<br>\n";

echo showData('abc') . "<br>\n";

// Mixed return type (PHP 8.0+)
function maybeArray(bool $returnArray): mixed {
    return $returnArray ? ['a', 'b'] : 'not an array';
}

var_dump(maybeArray(true));
var_dump(maybeArray(false));

environmentCheck();

function environmentCheck(): void {
    echo "This function returns void and prints nothing important.<br>\n";
}

?>