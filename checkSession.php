<?php
require_once 'header.php';
$return = array($_SESSION['cart']['status'] => false);
 if(isset($_SESSION['user']->access_token) && !empty($_SESSION['user'])) {
      $_SESSION['cart']['status'] = true;
     $return = json_encode($_SESSION['cart']);
        echo $return;
 }
 if(isset($_SESSION['email'])){
      $_SESSION['cart']['status'] = true;
     $return = json_encode($_SESSION['cart']);
     echo $return;
 }
 if(isset($_SESSION['status']) && $_SESSION['status'] == 'verified'){
      $_SESSION['cart']['status'] = true;
     $return = json_encode($_SESSION['cart']);
     echo $return;
 }

