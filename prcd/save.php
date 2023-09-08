<?php
include('qc.php');

date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');

$date = $_POST['scheduleDate'];
$hour = $_POST['scheduleTime'];
$scheduleSkill = $_POST['scheduleSkill'];
$scheduleLocation = $_POST['scheduleLocation'];
$addressHome = $_POST['addressHome'];

$last = $_POST['lastName'];
$first = $_POST['firstName'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$guardianName = $_POST['guardianName'];
$guardianTelephone = $_POST['guardianTelephone'];

// $card = $_POST['card']; //débito o crédito
// $ccname = $_POST['ccname']; //nombre en la tarjeta
// $ccnumber = $_POST['ccnumber']; //número en la cc
// $ccexpiration = $_POST['ccexpiration']; // expira cc
// $cccvv = $_POST['cccvv']; // dig

$costo = 48.2;
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

    if($resultado){   
        echo json_encode(array('success' => 1));
    }
    else{
        echo json_encode(array('success' => 0));
    }
    

function envioMail($cadena){

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'email/prcd/email/Exception.php';
    require 'email/prcd/email/PHPMailer.php';
    require 'email/prcd/email/SMTP.php';

    // email
    $mail = new PHPMailer(true);

    try {

        //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    //$mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->Host = 'mailc76.carrierzone.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username = 'injuventud@zacatecas.gob.mx';                     // SMTP username
    $mail->Password = 'A61q%9zev%z!W';                               // SMTP password
    $mail->SMTPSecure = 'SSL';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to 587 465
    
        //Recipients
        $mail->setFrom('injuventud@zacatecas.gob.mx', 'PREMIO ESTATAL DE LA JUVENTUD 2023 - INJUVENTUD');
        $mail->addAddress($email, $nombre);     // Add a recipient
    
        // Content
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';                                  // Set email format to HTML
        $mail->Subject = 'Registro exitoso';
        $mail->Body    = '<p>Te has registrado exitosamente a la plataforma del Premio Estatal de la Juventud 2023.</p>
        
        <p><strong>Usuario:</strong> '.$email.'</p>
       
        <p><strong>Contraseña:</strong> '.$pwd.'</p>
        
        <p><strong>Atentamente</strong></p>
        INSTITUTO DE LA JUVENTUD DEL ESTADO DE ZACATECAS';
        $mail->AltBody = 'Mensaje registro';
    
        $mail->send();

        

    }catch (Exception $e) {
        echo "
       
        Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }  

}


?>
