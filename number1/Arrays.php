<?php
$example = ['Mike', 50.2, true, ['10', '20']];

$names = ['Mike', 'Peter', 'Shawn', 'John'];

// Direct access
echo "names[1]: " . $names[1] . "<br>\n"; // Peter

// Nested array access
echo "example[3][1]: " . $example[3][1] . "<br>\n"; // 20

// Add element
$names[] = 'Micheal';
echo "After add: " . implode(', ', $names) . "<br>\n";

// Merge arrays
$array1 = [1, 2];
$array2 = [3, 4];
$array3 = array_merge($array1, $array2);
echo "Merged: " . implode(', ', $array3) . "<br>\n";

// Spread operator (PHP 7.4+)
$array4 = [...$array1, ...$array2];
echo "Spread: " . implode(', ', $array4) . "<br>\n";

// Concat with spread
$people = array_merge(['John'], $names);
echo "People: " . implode(', ', $people) . "<br>\n";

// Remove entry by value
$key = array_search('Peter', $names, true);
if ($key !== false) {
    unset($names[$key]);
}
echo "After unset Peter: " . implode(', ', $names) . "<br>\n";

// String to array and back
$text = "Mike,Shawn,John";
$arrFromText = explode(',', $text);
echo "Exploded: " . implode(' | ', $arrFromText) . "<br>\n";

// foreach
echo "Foreach greetings: ";
foreach ($names as $name) {
    echo 'Hello ' . $name . '; ';
}
echo "<br>\n";

// Count
echo "Count names: " . count($names) . "<br>\n";

// Associative array
$person = ['age' => 45, 'genre' => 'men'];
$person['name'] = 'Mike';
foreach ($person as $k => $v) {
    echo "$k: $v; ";
}
echo "<br>\n";

// Key exists, keys and values
echo "age exists? " . (array_key_exists('age', $person) ? 'yes' : 'no') . "<br>\n";
echo "keys: " . implode(', ', array_keys($person)) . "<br>\n";
echo "values: " . implode(', ', array_values($person)) . "<br>\n";

// Array filter and map
$peopleList = [
    ['name' => 'Alice', 'active' => true],
    ['name' => 'Bob', 'active' => false],
    ['name' => 'Carol', 'active' => true],
];
$filteredPeople = array_filter($peopleList, fn($p) => !empty($p['active']));
echo "Filtered names: " . implode(', ', array_map(fn($p) => $p['name'], $filteredPeople)) . "<br>\n";

$onlyNames = array_map(fn($p) => $p['name'], $peopleList);
echo "Only names: " . implode(', ', $onlyNames) . "<br>\n";

// Search associative array
$items = [
    ['id' => '100', 'name' => 'product 1'],
    ['id' => '200', 'name' => 'product 2'],
    ['id' => '300', 'name' => 'product 3'],
    ['id' => '400', 'name' => 'product 4'],
];
$found_key = array_search('product 3', array_column($items, 'name'));
echo "found_key: " . $found_key . "<br>\n";

?>