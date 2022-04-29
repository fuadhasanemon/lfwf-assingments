<?php 

// echo "<pre>";
// print_r($_POST);

$userName = $_POST[userName];
$email = $_POST[email];
$phone = $_POST[phone];
$pasword =  $_POST[pasword];


if ($userName == "" || $email == "" || $phone == "" || $pasword == "") {
    echo "All field reqired";
} else {
    echo "thank you";
}


?>