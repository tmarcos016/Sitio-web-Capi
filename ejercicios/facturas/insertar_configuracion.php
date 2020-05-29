<?php
    // INSERTA Y EDITAR DATOS
    include '../facturas/conexion/conexion.php';

    date_default_timezone_set("American/Monterrey");
    $anio=date("Y");
    $fecha=date("Y-m-d");
    $hora=date("H:i:s");

    // ID de inputs con input-hidden 
    $ide=$_POST['ide'];
    $id_cliente=$_POST['id_cliente'];
    $duracion_garantia=$_POST['duracion_garantia'];
    $costo_garantia=$_POST['costo_garantia'];
    $proveedor_dominio=$_POST['proveedor_dominio'];
    $costo_dominio=$_POST['costo_dominio'];
    $proveedor_hosting=$_POST['proveedor_hosting'];
    $costo_hosting=$_POST['costo_hosting'];
    $cantidad_modulos=$_POST['cantidad_modulos'];
    $costo_modulos=$_POST['costo_modulos'];
    $costo_total=$_POST['costo_total'];




    // if(ifEmpty($id))
    if(empty($ide)){
        // codigo para insertar registro
        $cadena_insertar="INSERT INTO tabla_facturas (id_cliente, duracion_garantia, costo_garantia, proveedor_dominio, costo_dominio, proveedor_hosting, costo_hosting, cantidad_modulos, costo_modulos, costo_total)VALUES('$id_cliente','$duracion_garantia','$costo_garantia','$proveedor_dominio','$costo_dominio','$proveedor_hosting','$costo_hosting','$cantidad_modulos','$costo_modulos','$costo_total')";
        }else{
        // codigo para editar registro
        $cadena_insertar="UPDATE tabla_facturas SET id_cliente='$id_cliente',duracion_garantia='$duracion_garantia',costo_garantia='$costo_garantia',proveedor_dominio='$proveedor_dominio',costo_dominio='$costo_dominio',
        proveedor_hosting='$proveedor_hosting',costo_hosting='$costo_hosting',
        cantidad_modulos='$cantidad_modulos',costo_modulos='$costo_modulos',costo_total='$costo_total' WHERE id_facturas='$ide'";
    }

    $insertar_configuracion=mysqli_query($conexion,$cadena_insertar);
    echo $cadena_insertar;

?>