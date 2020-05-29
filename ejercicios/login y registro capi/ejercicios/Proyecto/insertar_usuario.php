<?php

	include "conexion/conexion.php";

	$id = $_POST['id'];
	$usuario  = $_POST['usuario'];
	$nombres = $_POST['nombres'];
	$pass         = $_POST['pass'];
	
	$resultado = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario = '$usuario'");
	$cont_duplicado = mysqli_num_rows($resultado);
	
	if ($cont_duplicado==0) {
		if(empty($id)){
			$cadena_insertar = "INSERT INTO usuarios(usuario,nombres,pass,tipo) VALUES('$usuario','$nombres','$pass','0')";
			$consulta = mysqli_query($conexion,$cadena_insertar);
			echo '1';
		}		
	}
	else if(!empty($id)){
		$cadena_insertar = "UPDATE usuarios SET usuario = '$usuario',nombres = '$nombres',pass = '$pass' WHERE id = '$id'";
		$consulta = mysqli_query($conexion,$cadena_insertar);
		echo '2';
	}
	else if ($cont_duplicado>0) {
		echo 'duplicado';
	}
?>
