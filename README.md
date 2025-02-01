# PHP Recursive Array Processing Bug

This repository demonstrates an uncommon bug in a PHP function designed to recursively process nested arrays. The function intends to convert all string values to uppercase, however, it does not handle non-string values gracefully, leading to potential errors or unexpected results.

## Bug Description

The `processData` function processes nested arrays recursively. While it successfully handles string conversion, it lacks error handling and type checking for non-string values. This can lead to issues such as warnings, unexpected outputs, or even silent failures.

## Solution

The solution addresses these problems by adding appropriate type checks and handling for non-string values, making the function more robust and reliable.

## How to reproduce

1. Clone this repository.
2. Navigate to the repository directory.
3. Run the `bug.php` file using a PHP interpreter. Observe the output.
4. Run the `bugSolution.php` file. Compare the outputs of both files to see the difference.
