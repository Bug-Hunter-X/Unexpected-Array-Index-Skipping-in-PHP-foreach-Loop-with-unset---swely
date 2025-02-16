function foo(array $arr) {
  // Iterate in reverse to avoid skipping elements
  for ($i = count($arr) - 1; $i >= 0; $i--) {
    if ($arr[$i] === 'a') {
      unset($arr[$i]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'a', 'c'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [3] => c )

// Alternative solution using array_filter
function bar(array $arr) {
  return array_filter($arr, function ($value) {
    return $value !== 'a';
  });
}

$arr = ['a', 'b', 'a', 'c'];
$result = bar($arr);
print_r($result); // Output: Array ( [1] => b [3] => c )