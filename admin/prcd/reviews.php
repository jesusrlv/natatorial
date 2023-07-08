<?php
    include('qc.php');
    $x = $_POST['x'];
    
    $sql = "SELECT * FROM testimonials ORDER BY dateT DESC";
    $resultado = $conn->query($sql);
    while($rowSql = $resultado->fetch_assoc()){
        $xF = $rowSql['calif'] - 1;
        echo '<h5>';
        for ($x = 0; $x <= $xF; $x++) {
            echo '<i class="bi bi-star-fill" style="color:#EFB810"></i>';
          } 
          echo '</h5>';
        echo '
            <small>'.$rowSql['dateT'].'</small>
            <p class="h5" style="text-align:justify">'.$rowSql['testimonial'].'</p>
            <hr>
        ';
    }
    
?>