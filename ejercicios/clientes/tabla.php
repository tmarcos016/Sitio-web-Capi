<?php
    include 'conexion/conexion.php';

    date_default_timezone_set('America/Monterrey');
    $fecha=date("Y-m-d");
    $hora=date("H:i:s");

    // CLAUSULA - Cadena que va rellenar la tabla //
    // <!-- ------------------------------------------------ --> //

    // $cadena_consulta="SELECT * FROM tabla_clientes";

    // <!-- ------------------------------------------------ --> //

    $cadena_consulta="SELECT 
                            tc.id_cliente,
                            CONCAT(tp.nombre,' ',tp.ap_paterno,' ',tp.ap_materno),
                            tc.activo
                        FROM 
                            tabla_clientes tc 
                        INNER JOIN
                            tabla_personas tp ON tc.id_persona = tp.id_persona
    ";
    
    // <!-- ------------------------------------------------ --> //

    $consulta_clientes=mysqli_query($conexion,$cadena_consulta);

    // ITERACION // <!-- ------------------------------------------------ --> //

    // WHILE es un ciclo declarado que se repitira utilizando la funcion de WHILE
    // $cuerpo = dato nulo o vacio //
        // NOTA: apartir del php7, si insertas una variable dentro de un ciclo se genera una alerta si la variable no esta declarada al inicio
    $cuerpo="";
    $numero = 1;
    
    while($row_clientes=mysqli_fetch_array($consulta_clientes)){
        // BOTON EDITAR //
        $editar="<a class='btn btn-warning borde sombra text-danger' onclick='editar($row_clientes[0])'><i class='fa fa-edit fa-lg'></i></a>";
        // BOTON ELIMINAR //
        // $eliminar="<a class='btn btn-danger borde sombra' id='eliminar' onclick='eliminar($row_trabajadores[0])'><i class='fa fa-trash fa-lg'></i></a>";
        // CELDA OPCIONES //
        $opciones="<center>".$editar."&nbsp;".$eliminar."</center>";
        // ROWS - FILAS - RENGLONES ///////////////////////////////////////////////
        $renglon="
            {
                \"id_cliente\":\"$row_clientes[0]\",
                \"id_persona\":\"$row_clientes[1]\",
                \"activo\":\"$row_clientes[2]\",
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