<?php
include('qc.php');
include('config.php'); //stripe
date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');

$date = $_POST['scheduleDate'];
$hour = $_POST['scheduleTime'];
$scheduleSkill = $_POST['scheduleSkill'];
$scheduleLocation = $_POST['scheduleLocation'];
$addressHome = $_POST['addressHome'];

$last = $_POST['lastname'];
$first = $_POST['firtsname'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$guardianName = $_POST['guardianName'];
$guardianTelephone = $_POST['guardianTelephone'];

$card = $_POST['card']; //débito o crédito
$ccname = $_POST['ccname']; //nombre en la tarjeta
$ccnumber = $_POST['ccnumber']; //número en la cc
$ccexpiration = $_POST['ccexpiration']; // expira cc
$cccvv = $_POST['cccvv']; // dig

$costo = 45;
$descripcion = 'Swimming lessons for '.$last.' '.$first;

$fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
$annio = substr($fecha_sistema, 0, 4);
$mes = substr($fecha_sistema, 5, 2); 

function generarCodigo($longitud) {
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    $max = strlen($pattern)-1;
    for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    return $key;
}

$aprobar = 1;
$codigo = generarCodigo(9);
$cadena = 'Nat-'.$codigo.'-'.$mes.$annio;

// stripe
$token = $_POST['stripeToken'];
$complete_name = $last.' '.$first;
$token_card_type = $_POST['stripeTokenType'];

$charge = \Stripe\Charge::create([
    'amount' => str_replace(",","",$costo) * 100,
    'description' => $descripcion,
    'currency' => 'usd',
    'source' => $token,
]);

if($charge){

// stripe

    $sql = "INSERT INTO agenda(
        fecha_reserva,
        hora,
        nivel,
        lugar,
        lugar_otro,
        nombre,
        apellido,
        domicilio,
        email,
        tel1,
        tel2,
        nombre_tutor,
        tel_tutor,
        aprobar,
        id_ext
        ) 
        VALUES
        (
            '$date',
            '$hour',
            '$scheduleSkill',
            '$scheduleLocation',
            '$addressHome',
            '$first',
            '$last',
            '$address',
            '$email',
            '$phone1',
            '$phone2',
            '$guardianName',
            '$guardianTelephone',
            '$aprobar',
            '$cadena'
            )";
    $resultado= $conn->query($sql);

    $sql2 = "INSERT INTO pagos(
        fecha_pago,
        estatus,
        tipo_tarjeta,
        nombre_card,
        num_c,
        cc_expiration,
        id_ext
        ) 
        VALUES
        (
            '$fecha_sistema',
            '$aprobar',
            '$card',
            '$ccname',
            '$ccnumber',
            '$ccexpiration',
            '$cadena'
            )";
    $resultado2 = $conn->query($sql2);



    if($resultado || $resultado2){   
        echo json_encode(array('success' => 1));
    }
    else{
        echo json_encode(array('success' => 0));
    }
    

} 
//fin charge stripe
else{
    echo json_encode(array('success' => 0));
}

?>
