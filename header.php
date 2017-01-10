<?php

session_start();
require 'inc/instagram.class.php';
require 'inc/config.php';
require_once 'inc/twitteroauth.php';
require_once 'inc/functions.php';

$instagram = new Instagram(array(
    'apiKey' => YOUR_APP_KEY,
    'apiSecret' => YOUR_APP_SECRET,
    'apiCallback' => YOUR_APP_CALLBACK,
    'scope' => 'public_content'
        ));

if (!isset($_SESSION['code'])) {
    $_SESSION['code'] = 0;
}
$loginUrl = $instagram->getLoginUrl();
if (isset($_GET['code']) && $_GET['code'] != $_SESSION['code']) {
    $code = $_GET['code'];
}
if (true === isset($code) && $code != 0) {
    $data = $instagram->getOAuthToken($code);
    $_SESSION['user'] = $data;
    $_SESSION['code'] = $code;
    $db_user = new Users();
    $db_user->checkInstaUser('instagram',$_SESSION['user']->user->id,$_SESSION['user']->user->username,'',$_SESSION['user']->user->full_name,'','',$_SESSION['user']->access_token,'',$_SESSION['user']->user->profile_picture);
    header('Location: index.php');
} else {
    
}?>