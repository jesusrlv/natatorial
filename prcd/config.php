<?php

    // require_once "stripe-php-master/init.php";

    // $stripedetails = array(
    //     "publishabelKey" => "pk_test_51NUJBsLW97G0onMCGEvK3Sd1BIADMp0jn7EWD3NE4olfQCkrxVxAwW2LKAa7MrKIOIwL3ftR86h5nAyhlx2lhTOp00Z6DruQr5",
    //     "secretKey" => "sk_test_51NUJBsLW97G0onMCuhaetVzs75h33CYJosifzV9G6l2SbzWnCBCAHul8w4XoPo5ASrCDVsl57M1oE2cMokSS8NDy00MDmRiCpS"
    // );

    // \Stripe\Stripe::setApiKey($stripedetails['secretKey']);
?>

<?php
require_once "stripe-php-master/init.php";
// Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/apikeys
$stripe = new \Stripe\StripeClient(

    'sk_test_51NUJBsLW97G0onMCuhaetVzs75h33CYJosifzV9G6l2SbzWnCBCAHul8w4XoPo5ASrCDVsl57M1oE2cMokSS8NDy00MDmRiCpS'
    );
    
    $stripe->paymentIntents->create([
      'amount' => 2700,
      'currency' => 'usd',
      'payment_method_types' => ['card'],
      'description' => 'prueba de pago inicial'
    ]);

?>