<?php
include "conexion/conexion.php";

$id = $_POST['id'];

$cadena_consulta = "SELECT id,usuario,nombres,pass,tipo FROM usuarios WHERE id = '$id'";
$consulta_editar = mysqli_query($conexion, $cadena_consulta);

$row_editar = mysqli_fetch_array($consulta_editar);

$array = array(
	$row_editar[0],
	$row_editar[1],
	$row_editar[2],
	$row_editar[3]
);
$array_datos = json_encode($array);

echo $array_datos;
?>