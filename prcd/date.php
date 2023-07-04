<?php
include('qc.php');

$date = $_POST['dateS'];
$time = $_POST['dateT'];
$location = $_POST['dateL'];
$sql = "SELECT * FROM agenda WHERE fecha_reserva = '$date' AND hora = '$time' AND lugar = '$location'";
$resultSql = $conn->query($sql);
$no_resultados = mysqli_num_rows($resultSql);


    if($no_resultados == 1){
        echo '
        <div class="alert alert-danger" role="alert">
        Date not available! If you do not find a date that you like, you can consult the 
            <a href="#" class="icon-link">
            Waiting List 
            </a>
            <p>
                <table class="table table-warning">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">Hour</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">';

                    $sql2 = "SELECT catalogo_hour.hour, agenda.hora, agenda.fecha_reserva, agenda.lugar FROM catalogo_hour INNER JOIN AGENDA ON catalogo_hour.hour = agenda.hora WHERE agenda.lugar = '$location'";
                    $resultSql2 = $conn->query($sql2);
                    $while($rowSQL2=$resultSql2->fetch_assoc()){
                    
                        echo '
                            <tr>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                        ';

                    }
            echo'
                    </tbody>
                </table>
            </p>

        </div>
        <script>
        document.getElementById("button1").disabled = true;
        </script>
      
        ';
    }
    else if($no_resultados == 0 || $no_resultados == null){

        $sqlLocation = "SELECT * FROM catalogo_places WHERE id = '$location'";
        $resultadoLocation = $conn->query($sqlLocation);
        $rowLocation = $resultadoLocation->fetch_assoc();
        
        echo '
        <div class="alert alert-primary" role="alert">
            Date available! <strong>('.$rowLocation['name'].' / '.$date.' / '.$time.'.30 hs)</strong>
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