<?php

    include('../Database/Database.php');

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $cantidad=$_POST['cantidad'];
    $numlote=$_POST['num_lote'];
    $fecha_vencimineto=$_POST['fecha_vencimineto'];
    $precio=$_POST['precio'];

    
        $sql = "UPDATE inventario SET nombre = '$nombre', cantidad = $cantidad, num_lote = $numlote, fecha_vencimineto = '$fecha_vencimineto', precio = $precio WHERE id = $id";
        $resul=mysqli_query($conn,$sql);
        

    mysqli_close($conn);
    header("Location: ../list.php");
?>
