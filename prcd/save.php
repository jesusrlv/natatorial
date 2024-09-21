<?php
include('qc.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'email/prcd/email/Exception.php';
require 'email/prcd/email/PHPMailer.php';
require 'email/prcd/email/SMTP.php';

date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');

$scheduleLocation = $_POST['scheduleLocation'];
$addressHome = $_POST['addressHome'];
$date = $_POST['scheduleDate'];
$hour = $_POST['scheduleTime'];
$scheduleSkill = $_POST['scheduleSkill'];
$last = $_POST['lastName'];
$first = $_POST['firstName'];

$completeName = $last.' '.$first;

$address = $_POST['address'];
$email = $_POST['email'];
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$guardianName = $_POST['guardianName'];
$guardianTelephone = $_POST['guardianTelephone'];

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
        lugar,
        lugar_otro,
        fecha_reserva,
        hora,
        nivel,
        apellido,
        nombre,
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
            '$scheduleLocation',
            '$addressHome',
            '$date',
            '$hour',
            '$scheduleSkill',
            '$last',
            '$first',
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
        $error = $conn->error;
        echo json_encode(array(
            'success' => 0,
            'error' => $error
        ));
    }
    

function envioMail($cadena){

    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\Exception;

    // require 'email/prcd/email/Exception.php';
    // require 'email/prcd/email/PHPMailer.php';
    // require 'email/prcd/email/SMTP.php';

    // email
    $mail = new PHPMailer(true);

    try {

        //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    //$mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->Host = '';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username = 'email@email.com';                     // SMTP username
    $mail->Password = '';                               // SMTP password
    $mail->SMTPSecure = 'SSL';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to 587 465
    
        //Recipients
        $mail->setFrom('email@email.com', 'Natatorial');
        $mail->addAddress($email, $completeName);     // Add a recipient
    
        // Content
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';                                  // Set email format to HTML
        $mail->Subject = 'Reservation natatorial';
        $mail->Body    = '<p>Thank you for making your reservation</p>

        <p>The date you selected is: '.$date.', '.$hour.'</p>
        
        <p>The location is in: '.$scheduleLocation.'</p>
        
        <p>Your reservation code is: '.$cadena.'</p>
        Natatorial.com';
        $mail->AltBody = 'Reservation natatorial';
    
        $mail->send();

        

    }catch (Exception $e) {
        echo "
       
        Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }  

}


?>
