<?php

session_name("registroCC");
session_start();

include'conexion/conexion.php';
$p_user = $_POST['nombre_usuario'];
$p_contra =  ($_POST['pass']);
$contraseña = $p_contra;
$consulta_usuario = "SELECT id, usuario, pass, activo FROM usuarios WHERE usuario = '$p_user' AND pass = '$contraseña' AND activo = '1'";

$usuario = mysqli_query($conexion, $consulta_usuario);
$row_usuario = mysqli_fetch_array($usuario);
$num_usuario = mysqli_num_rows($usuario);

if ($num_usuario==0) {
	echo "1";
}elseif ($num_usuario>0) {
	$_SESSION["registroCC_id_usuario"] = $row_usuario[0];
	$_SESSION["registroCC_usuario"] = $row_usuario[1];
	$_SESSION["registroCC_contraseña"] = $row_usuario[2];
	//$_SESSION["registroCC_extension"] = $row_usuario[3];
	$_SESSION["registroCC_autenticado"] = "SI";
	echo "2";
}

 ?>