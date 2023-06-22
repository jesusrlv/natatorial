<?php
include('qc.php');
date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');

$testimonial = utf8_encode($_POST['testimonial']);
$calif = $_POST['calif'];
$fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

$sql = "INSERT INTO testimonials(
    testimonial,
    dateT,
    calif
) 
VALUES(
'$testimonial',
'$fecha_sistema',
'$calif'
)";

$resultado= $conn->query($sql);

if($resultado){

    echo json_encode(array('success' => 1,'texto'=>$testimonial));

}

else{
    echo json_encode(array('success' => 0));
}
?>