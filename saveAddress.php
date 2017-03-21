<?php
require_once 'header.php';
echo '<pre>';
print_r($_POST);
echo '</pre>';die;
$otp = $_POST['otp'];

if(isset($otp)){
    $user = new Users();
    
    if(isset($otp) && $otp !=FALSE){
        if($_SESSION['otp'] == $otp){
            
            $db_user = new Users();
            $logged = $db_user->checkOtpUser('otp','',$_SESSION['email'],$_SESSION['email'],'','','',$_SESSION['otp'],'','');
            echo "success";
        } else {
            echo "fail";
        }
        
    }
} else {
    header("Location:index.php");
}

