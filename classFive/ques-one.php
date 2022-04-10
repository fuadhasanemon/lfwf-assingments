<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Numbers</title>
</head>
<body>


<?php 


// Question 01: 

// We have an array [12,34,2,6,78]. What kind of array is this? Find all prime numbers from this array.

// Step 1: First let us find the factors of the given number( factors are the number that completely divides the given number)

// Step 2: Then check the total number of factors of that number

// Step 3: Hence, If the total number of factors is more than two, it is not a prime number but a composite number. 
// Because When a number is divisible by only one and itself, then it is a prime number.


$prime__num = [12,34,2,6,78]; // This is a indexed array

foreach( $prime__num as $prime){
    if ($prime % 2 == 0){
        echo "<pre>";
       print_r($prime);
    }
}



?>
    
</body>
</html>