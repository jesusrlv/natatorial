<?php
include('qc.php');
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

$card = $_POST['card'];
$ccname = $_POST['ccname'];
$ccnumber = $_POST['ccnumber'];
$ccexpiration = $_POST['ccexpiration'];
$cccvv = $_POST['cccvv'];

$fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
$annio = substr($fecha_sistema, 0, 4);
$mes = substr($fecha_sistema, 5, 2); 


    $sql = "INSERT INTO agenda(
        fecha_reserva,
        hora,
        apellido,
        nombre,
        email,
        domicilio,
        ruta
        ) 
        VALUES
        (
            '$date',
            '$hour',
            '$last',
            '$first',
            '$email',
            '$address',
            '$ruta'
            )";
    $resultado= $conn->query($sql);
    
    
} else {
    echo "move_uploaded_file function failed";
}
?>
