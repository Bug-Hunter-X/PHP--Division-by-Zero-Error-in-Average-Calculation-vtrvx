# PHP: Division by Zero Error in Average Calculation
This repository demonstrates a common error in PHP: division by zero when calculating the average of an array of numbers.  The `calculate_average` function in `bug.php` is susceptible to a division by zero error if the input array contains only zeros or if the sum of the numbers is zero.

The solution in `bugSolution.php` demonstrates how to handle this error gracefully by checking for an empty array or a sum of zero before performing the division.

## How to Run
1. Clone the repository
2. Run the php file using the php interpreter.
3. Observe the output and the error handling.