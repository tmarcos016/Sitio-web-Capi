<?php
    include 'conexion/conexion.php';

    date_default_timezone_set('America/Monterrey');
    $fecha=date("Y-m-d");
    $hora=date("H:i:s");

    // CLAUSULA - Cadena que va rellenar la tabla //
    // <!-- ------------------------------------------------ --> //

    // $cadena_consulta="SELECT id_facturas,id_cliente,duracion_garantia,costo_garantia,proveedor_dominio,costo_dominio,proveedor_hosting,costo_hosting,cantidad_modulos,costo_modulos,costo_total FROM tabla_facturas";

    // <!-- ------------------------------------------------ --> //

    // $cadena_consulta="SELECT * FROM tabla_facturas";

    // <!-- ------------------------------------------------ --> //

    $cadena_consulta="SELECT 
                            tf.id_facturas,
                            CONCAT(tp.nombre,' ',tp.ap_paterno,' ',tp.ap_materno),
                            tf.duracion_garantia,
                            tf.costo_garantia,
                            tf.proveedor_dominio,
                            tf.costo_dominio,
                            tf.proveedor_hosting,
                            tf.costo_hosting,
                            tf.cantidad_modulos,
                            tf.costo_modulos,
                            tf.costo_total
                        FROM 
                            tabla_facturas tf 
                        INNER JOIN
                            tabla_personas tp ON tf.id_cliente = tp.id_persona
    ";

    // <!-- ------------------------------------------------ --> //

    $consulta_facturas=mysqli_query($conexion,$cadena_consulta);

    // ITERACION // <!-- ------------------------------------------------ --> //

    // WHILE es un ciclo declarado que se repitira utilizando la funcion de WHILE
    // $cuerpo = dato nulo o vacio //
        // NOTA: apartir del php7, si insertas una variable dentro de un ciclo se genera una alerta si la variable no esta declarada al inicio
    $cuerpo="";
    $numero = 1;
    
    while($row_facturas=mysqli_fetch_array($consulta_facturas)){
        // BOTON EDITAR //
        // $editar="<a class='btn btn-warning borde sombra text-danger' onclick='editar($row_facturas[0])'><i class='fa fa-edit fa-lg'></i></a>";
        // BOTON ELIMINAR //
        // $eliminar="<a class='btn btn-danger borde sombra' onclick='eliminar($row_facturas[0])'><i class='fa fa-trash fa-lg'></i></a>";
        // CELDA OPCIONES //
        $opciones="<center>".$editar."&nbsp;".$eliminar."</center>";
        // ROWS - FILAS - RENGLONES ///////////////////////////////////////////////
        $renglon="
            {
                \"id_facturas\":\"$row_facturas[0]\",
                \"id_cliente\":\"$row_facturas[1]\",
                \"duracion_garantia\":\"$row_facturas[2]\",
                \"costo_garantia\":\"$row_facturas[3]\",
                \"proveedor_dominio\":\"$row_facturas[4]\",
                \"costo_dominio\":\"$row_facturas[5]\",
                \"proveedor_hosting\":\"$row_facturas[6]\",
                \"costo_hosting\":\"$row_facturas[7]\",
                \"cantidad_modulos\":\"$row_facturas[8]\",
                \"costo_modulos\":\"$row_facturas[9]\",
                \"costo_total\":\"$row_facturas[10]\",
                \"opciones\":\"$opciones\"
            },";
                // Concatenacion de variableNULO con el renglon
                // NOTA cuerpo=vacio : al inicio la tabla esta vacia despues, se van empalmando los registros 0+1=1,1+1=2,2+1=3... hasta formar todo el array
                $cuerpo=$cuerpo.$renglon;
        // /////////////////////////////////////////////////////////////////////////
    }
    // <!-- -------------------------------------------------------------------- -->


    // funcion trim para borrar la coma en el ultimo renglon
    $cuerpo2=trim($cuerpo,',');

    // Tabla igual a todas las condiciones de las variables representantes //
    $tabla="
    ["
    .$cuerpo2.
    "]
    ";

    // ARRAY - Para imprimir las condiciones de la variable tabla en un array
    echo $tabla;

// ////////////////////////////////////////////////////////////////////////////
?>