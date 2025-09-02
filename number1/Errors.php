<?php
// Example: avoid undefined constant by using a properly initialized variable
$someCondition = true; // toggle to true/false to test

echo "<strong>Throw example</strong><br>\n";
try {
  if ($someCondition) {
    throw new Exception('Data format error');
  }
  echo "No exception thrown.<br>\n";
} catch (Exception $e) {
  echo 'Caught: ' . $e->getMessage() . "<br>\n";
}

// Demonstrate a safe DB check with a small dummy class
class DummyDB {
  public function checkData($data) {
    if (empty($data['id'] ?? null)) {
      throw new Exception('Missing id in data');
    }
    return true;
  }
}

echo "<br><strong>DB check example</strong><br>\n";
$db = new DummyDB();
$data = []; // empty data will trigger the exception
try {
  $db->checkData($data);
  echo "DB check passed<br>\n";
} catch (Exception $e) {
  echo 'Caught: ' . $e->getMessage() . "<br>\n";
}

?>