<?php

// Initialize variables used by the examples
$condition = 3;
$condition2 = 5;
$isActive = true;
$name = null; // will show null checks
$isValid = false;

if ($condition == 10) {
    echo "condition 10<br>\n";
} elseif ($condition == 5) {
    echo "condition 5<br>\n";
} else {
    echo "all other conditions<br>\n";
}
echo "<strong>If / elseif / else</strong><br>\n";
if ($condition == 10) {
    echo "condition 10<br>\n";
} elseif ($condition == 5) {
    echo "condition 5<br>\n";
} else {
    echo "all other conditions<br>\n";
}

if ($condition === 10 && $condition2 === 5) echo "10 and 5<br>\n";
if ($condition === 10 || $condition2 === 5) echo "10 or 5<br>\n";
echo "<strong>And / Or</strong><br>\n";
if ($condition === 10 && $condition2 === 5) echo "10 and 5<br>\n";
if ($condition === 10 || $condition2 === 5) echo "10 or 5<br>\n";

if ($isActive) echo "Active is true<br>\n";
echo "<strong>One-line conditional</strong><br>\n";
if ($isActive) echo "Active is true<br>\n";

if (is_null($name)) echo "Name is null<br>\n";
echo "<strong>Null check</strong><br>\n";
if (is_null($name)) echo "Name is null<br>\n";

echo ($isValid ? 'user valid' : 'user not valid') . "<br>\n";
echo "<strong>Ternary operator</strong><br>\n";
echo ($isValid ? 'user valid' : 'user not valid') . "<br>\n";

echo ($name ?? 'Mike') . "<br>\n";
echo "<strong>Null coalesce</strong><br>\n";
echo ($name ?? 'Mike') . "<br>\n";

// Null coalesce assignment
$name ??= 'Mike';

$user = null;
// will print 'Not applicable' since $user is null
echo ($user?->profile?->activate() ?? 'Not applicable') . "<br>\n";
echo "<strong>Null-safe / Null-coalesce</strong><br>\n";
$user = null;
echo ($user?->profile?->activate() ?? 'Not applicable') . "<br>\n";

$names = ['Mike', 'Paul', 'John'];
usort($names, fn($a, $b) => $a <=> $b);
echo implode(', ', $names) . "<br>\n";
echo "<strong>Spaceship / usort</strong><br>\n";
$names = ['Mike', 'Paul', 'John'];
usort($names, fn($a, $b) => $a <=> $b);
echo implode(', ', $names) . "<br>\n";

foreach ([false, 0, 0.0, null, '0', '', [], 'ok'] as $val) {
    echo (is_bool((bool)$val) ? ((bool)$val ? 'true' : 'false') : 'unknown') . " ";
}
echo "<br>\n";
echo "<strong>Boolean conversions</strong><br>\n";
foreach ([false, 0, 0.0, null, '0', '', [], 'ok'] as $val) {
    echo (is_bool((bool)$val) ? ((bool)$val ? 'true' : 'false') : 'unknown') . " ";
}
echo "<br>\n";

$color = 'purple';
switch ($color) {
    case 'red': echo "The color is red<br>\n"; break;
    case 'yellow': echo "The color is yellow<br>\n"; break;
    case 'blue': echo "The color is blue<br>\n"; break;
    default: echo "The color is unknown<br>\n"; break;
}
echo "<strong>Switch</strong><br>\n";
$color = 'purple';
switch ($color) {
    case 'red': echo "The color is red<br>\n"; break;
    case 'yellow': echo "The color is yellow<br>\n"; break;
    case 'blue': echo "The color is blue<br>\n"; break;
    default: echo "The color is unknown<br>\n"; break;
}

$type = match($color) {
    'red' => 'danger',
    'yellow', 'orange' => 'warning',
    'green' => 'success',
    default => 'Unknown'
};
echo "Type: $type<br>\n";
echo "<strong>Match expression</strong><br>\n";
$type = match($color) {
    'red' => 'danger',
    'yellow', 'orange' => 'warning',
    'green' => 'success',
    default => 'Unknown'
};
echo "Type: $type<br>\n";

echo isset($color) ? 'color is set' . "<br>\n" : 'color not set' . "<br>\n";
echo "<strong>isset</strong><br>\n";
echo isset($color) ? 'color is set' . "<br>\n" : 'color not set' . "<br>\n";

?>