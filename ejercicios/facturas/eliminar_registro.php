<?php

    include "../facturas/conexion/conexion.php";

    $id_registro=$_POST['id_registro'];

    $cadena_eliminar="DELETE FROM tablafacturas WHERE id='$id_registro'";
    $eliminar_registro=mysqli_query($conexion,$cadena_eliminar);
    echo "ok";
?>