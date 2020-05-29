<?php 

  include 'conexion/conexion.php';

  $cadena  = "SELECT id,usuario,nombres,pass FROM usuarios";

  $consulta = mysqli_query($conexion, $cadena);

  $cuerpo = "";
  $numero = 1;
  $activo = "";

  while ($row_usuarios = mysqli_fetch_array($consulta)) 
  {
  	$editar = "<a class='btn btn-warning' onclick='consulta_datos($row_usuarios[0])'><i class='fa fa-edit'></i></a>";
    $eliminar = "<a class='btn btn-danger' onclick='eliminar($row_usuarios[0])'><i class='fa fa-trash' aria-hidden='true'></i></a>";
    $opciones = "<center>".$editar."&nbsp;".$eliminar."</center>";
    
    $renglon = "
      {
      \"#\": \"$numero\",
      \"usuario\": \"$row_usuarios[1]\",
      \"nombres\": \"$row_usuarios[2]\",
      \"pass\": \"$row_usuarios[3]\",
      \"opciones\": \"$opciones\"
      },";
    $cuerpo = $cuerpo.$renglon;
    $numero ++;
  }
  $cuerpo2 = trim($cuerpo,','); 
  $tabla = "
  ["
  .$cuerpo2.
  "]
  ";
  echo $tabla;

 ?>
