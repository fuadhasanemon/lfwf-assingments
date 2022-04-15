<!DOCTYPE html>
<html>
<body>

<?php


$purchased_products = array(

        		array('name' => 'banana', 'qty' => 10, 'total_price' => 550),

        		array('name' => 'apple', 'qty' => 50, 'total_price' => 1500),

        		array('name' => 'orange', 'qty' => 7, 'total_price' => 600),

    	);
        
        $qty_sum = 0;
        $total_price_sum = 0;
        foreach($purchased_products as $key => $values){
        	foreach($values as $key2 => $values2){
        
            if($key2 == 'qty'){
          		
                $qty_sum = $qty_sum + $values2;
            }

            elseif($key2 == 'total_price'){
          		
                    $total_price_sum = $total_price_sum + $values2;
                 }
            
        }
        }

        echo("Total Purchesed Quantity = {$qty_sum} <br>");
        echo("Total Amount = {$total_price_sum} Tk");


?> 

</body>
</html>