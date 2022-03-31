<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>
<body>

<?php

// Let’s make a result grade calculator…

// Rishita’s subject marks: SubjectA = 75, SubjectB = 80, SubjectC = 65, SubjectD = 90.

// Result Calculation formula: Sum all subjects marks and divided by total subject quantity. 

// From this given formula, you will get a mark. Show the Grade message by the mark.

// A+ = 80 - 100 

// A   = 70 - 79

// A-  = 60 - 69

// B   = 50 - 59

// C   = 40 - 49

// F   = 01 - 39 

// Firstly you have to calculate the average mark of Rishita.

// Secondly you have to show the grade message (Like as: “You got A+”) by following this grading range.

$SubjectA = 75;
$SubjectB = 80;
$SubjectC = 65;
$SubjectD = 90;

$totalMark = $SubjectA + $SubjectB + $SubjectC + $SubjectD;
$rishitasMark = $totalMark / 4;

if ($rishitasMark <= 100 && $rishitasMark >= 80){
    echo "You got A+";
} elseif($rishitasMark >= 70 && $rishitasMark < 80 ) {
    echo "You got A";
} elseif($rishitasMark >= 60 && $rishitasMark < 70 ) {
    echo "You got A-";
} elseif($rishitasMark >= 50 && $rishitasMark < 60 ) {
    echo "You got B";
} elseif($rishitasMark >= 40 && $rishitasMark < 50 ) {
    echo "You got C";
} else {
    echo "You got F";
}
?>
    
</body>
</html>