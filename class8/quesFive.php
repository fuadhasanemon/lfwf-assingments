<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI function</title>
</head>
<body>
    
    <?php 

        // Create a BMI function for health
        // A BMI of 25.0 or more is overweight, while the healthy range is 18.5 to 24.9

        // $bmi = 0;

        function bmiCalculator($weight, $height) {
            $bmi = $weight / pow($height, 2) ;
            $bmi = round($bmi, 2);
            
            if ($bmi <= 18.5){
                echo "Your Body Mass Index is {$bmi} . This is considered severely underweight." ;
            } else if ($bmi > 18.5 AND $bmi <= 24.9) {
                echo "Your Body Mass Index is {$bmi} . This is considered Normal." ;
            } else if ($bmi > 25) {
                echo "Your Body Mass Index is {$bmi} . This is considered Overweight." ;
            }
            
        }

       

        bmiCalculator(90, 6);

        

    ?>


</body>
</html>