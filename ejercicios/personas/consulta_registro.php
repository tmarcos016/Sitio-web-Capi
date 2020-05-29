<?php

    include "../personas/conexion/conexion.php";

    $id_registro=$_POST['id_registro'];

    $cadena_consulta="SELECT id_persona,nombre,ap_paterno,ap_materno,activo FROM tabla_personas WHERE id_persona='$id_registro'";
    $consulta_registro=mysqli_query($conexion,$cadena_consulta);
    $row_registro=mysqli_fetch_array($consulta_registro);

    $array=array(
        $row_registro[0],
        $row_registro[1],
        $row_registro[2],
        $row_registro[3],
        $row_registro[4],
    );
    $array_datos=json_encode($array);
    echo $array_datos;
?>