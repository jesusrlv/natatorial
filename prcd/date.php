<?php
include('qc.php');

$date = date($_POST['dateS']);
$time = $_POST['dateT'];
$location = $_POST['dateL'];
$sql = "SELECT * FROM agenda WHERE fecha_reserva = '$date' AND hora = '$time' AND lugar = '$location'";
$resultSql = $conn->query($sql);
$no_resultados = mysqli_num_rows($resultSql);


    if($no_resultados == 1){

        $day = date('l', strtotime($date));
        //echo $day;
        echo '
        <div class="alert alert-danger text-center" role="alert">
        Date not available! If you do not find a date that you like, you can consult the 
            <strong>
            Disponibility List <i class="bi bi-arrow-down"></i>
            </strong>
            <p>
                <table class="table table-warning">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col" class="text-center">Hour</th>
                            <th scope="col" class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">';
                    // $sql2 = "SELECT catalogo_hour.hour, agenda.hora, agenda.fecha_reserva, agenda.lugar FROM catalogo_hour INNER JOIN agenda ON catalogo_hour.hour = agenda.hora WHERE agenda.lugar = '$location'";
                    $sql2 = "SELECT * FROM dayHourLocation WHERE day = '$day' AND location = '$location'";
                    $resultSql2 = $conn->query($sql2);
                    while($rowSQL2=$resultSql2->fetch_assoc()){

                        $hour = $rowSQL2['hour'];
                        $horas = "SELECT * FROM agenda WHERE hora = '$hour' AND fecha_reserva = '$date' AND lugar = '$location'";
                        $responseHoras = $conn->query($horas);
                        $rowHoras = $responseHoras->fetch_assoc();
                    
                        echo '
                            <tr>
                                <td class="text-center">'.$rowSQL2['hour'].'</td>';
                                if ((empty($rowHoras['hora'])) || $rowHoras['hora'] == null ){
                                    echo'
                                    <td class="bg-success text-light text-center"><i class="bi bi-check-circle-fill"></i> Available</td>
                                    ';
                                }
                                else {
                                    echo'
                                    <td class="bg-danger text-light text-center"><i class="bi bi-x-circle-fill"></i> No Available</td>
                                    ';
                                }
                                echo'
                            </tr>
                        ';
                        // echo $rowHoras['fecha_reserva'];

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