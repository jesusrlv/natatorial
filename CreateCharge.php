<?php
//   require 'vendor/autoload.php';
require_once "prcd/stripe-php-master/init.php";

  \Stripe\Stripe::setApiKey("sk_test_51NUJBsLW97G0onMCuhaetVzs75h33CYJosifzV9G6l2SbzWnCBCAHul8w4XoPo5ASrCDVsl57M1oE2cMokSS8NDy00MDmRiCpS");

  $amount = (48.2) * 100;
    $cardName = $_POST['ccname'];
    $cardNumber = $_POST['ccnumber'];
    $cardExpiry = str_replace('/', '', $_POST['ccexpiration']);
    $cardCVC = $_POST['cccvv'];

    try {
        $charge = \Stripe\Charge::create([
            'amount' => $amount,
            'currency' => 'usd',
            'source' => [
                'object' => 'card',
                'number' => $cardNumber,
                'exp_month' => substr($cardExpiry, 0, 2),
                'exp_year' => substr($cardExpiry, -2),
                'cvc' => $cardCVC,
            ],
        ]);

        // ... Código para pago exitoso ...
        echo json_encode(array(
            'success' => 1
        ));

    } catch (\Stripe\Exception\CardException $e) {
        // El pago fue rechazado por el banco emisor de la tarjeta, puedes mostrar un mensaje de error o redirigir a una página de error
        echo json_encode(array(
            'success' => 0,
            'error' => $e
        ));

        } catch (Exception $e) {
        // Otros errores en la transacción
        echo json_encode(array(
            'success' => 0,
            'error' => $e
        ));
    }
?>