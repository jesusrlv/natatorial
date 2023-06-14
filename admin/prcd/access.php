<?php
session_start();
include('../../prcd/qc.php');
if (isset($_POST['usr']) && isset($_POST['pwd'])) {
   
    $id = $_POST['usr'];
    $pwd = $_POST['pwd'];
    $sql = "SELECT * FROM user WHERE usr = '$id' AND pwd ='$pwd'";
    $resultado_sql = $conn->query($sql);
    if($row_sql=mysqli_fetch_array($resultado_sql)){
        $_SESSION['id'] = $id;
        echo json_encode(array('success' => 1));
    }
    else{
        session_destroy();
        $_SESSION = [];
        echo json_encode(array('success' => 0));
    }
    
} else {
    session_destroy();
    $_SESSION = [];
    echo json_encode(array('success' => 0));
}