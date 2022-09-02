<?php

  require_once "conexion.php";
  session_start();
      $dbName    = "tienda";
      $dbcon = conectaDB($dbName);
      $dbTabla = "categoria";

//encabezado();

?>

<center><h2>Listado de Pedidos<h2></center>
<li class="nav-item"><a href="logout.php" class="nav-link link-dark">Salir</a></li>
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
$consulta="SELECT * FROM $dbTabla";
$segmento=$dbcon->query($consulta);
if($segmento){
		echo "<div class='table'>";
		echo "<table class='table table-striped'>";
		echo "<thead>";	
		echo "<tr>";
		echo "<th>Código</th>";
		echo "<th>Nombre</th>";
        echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
	
	foreach ($segmento as $row)
		{
			echo "<tr>";
			echo "<td>".($row["idcategoria"])."</td>";
			echo "<td>".($row["nombre"])."</td>";
			echo "</tr>";
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

</body>
</html>