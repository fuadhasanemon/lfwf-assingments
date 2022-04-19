<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exam Question</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

            'question' => 'What is loream ipsum 1?',

            'options' => [

                'ans5', 'ans2', 'ans3', 'ans4'

            ]

        ],

        [

            'question' => 'What is loream ipsum 2?',

            'options' => [

                'ans1', 'ans2', 'ans3', 'ans4'

            ]

        ],

        [

            'question' => 'What is loream ipsum 3?',

            'options' => [

                'ans1', 'ans2', 'ans3', 'ans4'

            ]

        ]

    ];

    shuffle($questionSet);

    ?>


    <section class="quesSet">

        <div class="container">
            <h2 class="py-5">MCQ questions</h2>

            

            <?php foreach($questionSet as $singleQuestion){ ?>

                <?php  ?>
                

            <div class="quesSet__question">
                
                <h3><?php echo $singleQuestion['question'] ; ?></h3>


                <?php foreach($singleQuestion['options'] as $ans){ ?>  

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <?php echo $ans ; ?>
                        </label>
                    </div>

                <?php } ?>

            </div>

            <?php } ?>

        </div>
    </section>


    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>