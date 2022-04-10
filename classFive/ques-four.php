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
        Question 04: 

		Let’s traverse this array(0,10,80,67,60,89,91,56,45,30,95,83,99) 
        and print 0 index then skip 1 index again print 2 skip 3 . . .

    */

    $arr = [0,10,80,67,60,89,91,56,45,30,95,83,99];
    $flag = 0;

    foreach($arr as $array){

        // echo "<pre>";
        // echo $array;

        for($i=2; $i<$arr; $i++){

            if($array % $i == 0){
                $flag = 1;
                break;
            }

        }

        if($flag==0){
            echo "Prime : {$array}";
        } else {
            echo "Not Prime : {$array}";
        }

    }

    // if ($flag == 1){
    //     echo "<pre>";
    //     echo $array;
    // } else {
    //     echo "<pre>";
    //     echo $array;
    // }

?>


</body>
</html>