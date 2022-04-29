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

        // Create a function that will return the area of a rectangle, square, triangle

        

        function areaOfRectangle($height, $width){
            $areaOfRectangle = $height * $width;
            return $areaOfRectangle;
        }

        function areaOfSquare($side){
            $areaOfSquare = $side * $side;
            return $areaOfSquare;
        }

        function areaOfTriangle($base, $height){
            $areaOfTriangle = ($base * $height) / 2 ; 
            return $areaOfTriangle;
        }


        echo "The area of a rectangle : " . areaOfRectangle(3,2);
        echo ("<br>");
        echo "The area of a square : " . areaOfSquare(20);
        echo ("<br>");
        echo "The area of a triangle : " . areaOfTriangle(20, 22);



    ?>


</body>
</html>