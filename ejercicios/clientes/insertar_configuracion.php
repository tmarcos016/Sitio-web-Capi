<?php
    
    include '../clientes/conexion/conexion.php';

    $id_persona = $_POST['id_persona'];

    $cadena_insertar = "INSERT INTO tabla_clientes(id_persona,activo)
    VALUES('$id_persona','1')";


    $ejecutar_cadena = mysqli_query($conexion, $cadena_insertar);

    echo "<script>window.location = 'clientes.php'; </script>";
?>