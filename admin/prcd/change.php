<?php
include('../../prcd/qc.php');

$id = $_POST['id'];
$val = $_POST['val'];

$sql = "UPDATE agenda SET aprobar = '$val' WHERE id = '$id'";
$resultadoSql = $conn->query($sql);

if($resultadoSql){
    echo json_encode(array('success' => 1));
}
else{
    echo json_encode(array('success' => 0));

}

?>