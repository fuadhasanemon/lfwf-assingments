<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA function</title>
</head>
<body>

    <?php 

        // GPA function for result publishing

        function resultPublishing($SubjectA, $SubjectB, $SubjectC, $SubjectD) {
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
        }

        resultPublishing(80, 90, 88, 90);

        
    ?>
    
</body>
</html>