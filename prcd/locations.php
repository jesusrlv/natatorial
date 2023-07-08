<?php
include('qc.php');

$sql ="SELECT * FROM catalogo_places";
$resultadoSQL = $conn->query($sql);
echo '<option value="">Select location...</option>';
while($rowSQL = $resultadoSQL->fetch_assoc()){
    echo'
        <option value="'.$rowSQL['id'].'">'.$rowSQL['name'].'</option>
    ';
}

?>