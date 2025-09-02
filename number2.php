<?php

$nums1 = [1, 2, 3, 0, 0, 0];
$m = 3;
$nums2 = [2, 5, 6];
$n = 3;

// Merge nums2 into nums1 from the end
$p1 = $m - 1; // Pointer for last element of initial part of nums1
$p2 = $n - 1; // Pointer for last element of nums2
$p = $m + $n - 1; // Pointer for last element of nums1

while ($p2 >= 0) {
    if ($p1 >= 0 && $nums1[$p1] > $nums2[$p2]) {
        $nums1[$p] = $nums1[$p1];
        $p1--;
    } else {
        $nums1[$p] = $nums2[$p2];
        $p2--;
    }
    $p--;
}

print_r($nums1);

?>