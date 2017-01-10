<?php
require_once 'header.php';

$email = $_POST['email'];

if(isset($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
    $user = new Users();
    $otp = $user->getOTP($email);
    if(isset($otp) && $otp !=FALSE){
        $_SESSION['otp'] = $otp;
        $_SESSION['email'] = $email;
        echo 'true';
        die();
    } else {
       echo 'false';
       die();
    }
} else {
    header("Location:index.php");
}

