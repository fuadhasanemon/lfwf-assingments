<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

    /*
        Question 03: 

		This is an array array(0,10,80,67,60,89,91,56,45,30,95,83,99) 

        Find the maximum value from this array.

        Must use a foreach loop.

    */


    $arr = [0,10,80,67,60,89,91,56,45,30,95,83,99];

    $findMaxValue = max($arr);

    echo "The largest number of this array is : {$findMaxValue}";



?>
    
</body>
</html>