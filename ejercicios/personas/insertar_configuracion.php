<?php
    // INSERTA Y EDITAR DATOS
    include '../personas/conexion/conexion.php';

    date_default_timezone_set("American/Monterrey");
    $anio=date("Y");
    $fecha=date("Y-m-d");
    $hora=date("H:i:s");

    // ID de inputs con input-hidden 
    $ide=$_POST['ide'];
    $nombre=$_POST['nombre'];
    $ap_paterno=$_POST['ap_paterno'];
    $ap_materno=$_POST['ap_materno'];
    $activo=$_POST['activo'];

    // if(ifEmpty($id))
    if(empty($ide)){
        // codigo para insertar registro
        $cadena_insertar="INSERT INTO tabla_personas (nombre, ap_paterno, ap_materno, activo)VALUES('$nombre','$ap_paterno','$ap_materno','1')";
    }else{
        // codigo para editar registro
        $cadena_insertar="UPDATE tabla_personas SET nombre='$nombre',ap_paterno='$ap_paterno',ap_materno='$ap_materno',activo='1' WHERE id_persona='$ide'";
    }

    $insertar_configuracion=mysqli_query($conexion,$cadena_insertar);
    echo $cadena_insertar;

?>