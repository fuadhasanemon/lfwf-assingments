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


        // Question 02: 

        // You have two array of emails, these are given below-

        // $first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 

        // $second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

        // ** You have to make a single array from this two arrays

        // ** And don’t keep any value in multiple time


        $first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 

        $second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

        $margable_array = array_merge($first_email_array, $second_email_array);
        $unique_array = array_unique($margable_array);

        foreach($unique_array as $merged_array){
            echo "{$merged_array } <br>";
        }

    ?>

</body>
</html>