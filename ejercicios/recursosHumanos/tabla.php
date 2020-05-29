<?php
    include 'conexion/conexion.php';
    

    date_default_timezone_set('America/Monterrey');
    $fecha=date("Y-m-d");
    $hora=date("H:i:s");
    // CLAUSULA - Cadena que va rellenar la tabla //
    // <!-- ------------------------------------------------ --> //

    // $cadena_consulta="SELECT id_trabajador,id_persona,activo FROM tabla_recursos_humanos";

    // <!-- ------------------------------------------------ --> //

    // $cadena_consulta="SELECT * FROM tabla_recursos_humanos";

    // <!-- ------------------------------------------------ --> //

    $cadena_consulta="SELECT 
                            trh.id_trabajador,
                            CONCAT(tp.nombre,' ',tp.ap_paterno,' ',tp.ap_materno),
                            trh.activo
                        FROM 
                            tabla_recursos_humanos trh 
                        INNER JOIN
                            tabla_personas tp ON trh.id_persona = tp.id_persona
    ";
    
    // <!-- ------------------------------------------------ --> //

    $consulta_trabajadores=mysqli_query($conexion,$cadena_consulta);

    // ITERACION // <!-- ------------------------------------------------ --> //

    // WHILE es un ciclo declarado que se repitira utilizando la funcion de WHILE
    // $cuerpo = dato nulo o vacio //
        // NOTA: apartir del php7, si insertas una variable dentro de un ciclo se genera una alerta si la variable no esta declarada al inicio
    $cuerpo="";
    $numero = 1;
    
    while($row_trabajadores=mysqli_fetch_array($consulta_trabajadores)){

        // ------------------------------------------------------------- //

        // BOTON ACTIVAR //
        $activar="<a class='btn btn-success borde sombra' id='activar' onclick='activar($row_trabajadores[0])'><i class='fa fa-edit fa-lg'></i></a>";
        // BOTON DESACTIVAR //
        $desactivar="<a class='btn btn-default borde sombra' id='desactivar' onclick='desactivar($row_trabajadores[0])'><i class='fa fa-trash fa-lg'></i></a>";
        // BOTON EDITAR //
        $editar="<a class='btn btn-warning borde sombra text-danger' id='editar' onclick='editar($row_trabajadores[0])'><i class='fa fa-edit fa-lg'></i></a>";
        // BOTON ELIMINAR //
        $eliminar="<a class='btn btn-danger borde sombra' id='eliminar' onclick='eliminar($row_trabajadores[0])'><i class='fa fa-trash fa-lg'></i></a>";
        // CELDA OPCIONES //
        $opciones="<center>".$editar."&nbsp;".$eliminar."&nbsp;".$activar."&nbsp;".$desactivar."</center>";

        // ------------------------------------------------------------- //




        // ROWS - FILAS - RENGLONES ///////////////////////////////////////////////
        $renglon="
            {
                \"id_trabajador\":\"$row_trabajadores[0]\",
                \"id_persona\":\"$row_trabajadores[1]\",
                \"activo\":\"$row_trabajadores[2]\",
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