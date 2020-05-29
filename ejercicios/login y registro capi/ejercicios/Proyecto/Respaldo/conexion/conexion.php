<?php
$db_host = "localhost";
$db_name = "login";
$db_user = "root";
$db_pass = "tic2019..";
$conexion = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(mysqli_connect_errno()){
 printf(mysqli_connect_error());
}
mysqli_set_charset($conexion, 'utf8');

?>
