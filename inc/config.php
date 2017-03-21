<?php
//Instagram Credentials
define('YOUR_APP_KEY', '5ae92a16928d4f27b80ebfecdb187db3'); 
define('YOUR_APP_SECRET', '09fbf93be7c041a1b5b9637db3bcd254'); 
define('YOUR_APP_CALLBACK', 'http://localhost/lokai/index.php');
//Twitter Credentials
define('CONSUMER_KEY', 'snVXfducQhBrmf15WazJSX9V3');
define('CONSUMER_SECRET', 'e98XqtHc1i8zqDta3SwKasw2u5GdtpkYl8aEwKi3IJkHK2z5iB');
define('OAUTH_CALLBACK', 'http://localhost/lokai/process.php');

//Stripe Keys
define('STRIPE_PUBLISH_KEY_TEST', "pk_test_jAsIEZolIeFb5ZRDTeUnYBm6");
define('STRIPE_API_KEY_TEST', "sk_test_9aXVpcB8yLwoGo6rh5Ab1eeA");
define('STRIPE_PUBLISH_KEY', "pk_live_hzCUoQJlCpzSkyXq2xXdM61L");
define('STRIPE_API_KEY', "sk_live_2nfecV9c5a7JMGPGBW3os6Qx");

//Basic Config
define('HOME_URL', "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
define('PRICE', 250);
define('VAT', 0);
define('SHIPPING', 250);

