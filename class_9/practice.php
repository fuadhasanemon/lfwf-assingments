<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class practice</title>
</head>
<body>

    <?php


        // isset

        // $name;
        // $name = " ";

        // if(isset($name)){
        //     echo "kichu ache";
        // } else {
        //     echo "kichu nai";
        // }

        // empty

        // $name = " ";
        // if(empty($name)){
        //     echo "yes";
        // } else {
        //     echo "not";
        // }

        
        // echo "My name is fuad 1";
        // echo "<br>";
        // echo "My name is fuad 2";
        // echo "<br>";
        // echo "My name is fuad 3";
        // echo "<br>";
        // echo "My name is fuad 4";
        // echo "<br>";
        // die("end");
        // echo "My name is fuad 5";
        // echo "<br>";
        // echo "My name is fuad 6";
        // echo "<br>";
        // echo "My name is fuad 7";


        // Array variable

        // $name[] = "Fuad";
        // $name[] = "Hasan";
        // $name[] = "Emon";
        
        // echo "<pre>";
        // print_r($name);


        // Associative Array variable

        // $name['firstName'] = "Fuad";
        // $name['middleName'] = "Hasan";
        // $name['lastName'] = "Emon";
        
        // echo "<pre>";
        // print_r($name);

        function insert() {
            $output = [];

            if(1 > 0) {
                $output["message"] = "Succeseull";
                $output["status"] = 1;

            } else {
                $output["message"] = "Faild";
                $output["status"] = 0;
            }
            return $output;
        }

        echo "<pre>";
        print_r(insert());


    ?>
    
</body>
</html>