<!-- 

Question 01:

Your client said that he needs a dropdown, which contains all days of the running month. 
Sometimes we fill up a registration form that, which date of birth. So find out in google 
(get number of days in specific month php) and do this assignment using a for loop.

Day quantity is not equal for every month. Like as - february - 28, March - 31, april - 30

So days of running month should dynamic (by php build in function) 

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date function (Current dates of month)</title>
</head>
<body>

    <?php

for($i = 1; $i <=  date('t'); $i++)
{
   // add the date to the dates array
   $dates[] = date('F') . " - " . str_pad($i, 2, '0', STR_PAD_LEFT) . " - " . date('Y') ;
}


foreach($dates as $value){
    echo $value;
    echo "<br>";
}

        

    ?>
    
</body>
</html>


