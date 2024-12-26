```php
function calculate_average(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; //This will output 15

$numbers = [10, 20, 30, 0, 0];
$average = calculate_average($numbers); //Division by zero error if 0 is encountered
echo "Average: " . $average; 
```