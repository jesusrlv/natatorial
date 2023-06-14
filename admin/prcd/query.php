<?php
include('../prcd/qc.php');
date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
$fecha_qr = strftime("%Y-%m-%d,%H:%M:%S");

// today
$sqlToday = "SELECT * FROM agenda WHERE YEAR(fecha_reserva) = YEAR(CURRENT_DATE()) AND MONTH(fecha_reserva) = MONTH(CURRENT_DATE()) AND aprobar = 1 ORDER BY fecha_reserva ASC, hora";
$sqlResultToday = $conn->query($sqlToday);
// today not approved
$sqlToday2 = "SELECT * FROM agenda WHERE YEAR(fecha_reserva) = YEAR(CURRENT_DATE()) AND MONTH(fecha_reserva) = MONTH(CURRENT_DATE()) AND aprobar = 0 ORDER BY fecha_reserva ASC, hora";
$sqlResultToday2 = $conn->query($sqlToday2);

// date
if(isset($_POST['fecha'])){
    $fechaBusqueda = $_POST['fecha'];
    $annio = substr($fechaBusqueda, 0, 4);
    $mes = substr($fechaBusqueda, 5, 2); 
    $sqlBusqueda = "SELECT * FROM agenda WHERE YEAR(fecha_reserva) = $annio AND MONTH(fecha_reserva) = $mes AND aprobar = 1 ORDER BY fecha_reserva ASC, hora ASC";
    $resultadoBusqueda = $conn->query($sqlBusqueda);

    $sqlBusqueda2 = "SELECT * FROM agenda WHERE YEAR(fecha_reserva) = $annio AND MONTH(fecha_reserva) = $mes AND aprobar = 0 ORDER BY fecha_reserva ASC, hora ASC";
    $resultadoBusqueda2 = $conn->query($sqlBusqueda2);
}

