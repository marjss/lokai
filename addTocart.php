<?php
require_once 'header.php';

if(isset($_POST['add']) && !empty($_POST['add'])){
   
        
        if(isset($_SESSION['cart'])){
            $_SESSION['cart']['qty'] = $_POST['add'];
            $_SESSION['cart']['price'] = PRICE * $_SESSION['cart']['qty'];
            $_SESSION['cart']['vat'] = VAT;
            $_SESSION['cart']['shipping'] = SHIPPING;
            $_SESSION['cart']['gtotal'] = $_SESSION['cart']['price']+VAT+$_SESSION['cart']['shipping'];
            $_SESSION['cart']['status'] = true;
        } else {
            $_SESSION['cart'] = array();
            $_SESSION['cart']['qty'] = $_POST['add'];
            $_SESSION['cart']['price'] = PRICE;
            $_SESSION['cart']['vat'] = VAT;
            $_SESSION['cart']['shipping'] = SHIPPING;
            $_SESSION['cart']['gtotal'] = $_SESSION['cart']['price']+VAT+$_SESSION['cart']['shipping'];
            $_SESSION['cart']['status'] = true;
        }
        $return = json_encode($_SESSION['cart']);
        echo $return;
        die;
    }
if(isset($_POST['show']) && !empty($_POST['show'])){
    
        if(isset($_SESSION['cart'])){
//            $_SESSION['cart']['qty'] = $_POST['add'];
//            $_SESSION['cart']['price'] = PRICE * $_SESSION['cart']['qty'];
//            $_SESSION['cart']['vat'] = VAT;
//            $_SESSION['cart']['shipping'] = SHIPPING;
//            $_SESSION['cart']['gtotal'] = $_SESSION['cart']['price']+VAT+$_SESSION['cart']['shipping'];
            $_SESSION['cart']['status'] = true;
        } else {
            $_SESSION['cart'] = array();
        }
        $return = json_encode($_SESSION['cart']);
        echo $return;
        die;
    }
if(isset($_POST['add']) && $_POST['add'] == 0){
       
        $_SESSION['cart'] = array();
        $_SESSION['cart']['qty'] = 0;
         $_SESSION['cart']['status'] = true;
        $return = json_encode($_SESSION['cart']);
        echo $return;
        die;
    }
  

