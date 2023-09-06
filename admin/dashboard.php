<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">  
  <head>
    <link rel="icon" type="image/png" href="../img/icono.ico"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Natatorial.com">
    <meta name="author" content="Natatorial.com">
    <meta name="generator" content="Natatorial.com">
    <title>Swimming classes</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="change.js"></script>

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../css/headers.css" rel="stylesheet">

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="bootstrap" viewBox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
      </symbol>

      </svg>

    <body>
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
              <a href="../" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="../img/natatorial_logo.png" width="40" alt="">
              </a>
        
              <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><i class="bi bi-circle-fill"></i> LIST ABOUT SCHEDULE</li>
              </ul>
              <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="testimonials.php" class="icon-link icon-link-hover">TESTIMONIALS</a></li>
              </ul>
        
              <div class="col-md-3 text-end">
                <a href="prcd/sort.php" type="button" class="btn btn-outline-dark me-2"><i class="bi bi-door-open-fill"></i> Exit</a>
              </div>
            </header>
            
        </div>
<div class="container">
    <form action="dashboard.php" method="POST">
    <div class="input-group mb-4 w-50">
      <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar-week"></i></span>
      <input type="date" class="form-control" placeholder="Buscar por fecha" aria-label="Search for date" aria-describedby="basic-addon1" id="fecha" name="fecha" required>
      <button type="submit" class="btn btn-primary">Search</button>
    </div>
    </form>
    <?php 
      if(isset($_POST['fecha'])){
        $date = $_POST['fecha'];
        $annio = substr($date, 0, 4);
        $mes = substr($date, 5, 2); 
      }
      else{
        date_default_timezone_set('America/Mexico_City');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $date = strftime("%Y-%m-%d,%H:%M:%S");
        $annio = substr($date, 0, 4);
        $mes = substr($date, 5, 2); 
      }
    ?>
    <h5><strong>Date:</strong> <?php echo $annio ?> / <?php echo $mes ?></h5>

    <hr>
    <h4 class="text-primary mt-3 mb-4"><i class="bi bi-check-circle-fill"></i> Approved</h4>

    <div class="row">
      <div class="col">
          <div class="input-group mb-4 w-100">
              <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
              <input type="text" class="form-control" placeholder="Filter" aria-label="Filter" aria-describedby="basic-addon1" id="myInput1">
          </div>
      </div>
      <div class="col text-end">
        <a href="excel_inventario_fechas.php?fecha=<?php echo $fechaBusqueda ?>" class="btn btn-outline-primary"><i class="bi bi-file-earmark-excel-fill"></i>  Excel Report</a>
      </div>
    </div>
    <!-- table -->
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead class="table-primary text-center">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col">Hour</th>
            <th scope="col">Last name</th>
            <th scope="col">First name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Id Nat</th>
            <th scope="col">Approve</th>
          </tr>
        </thead>
        <tbody id="myTable1">
          <?php
          include ('prcd/query.php');
          $x = 0;
           while($row_sqlInv = $sqlResultToday->fetch_assoc()){
            $x++;
            $idChange = $row_sqlInv['id'];
            echo'<tr>';
                echo'<td class="text-center">'.$x.'</td>';
                echo'<td class="text-center">'.$row_sqlInv['fecha_reserva'].'</td>';
                echo'<td class="text-center">'.$row_sqlInv['hora'].'</td>';
                echo'<td class="text-center">'.$row_sqlInv['apellido'].'</td>';
                echo'<td class="text-center">'.$row_sqlInv['nombre'].'</td>';
                echo'<td class="text-center">'.$row_sqlInv['email'].'</td>';
                echo'<td class="text-center">'.$row_sqlInv['domicilio'].'</td>';
                echo'<td class="text-center">'.$row_sqlInv['id_ext'].'</td>';
                echo'<td class="text-center"><select class="form-select" aria-label="Change option" onchange="change(this.value,'.$idChange.')">
                <option>Change option</option>
                <option value="0">Not approved</option>
                <option value="1">Approved</option>
                <option value="2">Waiting list</option>
              </select></td>';
                
            echo'</tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
    <hr>
    <h4 class="text-warning mt-3 mb-4"><i class="bi bi-exclamation-circle-fill"></i> Waiting list</h4>

    <div class="row">
      <div class="col">
          <div class="input-group mb-4 w-100">
              <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
              <input type="text" class="form-control" placeholder="Filter" aria-label="Filter" aria-describedby="basic-addon1" id="myInput2">
          </div>
      </div>
      <div class="col text-end">
        <a href="excel_inventario_fechas.php?fecha=<?php echo $fechaBusqueda ?>" class="btn btn-outline-primary"><i class="bi bi-file-earmark-excel-fill"></i>  Excel Report</a>
      </div>
    </div>
    <!-- table -->
    <!-- table -->
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead class="table-warning text-center">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col">Hour</th>
            <th scope="col">Last name</th>
            <th scope="col">First name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Id Nat</th>
            <th scope="col">Approve</th>
          </tr>
        </thead>
        <tbody id="myTable2">
          <?php
          include ('prcd/query.php');
          $x = 0;
           while($row_sqlInv3 = $resultadoBusqueda->fetch_assoc()){
            $x++;
            $idChange3 = $row_sqlInv3['id'];
            echo'<tr>';
                echo'<td class="text-center">'.$x.'</td>';
                echo'<td class="text-center">'.$row_sqlInv3['fecha_reserva'].'</td>';
                echo'<td class="text-center">'.$row_sqlInv3['hora'].'</td>';
                echo'<td class="text-center">'.$row_sqlInv3['apellido'].'</td>';
                echo'<td class="text-center">'.$row_sqlInv3['nombre'].'</td>';
                echo'<td class="text-center">'.$row_sqlInv3['email'].'</td>';
                echo'<td class="text-center">'.$row_sqlInv3['domicilio'].'</td>';
                echo'<td class="text-center">'.$row_sqlInv3['id_ext'].'</td>';
                echo'<td class="text-center"><select class="form-select" aria-label="Change option" onchange="change(this.value,'.$idChange3.')">
                <option>Change option</option>
                <option value="0">Not approved</option>
                <option value="1">Approved</option>
                <option value="2">Waiting list</option>
                </select></td>';
                
            echo'</tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
    <hr>
    <h4 class="text-danger mt-3 mb-4"><i class="bi bi-x-circle-fill"></i> Not approved</h4>

    <div class="row">
      <div class="col">
          <div class="input-group mb-4 w-100">
              <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
              <input type="text" class="form-control" placeholder="Filter" aria-label="Filter" aria-describedby="basic-addon1" id="myInput3">
          </div>
      </div>
      <div class="col text-end">
        <a href="excel_inventario_fechas.php?fecha=<?php echo $fechaBusqueda ?>" class="btn btn-outline-primary"><i class="bi bi-file-earmark-excel-fill"></i>  Excel Report</a>
      </div>
    </div>
    <!-- table -->
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead class="table-danger text-center">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col">Hour</th>
            <th scope="col">Last name</th>
            <th scope="col">First name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Id Nat</th>
            <th scope="col">Approve</th>
          </tr>
        </thead>
        <tbody id="myTable3">
          <?php
          include ('prcd/query.php');
          $x = 0;
          
           while($row_sqlInv2 = $sqlResultToday2->fetch_assoc()){
            $x++;
            $idChange2 = $row_sqlInv2['id'];
            echo'<tr>';
                echo'<td class="text-center">'.$x.'</td>';
                echo'<td class="text-center">'.$row_sqlInv2['fecha_reserva'].'</td>';
                echo'<td class="text-center">'.$row_sqlInv2['hora'].'</td>';
                echo'<td class="text-center">'.$row_sqlInv2['apellido'].'</td>';
                echo'<td class="text-center">'.$row_sqlInv2['nombre'].'</td>';
                echo'<td class="text-center">'.$row_sqlInv2['email'].'</td>';
                echo'<td class="text-center">'.$row_sqlInv2['domicilio'].'</td>';
                echo'<td class="text-center">'.$row_sqlInv2['id_ext'].'</td>';
                echo'<td class="text-center"><select class="form-select" aria-label="Change option" onchange="change(this.value,'.$idChange2.')">
                <option>Change option</option>
                <option value="0">Not approved</option>
                <option value="1">Approved</option>
                <option value="2">Waiting list</option>
                </select></td>';
                
            echo'</tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- footer -->
  <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
        <img src="../img/natatorial_logo.png" width="40" alt="">
      </a>
      <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2023 | Natatorial</span>
    </div>

    
  </footer>
</div>
  <!-- footer -->

</html>

<script>
    $(document).ready(function () {
        $("#myInput1").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#myTable1 tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
    $(document).ready(function () {
        $("#myInput2").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#myTable2 tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
    $(document).ready(function () {
        $("#myInput3").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#myTable3 tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
  </script>