<?php
    // INSERTA Y EDITAR DATOS
    include '../rfc/conexion/conexion.php';

    date_default_timezone_set("American/Monterrey");
    $anio=date("Y");
    $fecha=date("Y-m-d");
    $hora=date("H:i:s");

    $id_cliente = $_POST['id_cliente'];
    $rfc = $_POST['rfc'];
    $descripcion = $_POST['descripcion'];

    $cadena_insertar = "INSERT INTO tabla_rfc(id_cliente, rfc, descripcion)
    VALUES('$id_cliente', '$rfc', '$descripcion')";

    $ejecutar_cadena = mysqli_query($conexion, $cadena_insertar);

    echo "<script>window.location = 'rfc.php'; </script>";

?>