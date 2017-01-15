<?php
require_once 'header.php';

 if(isset($_SESSION['user']->access_token) && !empty($_SESSION['user'])) {
     echo "true";
 }
 if(isset($_SESSION['email'])){
     echo "true";
 }
 if(isset($_SESSION['status']) && $_SESSION['status'] == 'verified'){
     echo "true";
 }

