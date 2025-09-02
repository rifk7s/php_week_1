<?php
// Shortcut addition assignment
$value = 10;
$value++; // 12
// or
// $value += 1 // 12    

// Shortcut subtraction assignment
$value = 10;
$value--; // 9
// or
// $value2 -= 1 // 9

// Check if numeric
echo is_numeric('59.99'); # true

// Round a number
echo round(0.80);  // returns 1

// Round a number with precision
echo round(1.49356, 2);  // returns 1.49

// Random number 
echo(rand(10, 100)); # 89