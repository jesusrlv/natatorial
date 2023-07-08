<html>
    <header>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
    <body>
        <?php
        include('../prcd/qc.php');

            $id = $_REQUEST['id'];
            $sql = "DELETE FROM testimonials WHERE id = '$id' ";
            $resultado= $conn->query($sql);

            if($resultado){
                echo"
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Done!',
                        html: 'The testimonial is delete!',
                        imageUrl: '../../img/natatorial_logo.png',
                        imageWidth: 170,
                        imageHeight: 136,
                        imageAlt: 'Imagen',
                    }).then(function(){window.location='../testimonials.php';});</script>";
            }
        ?>
    </body>

</html>
