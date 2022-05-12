<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Onpage php -->

    <?php

    /**
     * Validate message
     * custome function
     */

    function validate($message, $alertType="danger"){
      return "<div class=\"alert alert-{$alertType} alert-dismissible fade show\" role=\"alert\">
                    {$message}!
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>";
    }


    /**
     * 
     * Validate email valid or not!
     * 
     */


     function validateEmail($email){
         if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
         } else {
             return false;
         }
     }


    if (isset($_POST['submitBtn'])) {
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pasword =  $_POST['pasword'];


        if (empty($userName) || empty($email) || empty($phone) || empty($pasword)) {
            $validationMsg = validate('All field are required');
        } elseif(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
            $validationMsg = validate('Email is not valid', 'warning');
        } else {
            $validationMsg = validate('Thank you submission successfull', 'success');
        }
    }
    ?>

    <!-- Onpage php -->


    <div class="section form">
        <div class="container">

            <?php
                if(isset($validationMsg)){
                    echo $validationMsg;
                }

            ?>

            <div class="form__wrapper">

                <form method="POST" action="">

                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input type="name" name="userName" class="form-control" id="exampleInputName" placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPhone">Phone</label>
                        <input type="tel" name="phone" class="form-control" id="exampleInputPhon" aria-describedby="emailHelp" placeholder="Enter Phone">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="pasword" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <button type="submit" name="submitBtn" class="btn btn-primary">Submit</button>
                </form>

            </div>

        </div>
    </div>




    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>