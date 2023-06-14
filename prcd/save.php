<?php
include('qc.php');
date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');

$date = $_POST['scheduleDate'];
$hour = $_POST['scheduleTime'];
$last = $_POST['lastname'];
$first = $_POST['firtsname'];
$email = $_POST['email'];
$address = $_POST['address'];
$fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
$annio = substr($fecha_sistema, 0, 4);
$mes = substr($fecha_sistema, 5, 2); 

$fileName = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}

$archivo_ext=$_FILES['file1']['name'];
$extension = pathinfo($archivo_ext, PATHINFO_EXTENSION);

    if(move_uploaded_file($_FILES["file1"]["tmp_name"],"../docs/". $annio .'_'. $mes .'_'.$last.'_'.$first.'.'.$extension)){
    // echo "$fileName carga completa";
    
    $ruta = "docs/". $annio .'_'. $mes .'_'.$last.'_'.$first.'.'.$extension;
    // $sqlinsert= "UPDATE documentos SET link4='$ruta_pptx' WHERE id_usr='$curp'";
    // $sqlinsert= "INSERT INTO docs (id_ext,ruta,tipo_doc,fecha_agregado,validacion) 
    // VALUES('$id','$ruta','$tipo_doc','$fecha_sistema','$validacion')";
    // $resultado2= $conn->query($sqlinsert);
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
