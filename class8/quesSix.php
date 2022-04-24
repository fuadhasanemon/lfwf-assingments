<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency converter</title>
</head>
<body>

    <?php

        // Create a currency converter function from taka to USD, CAD, POUND, EURO etc


        function currencyConverterUsd($taka){
            
                $USD = $taka * 86.46;
                return $taka . " Tk = " . $USD . " USD";
        
        }

        function currencyConverterCad($taka){
      
            $CAD = $taka * 68.02;
            return $taka . " Tk = " . $CAD . " CAD";
        }

        function currencyConverterPound($taka){
      
            $POUND = $taka * 111.01;
            return $taka . " Tk = " . $POUND . " Pound";
        }

        function currencyConverterEuro($taka){
      
            $EURO = $taka * 111.01;
            return $taka . " Tk = " . $EURO . " Euro";
        }


        echo currencyConverterUsd(10);
        echo "<br>";
        echo currencyConverterCad(10);
        echo "<br>";
        echo currencyConverterPound(10);
        echo "<br>";
        echo currencyConverterEuro(10);

    ?>
    
</body>
</html>