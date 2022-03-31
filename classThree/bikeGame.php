<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Game</title>
</head>
<body>

    <?php

        // Let’s make a game with your bike… You are riding a bike, your bike has some functionalities, these are… start, stop, break, gear, signal, headlight. 

        // When you click on the power/start button, your bike takes a start, 

        // When you click stop, your bike takes a stop, 

        // When you press the break, your bike take break, 

        // when you give the gear, your bike move faster and faster, 

        // when you press the signal button, your bike shows a signal light.

        // When you press the headlight button, your bike’s headlight will start.


        $bike = "stop";

        switch ($bike) {
            case "start":
              echo "Bike Started";
              break;
            case "stop":
              echo "Bike Stoped";
              break;
            case "break":
              echo "Bike Breaked";
              break;
            case "gear":
                echo "Bike move faster";
                break;
            case "signal":
                echo "Bike’s signal light on";
                break;
            case "headlight":
                echo "Bike’s headlight on";
                break;
            default:
              echo "Input NULL";
          }


    ?>
    
</body>
</html>