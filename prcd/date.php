<?php
include('qc.php');

$date = $_POST['dateS'];
$time = $_POST['dateT'];
$sql = "SELECT * FROM agenda WHERE fecha_reserva = '$date' AND hora = '$time'";
$resultSql = $conn->query($sql);
$no_resultados = mysqli_num_rows($resultSql);


    if($no_resultados==1){
        echo '
        <div class="alert alert-danger" role="alert">
        Date not available! If you do not find a date that you like, you can consult the 
            <a href="#" class="icon-link">
            Waiting List 
            </a>
        </div>
        <script>
        document.getElementById("button1").disabled = true;
        </script>
      
        ';
    }
    else if($no_resultados==0){
        
        echo '
        <div class="alert alert-primary" role="alert">
            Date available! <strong>('.$date.' / '.$time.'.30 hs)</strong>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled>
                <label class="form-check-label" for="flexCheckChecked">
                Reserve
                </label>
            </div>
        </div>
        <script>
        document.getElementById("button1").disabled = false;
        </script>
        ';
    }

?>