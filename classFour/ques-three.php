<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>


<?php 


/*

Question 03: 

    Factorial - I think everyone knows the word. Factorial of 4 is given below:

    4! = 4*3*2*1 = 24

    6! = 6*5*4*3*2*1 = 720  

    So let’s calculate the factorial of 7.


*/

$num = 7;
$factorial = 1;

for($i=$num; $i >= 1; $i--){
    $factorial = $factorial * $i;

}
echo $factorial;

?>



    
</body>
</html>