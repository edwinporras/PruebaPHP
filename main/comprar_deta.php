<?php
require_once "../Database/Database.php";

$sql_fetch_todos = "SELECT * FROM product ORDER BY id ASC";
$query = mysqli_query($conn, $sql_fetch_todos);
  
?>
<!doctype html>
<html lang="en">

<head>
    <title>Editar Producto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="dp.png">
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #fd7e1b;
        }
        .header {
            position: fixed;
            top: 0px;
            left: 0px;
            right: 0px;
            height: 50px;
            padding: 5px 13px 11px 0px;
            width: 100%;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            margin-top: 0px;
            bottom: 0;
            background-color: #298dba;
        }
        .header p {
            margin-left: 20px;
            text-align: left;
        }
        .button-logout {
            position: relative;
            margin-top: -50px;
            margin-right: 20px;
            float: right;
            text-decoration: none;
            border: transparent;
            border-radius: 15px;
            background-color: #e60000;
            padding: 10px 10px 10px 10px;
            color: white;
            transition: 0.5s;
        }
        .button-logout:hover {
            background-color: #D9ddd4;
            color: red;
        }
        .container {
            margin: 90px auto;
            margin-bottom: 50px;
            border-radius: 30px;
            text-align: center;
            background-color: white;
            width: 40%;
            padding-bottom: 10px;
        }

        table th,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px 0px 10px 0px;
        }

        table {
            width: 100%;
        }

        th {
            color: white;
            background-color: #298dba;
        }

        tr {
            background-color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .timeregis {
            text-align: center;
        }
        .form-group{
            margin-left: 600px;
        }
        [type=text]{
            font-family: "Mitr", sans-serif;
            border-radius: 15px;
            border: transparent;
            padding: 7px 200px 7px 5px;
        }
        .return{
            border-radius: 15px;
            background-color: #ffcc33;
            color: black;
            text-decoration: none;
            padding: 4px 40px 4px 40px;
            margin: 0px 0px 50px 100px;
            font-size: 20px;
            transition: 0.5s;
        }
        .return:hover{
            background-color: #fdb515;
            color: white;
        }
        .modify{
            border-radius: 15px;
            border: transparent;
            color: white;
            padding: 4px 40px 4px 40px;
            margin: 0px 50px 50px 100px;
            font-size: 20px;
            border-collapse: collapse;
            background-color: #00A600;
            font-family: "Mitr", sans-serif;
            transition: 0.5s;
        }
        .modify:hover{
            color: black;
            background-color: #BBFFBB;
        }
    </style>
</head>
<body>
    <!-- <div class="header">
        <h3>ConfiguroWeb</h3>
        <a name="" id="" class="button-logout" href="logout.php" role="button">Cerrar Sesión</a>
    </div> -->
    <div class="container">
        <h1>Lista de Productos</h1>

    </div>
    
    <div class="fixproduct">
        <form method="POST" action="comprarfinal.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre del Producto</label>
                <br>
                <input type="text" class="form-control" name="nombre" value="<?php echo $_GET['nombre']; ?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Cantidad Disponible</label>
                <br>
                <input type="text" value="<?php echo $_GET['cantidad'] ?>" class="form-control" name="cantidad" readonly="readonly">
                <input type="hidden" value="<?php echo $_GET['id'] ?>" name="id" />
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputEmail1">N° Lote</label>
                <br>
                <input type="text" class="form-control" name="num_lote" value="<?php echo $_GET['num_lote']; ?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Fecha de Vencimiento</label>
                <br>
                <input type="text" class="form-control" name="fecha_vencimineto" value="<?php echo $_GET['fecha_vencimineto']; ?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Precio</label>
                <br>
                <input type="text" class="form-control" name="precio" value="<?php echo $_GET['precio']; ?>" readonly="readonly">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Cantidad a Comprar</label>
                <br>
                <input type="number" class="form-control" name="cantidad1" value="">
            </div>

            <div class="form-button">
                <a name="" id="" class="return" href="list.php" role="button" style="float:left">Volver</a>
                <a type="submit" name="" id="" class="return" href="list.php" role="button" style="float:left">comprar</a>
            </div>
        </form>
    </div>
    <?php
    mysqli_close($conn);
    ?>
</body>
</html>