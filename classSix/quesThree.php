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

        $citylist = array( 
        "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", 
        "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", 
        "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" 
        );

        echo "<pre>";
        print_r(array_chunk($citylist, 4));

        

    ?>

</body>
</html>