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



    $nums_list = [12, 34, 2, 6, 78]; // This is a indexed array

    

    foreach($nums_list as $number){
        $is_prime = true;
        
    for($i = 2; $i <= $number -1; $i++){
        if($number % $i == 0){
            $is_prime = false;
        }
    }

    if($is_prime){
        echo "{$number} is a prime number <br>";
    } else {
        echo "{$number} is not a prime number <br>";
    }

}
?>
    

</body>

</html>