<?php
include('../prcd/qc.php');
date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');
$fecha_qr = strftime("%Y-%m-%d,%H:%M:%S");


    $sqlBusqueda = "SELECT * FROM testimonials ORDER BY dateT ASC";
    $resultadoBusqueda = $conn->query($sqlBusqueda);



?>