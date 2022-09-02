<?php

$dbName  = "tienda";
$dbTabla = "producto";
require_once "conexion.php";
$dbcon = conectaDB($dbName);


?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animalia</title>

    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<style>
    
    .box
{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 4px 8px 0 rgba(0, 0, 0, 0.19);
    border-radius: 10px;
}
.card
{
    margin-top: 80px;
    height: 300px;
    transition: 0.5s;
}
.card:hover
{
    border: 1px solid red;
    border-radius: 30px;
}
.card .cardImg
{
    height: 150px;
    width: 90%;
    position: relative;
    top: -15px;
    left: 5%;
}
.card .cardImg img
{
    width: 100%;
    height: 100%;
}

.card .info
{
    text-align: center;
}
.card .info h3
{
    color: rgb(70, 66, 66);
}
.card .info p
{
    color: rgb(41, 201, 49);
}

.ligne
{
    display: flex;
}
</style>
<body>
    
    
<center><h1>Perros<h1></center>
<div class="container">

    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                <?php
                echo '
                    <div id="wrapper">';
                        echo ' 
<!-- Content -->
                        <div id="page-wrapper">';

$consulta = "SELECT * FROM $dbTabla WHERE idcategoria = 1";
$segmento=$dbcon->query($consulta);
if($segmento)
{
       echo "<div class='table'>";
        echo "<table class='table table-striped'>";
        echo "<thead>"; 
        echo "<tr>";
       echo "<th>Imagen</th>";
        echo "<th>Nombre</th>";
        echo "<th>Precio</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
    
    foreach ($segmento as $row)
        {
            echo "<tr>";
          echo "<th><img height='64px' src".($row["imagen"])."><th>";
            echo "<th>".($row["nombre"])."</th>";
            echo "<th>".$row["precio"]." €"."</th>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
} 

else 
{
    echo '<script type="text/javascript">'; 
    echo 'alert("Se ha producido un error al consultar la tabla");'; 
    echo 'document.location.href = "index.html";';
    echo '</script>';
}
    echo '</div>
                        </div>
<!-- /. Content -->
                    </div>';
                    
                    ?>
 </div>

        </div>
    </div>
</div>
</div>
</body>
</html>