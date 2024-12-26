```php
function calculate_average(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array
  }

  $sum = array_sum($numbers);
  if ($sum === 0) {
    return 0.0; // Handle sum of zeros
  }

  $count = count($numbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; // Output: 15

$numbers = [0, 0, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; // Output: 0
```