<?php
    include('../Database/Database.php');

    $nombre=$_POST['name'];
    $cantidad=$_POST['cantidad'];
    $numlote=$_POST['num_lote'];
    $fecha=$_POST['fec_venc'];
    $precio=$_POST['precio'];

   
        $sql = "INSERT INTO inventario (nombre,cantidad,num_lote,fecha_vencimineto,precio)
         VALUES ('$nombre',$cantidad,$numlote,'$fecha',$precio)";

         $resul=mysqli_query($conn,$sql);
       
    mysqli_close($conn);
    // echo "<script>alert('Registro completado exitósamente')</script>";
    header("Location: ../list.php");
?>