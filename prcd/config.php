<?php

require_once "stripe-php-12beta/init.php";
 
$stripe = array(
    'secret_key' => 'sk_test_51NUJBsLW97G0onMCuhaetVzs75h33CYJosifzV9G6l2SbzWnCBCAHul8w4XoPo5ASrCDVsl57M1oE2cMokSS8NDy00MDmRiCpS',
    'publishable_key' => 'pk_test_51NUJBsLW97G0onMCGEvK3Sd1BIADMp0jn7EWD3NE4olfQCkrxVxAwW2LKAa7MrKIOIwL3ftR86h5nAyhlx2lhTOp00Z6DruQr5',
);
 
\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>