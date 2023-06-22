<?php
include('qc.php');
date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');

$testimonial = $_POST['testimonial'];
$calif = $_POST['calif'];
$fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

$sql = "INSERT INTO testimonial(
    'testimonial',
    'date',
    'calif'
) 
VALUES(
'$testimonial',
'$fecha_sistema',
'$calif'
)"
?>