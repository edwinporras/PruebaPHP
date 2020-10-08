<?php
require_once "./Database/Database.php";
?>
<!doctype html>
<html lang="en">

<head>
    <title>Lista de Productos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="faviconconfiguroweb.png">
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
        .modify {
            text-align: center;
        }
        .delete {
            text-align: center;
        }
        .modify .bfix {
            border-radius: 15px;
            background-color: #ffcc33;
            color: black;
            text-decoration: none;
            padding: 4px 20px 4px 20px;
            transition: 0.5s;
        }
        .modify .bfix:hover {
            background-color: #fdb515;
            color: white;
        }
        .delete .bdelete {
            border-radius: 15px;
            background-color: #e60000;
            text-decoration: none;
            color: white;
            padding: 4px 20px 4px 20px;
            transition: 0.5s;
        }
        .delete .bdelete:hover {
            background-color: #D9ddd4;
            color: red;
        }
        .Addlist {
            margin-right: 100px;
            padding: 5px 30px 5px 30px;
            border-radius: 15px;
            text-decoration: none;
            color: white;
            background-color: #00A600;
            transition: 0.5s;
        }
        .Addlist:hover {
            color: black;
            background-color: #BBFFBB;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1>Lista de Productos</h1>
    </div>
    <div class="table-product">
        <table>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Numero de Lote</th>
                <th scope="col">Fecha de Vencimiento</th>
                <th scope="col">precio</th>

                <th scope="col">Ver Detalle</th>

            </tr>
            <tbody>
                <?php
                $response=new stdClass();
                $datos=[];
                $i=0;

                // $idpro = 1;
                $sql="SELECT * FROM inventario";
                $result=mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_array($result)) { 
                    // $obj=new stdClass();
                    ?>
                    <tr>
                        
                        <td><?php echo $id=$row['id'] ?></td>
                        <td><?php echo $nombre=$row['nombre'] ?></td>
                        <td><?php echo $cantidad=$row['cantidad'] ?></td>
                        <td><?php echo $num_lote=$row['num_lote'] ?></td>
                        <td><?php echo $fecha_vencimineto=$row['fecha_vencimineto'] ?></td>
                        <td><?php echo $precio=$row['precio'] ?></td>

                        <td class="delete"><a name="comprar" id="" class="Addlist" href="main/comprar_deta.php?id=<?php echo $row['id'] ?>&nombre=<?php echo $row['nombre'] ?>&cantidad=<?php echo $row['cantidad'] ?> &num_lote=<?php echo $row['num_lote'] ?>&fecha_vencimineto=<?php echo $row['fecha_vencimineto'] ?>&precio=<?php echo $row['precio']; ?> " role="button">
                            Comprar Producto
                        </a></td>
                    </tr>
                <?php
                   
                   
                } ?>
            </tbody>
        </table>
        <br>
        <a name="" id="" class="Addlist" style="float:right" href="addlist.php" role="button">Agregar Producto</a>
    </div>
    <?php
    mysqli_close($conn);
    ?>
</body>

</html>