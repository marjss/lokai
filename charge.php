<?php
require_once 'header.php';
require_once 'stripe-php/init.php';
// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey(STRIPE_API_KEY_TEST);

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

// Create a charge: this will charge the user's card
try {
    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
        $amount = $_SESSION['cart']['gtotal']*100;
        $charge = \Stripe\Charge::create(array(
        "amount" => $amount, // Amount in cents
        "currency" => "usd",
        "source" => $token,
        "description" => "America Element payment"
        ));
//        $_SESSION['cart'] = array();
        header("Location:index.php");
    }
  
} catch(\Stripe\Error\Card $e) {
  // The card has been declined
}
