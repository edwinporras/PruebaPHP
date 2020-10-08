<?php
    require_once "../Database/Database.php";
    
    $delete_num = $_GET['id'];
    $sql_delete =  "DELETE FROM inventario WHERE id = '$delete_num'";
    $query_delete = mysqli_query($conn,$sql_delete);
    $row = mysqli_fetch_assoc($query_delete,MYSQLI_ASSOC);
    
    mysqli_close($conn);
    header("Location: ../list.php");
?>