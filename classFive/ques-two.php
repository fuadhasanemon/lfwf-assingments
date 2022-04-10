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
    Question 02: 

	Let’s think about a use case, Daraz admin’s have some products for uploads on their e-commerce site. So make an array of products which contains 5 products.

    Go to daraz website and pick any 5 products and make your array.

    Must mention Which type of array you have made.

    */


    // This is a indexed array

    $products = ["Vivo Y21 4GB/64GB 5000mah Battery", "vivo X70 Pro 12GB/256GB", "vivo V20 8GB/128GB", "Vivo v20se 8GB/128GB", "Vivo Y53S 8Gb/128Gb"];

    foreach($products as $product){
        echo "<pre>";
        echo $product;
    }

    

    ?>


</body>
</html>