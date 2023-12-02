<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud relacional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container"></div>
    <h1 class="text center " style = "backgraund = color: black; color: whit"> LISTADO DE PRODUCTOS</h1>


    <div class="container"></div>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">categoria</th>
                <th scope="col">Marca</th>
                <th scope="col">Precio</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php

                require("Config/Conexion.php"); 
                
                $sql = $conexion -> query(" SELECT + FROM productos 
                    INNER JOIN categorias ON productos.categoriaid = categoria.id
                    INNER JOIN marca ON productos.Marcaid = marca.id
                
                ");    
                
                while ($resultado = $sql ->fetch_assoc) {
                ?>

                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                 </tr>
                <$php
               


                ?>

                }
            
            ?>
            
    
        </tbody>
    </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>