<?php
require_once('stripe-php/init.php');

\Stripe\Stripe::setApiKey('sk_test_51NUJBsLW97G0onMCuhaetVzs75h33CYJosifzV9G6l2SbzWnCBCAHul8w4XoPo5ASrCDVsl57M1oE2cMokSS8NDy00MDmRiCpS');

header('Content-Type: application/json');

try {
    $input = file_get_contents('php://input');
    $data = json_decode($input);

    $token = $data->token;

    // Crea una carga en Stripe.
    $charge = \Stripe\Charge::create([
        'amount' => 1000, // El monto del pago en centavos.
        'currency' => 'usd',
        'source' => $token,
        'description' => 'Pago de ejemplo natatorial',
    ]);

    echo json_encode(['success' => true, 'chargeId' => $charge->id]);
} catch (\Stripe\Exception\CardException $e) {
    http_response_code(400);
    echo json_encode(['error' => $e->getMessage()]);
}
?>
