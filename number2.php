<?php
function lol(array $array1, array $array2): string {
    // Filter out placeholder zeros from the first array to get the actual elements
    $first = array_values(array_filter($array1, function($v) { return $v !== 0; }));
    $second = array_values($array2);

    // (both inputs are assumed sorted)
    $i = 0; $j = 0;
    $merged = [];
    while ($i < count($first) || $j < count($second)) {
        if ($i < count($first) && ($j >= count($second) || $first[$i] <= $second[$j])) {
            $merged[] = ['value' => $first[$i], 'from' => 1];
            $i++;
        } else {
            $merged[] = ['value' => $second[$j], 'from' => 2];
            $j++;
        }
    }

    // output string, underlining values that came from the first array
    $parts = [];
    foreach ($merged as $entry) {
        $val = $entry['value'];
        $parts[] = $entry['from'] === 1 ? "<u>{$val}</u>" : (string)$val;
    }

    return '[' . implode(', ', $parts) . ']';
}

echo "Example 1:<br>";
$num1 = [1,2,3,0,0,0];
$num2 = [2,5,6];
echo "nums1 = [" . implode(", ", $num1) . "]<br>";
echo "nums2 = [" . implode(", ", $num2) . "]<br>";
$out1 = lol($num1, $num2);
echo "output: " . $out1 . "<br>";

// Explanation (show the first m elements from nums1 by ignoring placeholder zeros)

function visibleFirst(array $arr): array {
    return array_values(array_filter($arr, fn($v) => $v !== 0));
}
echo "Explanation: The arrays we are merging are " . '[' . implode(',', visibleFirst($num1)) . '] and [' . implode(',', $num2) . '].<br>';
echo "The result of the merge is " . $out1 . " with the underlined elements coming from nums1.<br><br>";

echo "Example 2:<br>";
$num1b = [1];
$num2b = [];
echo "nums1 = [" . implode(", ", $num1b) . "]<br>";
echo "nums2 = [" . implode(", ", $num2b) . "]<br>";
$out2 = lol($num1b, $num2b);
echo "output: " . $out2 . "<br>";
echo "Explanation: The arrays we are merging are [" . implode(',', visibleFirst($num1b)) . "] and [" . implode(',', $num2b) . "].<br>";
echo "The result of the merge is " . $out2 . ".<br><br>";

echo "Example 3:<br>";
$num1c = [0];
$num2c = [1];
echo "nums1 = [" . implode(", ", $num1c) . "]<br>";
echo "nums2 = [" . implode(", ", $num2c) . "]<br>";
$out3 = lol($num1c, $num2c);
echo "output: " . $out3 . "<br>";
echo "Explanation: The arrays we are merging are [" . implode(',', visibleFirst($num1c)) . "] and [" . implode(',', $num2c) . "].<br>";
echo "The result of the merge is " . $out3 . ".<br>";
echo "Note that because m = 0, there are no elements in nums1. The 0 is only there to ensure the merge result can fit in nums1.<br>";

?>