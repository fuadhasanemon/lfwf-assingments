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

        // Create a function that will return children, teenagers, young people, old people from the age

        $age = 0;

        function ageDetector($age){
            if ($age <= 12) {
                echo "children";
            } elseif ($age >= 13 && $age <= 19)  {
                echo "teenagers";
            } elseif ($age >= 20 && $age <= 40)  {
                echo "young people";
            } else {
                echo "old people";
            }

            return $age;
        }

        ageDetector(70);
        echo "<br>";
        ageDetector(30);


    ?>

</body>
</html>