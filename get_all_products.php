<?php
<?php

$dbName  = "tienda";
$dbTabla = "producto";
require_once "conexion.php";
$dbcon = conectaDB($dbName);

$response=new stdClass();

//$datos=array();
$datos=[];
$i=0;
$sql="select * from producto";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	$obj=new stdClass();
	$obj->idproducto=$row['idproducto'];
	$obj->nombre=$row['nombre'];
	$obj->precio=$row['precio'];
	$obj->imagen=$row['imagen'];
	$datos[$i]=$obj;
	$i++;
}
$response->datos=$datos;

mysqli_close($con);
//header('Content-Type: application/json');
echo json_encode($response);