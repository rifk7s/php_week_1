<?php
function merge(&$nums1, $m, $nums2, $n) {
    $i = $m - 1; // pointer for nums1
    $j = $n - 1; // pointer for nums2
    $k = $m + $n - 1; // pointer for final position in nums1

    while ($j >= 0) {
        if ($i >= 0 && $nums1[$i] > $nums2[$j]) {
            $nums1[$k] = $nums1[$i];
            $i--;
        } else {
            $nums1[$k] = $nums2[$j];
            $j--;
        }
        $k--;
    }
}

// ===== MODIFY THESE VALUES TO TEST DIFFERENT CASES =====

// Test Case 1 - Change these values as needed
$test1_nums1_values = [7, 9, 12];  // The actual values in nums1
$test1_nums2_values = [1, 4, 8, 11];  // The values in nums2

// Test Case 2 - Change these values as needed
$test2_nums1_values = [5, 10];  // The actual values in nums1
$test2_nums2_values = [2, 6, 15, 20];  // The values in nums2

// Test Case 3 - Change these values as needed
$test3_nums1_values = [];  // Empty nums1
$test3_nums2_values = [3, 6, 9];  // The values in nums2

// ====================================================

echo "<h2>Merge Two Sorted Arrays - Custom Test Cases</h2>";

// Test Case 1
echo "<h3>Test Case 1:</h3>";
$m1 = count($test1_nums1_values);
$n1 = count($test1_nums2_values);
$nums1_test1 = array_merge($test1_nums1_values, array_fill(0, $n1, 0));
$nums2_test1 = $test1_nums2_values;

echo "Before merge:<br>";
echo "nums1 = [" . implode(", ", array_slice($nums1_test1, 0, $m1)) . ", " . implode(", ", array_fill(0, $n1, 0)) . "]<br>";
echo "nums2 = [" . implode(", ", $nums2_test1) . "]<br>";
echo "m = $m1, n = $n1<br><br>";

merge($nums1_test1, $m1, $nums2_test1, $n1);
echo "After merge:<br>";
echo "Result: [" . implode(", ", $nums1_test1) . "]<br><br>";

// Test Case 2
echo "<h3>Test Case 2:</h3>";
$m2 = count($test2_nums1_values);
$n2 = count($test2_nums2_values);
$nums1_test2 = array_merge($test2_nums1_values, array_fill(0, $n2, 0));
$nums2_test2 = $test2_nums2_values;

echo "Before merge:<br>";
echo "nums1 = [" . implode(", ", array_slice($nums1_test2, 0, $m2)) . ", " . implode(", ", array_fill(0, $n2, 0)) . "]<br>";
echo "nums2 = [" . implode(", ", $nums2_test2) . "]<br>";
echo "m = $m2, n = $n2<br><br>";

merge($nums1_test2, $m2, $nums2_test2, $n2);
echo "After merge:<br>";
echo "Result: [" . implode(", ", $nums1_test2) . "]<br><br>";

// Test Case 3
echo "<h3>Test Case 3:</h3>";
$m3 = count($test3_nums1_values);
$n3 = count($test3_nums2_values);
$nums1_test3 = array_merge($test3_nums1_values, array_fill(0, $n3, 0));
$nums2_test3 = $test3_nums2_values;

echo "Before merge:<br>";
if ($m3 == 0) {
    echo "nums1 = [" . implode(", ", array_fill(0, $n3, 0)) . "] (m = 0, so all zeros)<br>";
} else {
    echo "nums1 = [" . implode(", ", array_slice($nums1_test3, 0, $m3)) . ", " . implode(", ", array_fill(0, $n3, 0)) . "]<br>";
}
echo "nums2 = [" . implode(", ", $nums2_test3) . "]<br>";
echo "m = $m3, n = $n3<br><br>";

merge($nums1_test3, $m3, $nums2_test3, $n3);
echo "After merge:<br>";
echo "Result: [" . implode(", ", $nums1_test3) . "]<br><br>";

echo "<div style='border: 1px solid #333; padding: 15px; background-color: #f0f0f0; margin: 20px 0;'>";
echo "<h3>How to modify test cases:</h3>";
echo "<p><strong>Step 1:</strong> Find the section marked 'MODIFY THESE VALUES' at the top</p>";
echo "<p><strong>Step 2:</strong> Change the values in the arrays:</p>";
echo "<ul>";
echo "<li><code>\$test1_nums1_values</code> - The actual numbers in the first array</li>";
echo "<li><code>\$test1_nums2_values</code> - The numbers in the second array</li>";
echo "</ul>";
echo "<p><strong>Example:</strong> To test [1,3,5] and [2,4,6], change:<br>";
echo "<code>\$test1_nums1_values = [1, 3, 5];<br>";
echo "\$test1_nums2_values = [2, 4, 6];</code></p>";
echo "</div>";
?>