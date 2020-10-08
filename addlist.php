<?php
    include('./Database/Database.php');

?>
<!doctype html>
<html lang="en">

<head>
    <title>Agregar Producto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="faviconconfiguroweb.png">
    <link rel="stylesheet" href="./css/addlist.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    
</head>

<body>
    <div class="container">
        <h1>Agregar Producto</h1>
    </div>
    <div class="table-product">
        
        <br>
        <div class="addproduct">
            <form method="POST" action="main/addlist.php">
            <div class="form-group">
                    <label for="exampleInputPassword1">Nombre del Producto</label>
                    <br>
                    <input type="text" class="form-control" name="name" required> 
                </div> <br>

                <div class="form-group">
                    <label for="exampleInputPassword1">Cantidad</label>
                    <br>
                    <input type="number" class="form-control" name="cantidad" required> 
                </div> <br>

                <div class="form-group">
                    <label for="exampleInputPassword1">Numero de Lote</label>
                    <br>
                    <input type="text" class="form-control" name="num_lote" required> 
                </div> <br>

                <div class="form-group">
                    <label for="exampleInputPassword1">Fecha de Vencimiento</label>
                    <br>
                    <input type="date" class="form-control" name="fec_venc" required> 
                </div> <br>

                <div class="form-group">
                    <label for="exampleInputPassword1">Precio</label>
                    <br>
                    <input type="number" class="form-control" name="precio" required> 
                </div> <br>
                <div class="form-button">
                    <button type="submit" class="modify" style="float:right"><i class="fas fa-plus-circle"></i></button>
                    <a name="" id="" class="return" href="list.php" role="button" style="float:left"><i class="fas fa-undo-alt"></i></a>
                </div>
            </form>
        </div>
    </div>
 
</body>

</html>