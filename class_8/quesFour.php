<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age calculator</title>
</head>
<body>
    
    <?php

        // Create an age calculator function

        
        function ageCalculator($birthDate) {

            $currentDate = date("d-m-Y");

            $age = date_diff(date_create($birthDate), date_create($currentDate));

            return "Current age is : " . $age->format("%y Years %m months %d days");

        }

        echo ageCalculator("06-12-1997");

        

    ?>

</body>
</html>