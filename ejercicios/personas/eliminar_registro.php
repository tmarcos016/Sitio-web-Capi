<?php

    include "../personas/conexion/conexion.php";

    $id_registro=$_POST['id_registro'];

    $cadena_eliminar="DELETE FROM tabla_personas WHERE id_persona='$id_registro'";
    $eliminar_registro=mysqli_query($conexion,$cadena_eliminar);
    echo "ok";
?>