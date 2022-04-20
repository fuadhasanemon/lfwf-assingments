<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic card</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>


    <?php 


    /*

    Question 02:

		Let’s make a website which only contains our teams section.

        Now create an array of our teams at least three elements and make the our team section dynamic using php.

       ** Make an array of our teams including image

       ** Make a section of our team by using html css

       ** And dynamic the section by php

    */




        $ourTeam = [

            [
                'image' => 'hacker.png',

                'name' => 'Fuad Hasan',

                'designation' => 'Software Engineer',

                'socials' => [

                    'facebook.com', 'linkedin.com', 'github.com'

                ],

                'social_icons' => [

                    'bi bi-facebook', 'bi bi-linkedin', 'bi bi-github'

                ]

            ],

            [
                'image' => 'delivery-boy.png',

                'name' => 'Siam Sheikh',

                'designation' => 'Copywriter',

                'socials' => [

                    'facebook.com', 'linkedin.com', 'github.com'

                ],

                'social_icons' => [

                    'bi bi-facebook', 'bi bi-linkedin', 'bi bi-github'

                ]

            ],

            [
                'image' => 'woman.png',

                'name' => 'Sonia Akhter',

                'designation' => 'SQA',

                'socials' => [

                    'facebook.com', 'linkedin.com', 'github.com'

                ],

                'social_icons' => [

                    'bi bi-facebook', 'bi bi-linkedin', 'bi bi-github'

                ]

            ],


            ];



    ?>

    <div class="section cards py-5">


        <div class="container">

            <div class="row">
            <h1 class="py-5">Our Team</h1>

            <?php foreach($ourTeam as $teamMember){ ?>

                <div class="col-sm-4">
                    <div class="card" >
                        <img src="imgs/<?php echo $teamMember['image']; ?>" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $teamMember['name']; ?></h5>
                            <p class="card-text"><?php echo $teamMember['designation']; ?></p>

                            

                                

                                    <div class="socials">
                                    
                                        <ul>
                                        <?php foreach(array_combine($teamMember['socials'], $teamMember['social_icons']) as $socials => $icons){ ?>
                                               

                                            
                                                    <li><a href="<?php echo $socials ; ?>"><i class="<?php echo $icons; ?>"></i></a></li>
                                              
                                                
                                            <?php }; ?>
                                        </ul>
                                        
                                       
                                    </div>

                                

                            
                        </div>
                    </div>
                </div>

            <?php } ?>
            </div>

        </div>


    </div>





    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>