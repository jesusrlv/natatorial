<?php
include('qc.php');

$day = $_POST['dia'];
$location = $_POST['location'];

$sql ="SELECT * FROM dayHourLocation WHERE day = '$day' AND location = '$location'";
$resultadoSQL = $conn->query($sql);
echo '<option value="">Select hour...</option>';
while($rowSQL = $resultadoSQL->fetch_assoc()){
    echo'
        <option value="'.$rowSQL['hour'].'">'.$rowSQL['day'].' | '.$rowSQL['hour'].'</option>
    ';
}

?>