```php
function processData(array $data): array {
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $data[$key] = processData($value); // Recursive call
        } else if (is_string($value)) {
            $data[$key] = strtoupper($value); //This line is the problem
        } else if ($value === null) {
            $data[$key] = null; // Handle null values
        } else if (is_numeric($value)) {
            $data[$key] = $value; // Keep numeric values
        } else if (is_bool($value)) {
            $data[$key] = $value; // Keep boolean values
        } else {
            $data[$key] = (string)$value; // Cast other types to string
            //Consider logging or throwing exception for other unexpected types
            // error_log("Unexpected data type in processData: " . gettype($value));
        }
    }
    return $data;
}

$myData = [
    'name' => 'John Doe',
    'address' => [
        'street' => '123 Main St',
        'city' => 'Anytown',
    ],
    'age' => 30,
    'active' => true,
    'data' => null,
];

$processedData = processData($myData);
print_r($processedData);
```