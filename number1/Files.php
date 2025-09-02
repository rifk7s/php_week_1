<?php
// base directory
$current_dir = __DIR__;

// posts folder and file
$posts_dir = $current_dir . '/posts';
$post_file = $posts_dir . '/first.txt';

if (!is_dir($posts_dir)) {
  mkdir($posts_dir, 0755, true);
}

if (file_exists($post_file)) {
  echo "Found post file:<br>\n";
  echo nl2br(file_get_contents($post_file));
} else {
  $sample = "Sample post\nCreated: " . date('Y-m-d H:i:s');
  file_put_contents($post_file, $sample);
  echo "Created sample post file at posts/first.txt<br>\n";
}

// Read or create a test file, then output lines
$test_file = $current_dir . '/test.txt';
if (!file_exists($test_file)) {
  file_put_contents($test_file, "Line 1\nLine 2\nLine 3\n");
}

$f = fopen($test_file, 'r');
echo "<br>Contents of test.txt:<br>\n";
while (!feof($f)) {
  $line = fgets($f);
  if ($line !== false) echo htmlspecialchars($line) . "<br>\n";
}
fclose($f);

// CSV example: write rows and ensure header is written once
$csv_file = $current_dir . '/export.csv';
$rows = [
  ['name' => 'Mike', 'age' => 45],
  ['name' => 'Jane', 'age' => 30],
];

$handle = fopen($csv_file, 'a');
// write header if file is empty
if (filesize($csv_file) === 0) {
  fputcsv($handle, array_keys($rows[0]));
}
foreach ($rows as $row) {
  fputcsv($handle, array_values($row));
}
fclose($handle);
echo "<br>Wrote " . count($rows) . " rows to export.csv<br>\n";

?>