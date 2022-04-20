<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exam Question</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    /* Let’s make an exam question set (add at list 10 dummy question) like that

        $questionSet = [

        [

            'question' => 'What is loream ipsum?',

            'options' => [

                'ans1', 'ans2', 'ans3', 'ans4'

            ]

        ],

        [

            'question' => 'What is loream ipsum?',

            'options' => [

                'ans1', 'ans2', 'ans3', 'ans4'

            ]

        ],

        [

            'question' => 'What is loream ipsum?',

            'options' => [

                'ans1', 'ans2', 'ans3', 'ans4'

            ]

        ]

        ];

    ** Make a simple exam design using html css

    ** Then make a exam by using these questions

    ** Your questions must be come randomize order */


    $questionSet = [

        [
            'name' => 'question1',

            'question' => '1) HTML stands for -',

            'options' => [

                'HighText Machine Language', 'HyperText and links Markup Language', 'HyperText Markup Language', 'None of these'

            ]

        ],

        [
            'name' => 'question2',

            'question' => '2) The correct sequence of HTML tags for starting a webpage is -',

            'options' => [

                'Head, Title, HTML, body', 'HTML, Body, Title, Head', 'HTML, Head, Title, Body', 'HTML, Head, Title, Body'

            ]

        ],

        [
            'name' => 'question3',

            'question' => '3) Which of the following element is responsible for making the text bold in HTML?',

            'options' => [

                '< pre >', '< a >', '< b >', '< br >'

            ]

        ],

        [
            'name' => 'question4',

            'question' => '4) Which of the following tag is used for inserting the largest heading in HTML?',

            'options' => [

                '< h3 >', '< h1 >', '< h5 >', '< h6 >'

            ]

        ],

        [
            'name' => 'question5',

            'question' => '5) Which of the following tag is used to insert a line-break in HTML?',

            'options' => [

                '< br >', '< a >', '< pre >', '< b >'

            ]

        ],

        [
            'name' => 'question6',

            'question' => '6) How to create an unordered list (a list with the list items in bullets) in HTML?',

            'options' => [

                '< ul >', '< ol >', '< li >', '< i >'

            ]

        ],

        [
            'name' => 'question7',

            'question' => '7) How to create a hyperlink in HTML?',

            'options' => [

                '< a href = "www.javatpoint.com" > javaTpoint.com < / >', '< a url = "www.javatpoint.com" javaTpoint.com / a >', '< a link = "www.javatpoint.com" > javaTpoint.com < / >', '< a > www.javatpoint.com <javaTpoint.com / a >'

            ]

        ],

        [
            'name' => 'question8',

            'question' => '8) How to create an ordered list (a list with the list items in numbers) in HTML?',

            'options' => [

                '< ul >', '< ol >', '< li >', '< i >'

            ]

        ],

        [
            'name' => 'question9',

            'question' => '9) Which of the following element is responsible for making the text italic in HTML?',

            'options' => [

                '< i >', '< italic >', '< it >', '< pre >'

            ]

        ],

        [
            'name' => 'question10',

            'question' => '10) How to insert an image in HTML?',

            'options' => [

                '< img href = "jtp.png" / >', '< img url = "jtp.png" / >', '< img link = "jtp.png" / >', '< img src = "jtp.png" / >'

            ]

        ]

    ];


    ?>


    <section class="quesSet">

        <div class="container">
            <h2 class="py-5">MCQ questions</h2>

            

            <?php foreach($questionSet as $singleQuestion){ ?>        
                <?php shuffle($singleQuestion['options']); ?>

            <div class="quesSet__question">
                
                <h3><?php echo $singleQuestion['question'] ; ?></h3>


                <?php foreach($singleQuestion['options'] as $ans){ ?>  

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="<?php echo $singleQuestion['name'] ; ?>" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <?php echo $ans ; ?>
                        </label>
                    </div>

                <?php } ?>

                <div class="divider py-3">
                    <hr>
                </div>

            </div>

            <?php } ?>

            <div class="submit-btn py-5 text-center">
                <button type="button" class="btn btn-outline-success custome__btn">Submit</button>
            </div>

        </div>
    </section>


    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>