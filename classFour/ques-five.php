<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
table, th, td {
  border:1px solid black;
  margin: 0 auto;
}
</style>

</head>
<body>
    
<?php

    /*

    Question 05: 

		You have an array of your purchased product items. 

        ['apple', 'orange', 'banana', 'mango']

        Show all products as a table list.

        Output should like that: “sl- 1 and product - apple”

    */

    $products = ['apple', 'orange', 'banana', 'mango'];

    foreach($products as $index =>$value){
        $index++;
        echo "sl- $index and product - $value";
        echo "<br>";
    }

 

?>

<!-- sovlved above now Added some HTML to make it more realistic -->

<table style="width:50%">
  <tr>
    <th>SL</th>
    <th>Products</th>

    <?php 
        foreach($products as $index =>$value){
            $index++;
            ?>
    </tr>
    <tr>
        <td> <?php echo $index ?></td>
        <td><?php echo $value ?></td>
    </tr>
  
    <?php } ?>


</table>


</body>
</html>