```php
function processData(array $data): array {
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $data[$key] = processData($value); // Recursive call
        } else if (is_string($value)) {
            // Process strings...  This is where the bug might be
            $data[$key] = strtoupper($value); //This line is the problem
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
];

$processedData = processData($myData);
print_r($processedData);
```