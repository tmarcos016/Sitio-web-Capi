<?php
	include "conexion/conexion.php";

	$id = $_POST['id'];

	$cadena = mysqli_query($conexion,"DELETE FROM usuarios WHERE id = '$id'");

	echo "ok";
?>