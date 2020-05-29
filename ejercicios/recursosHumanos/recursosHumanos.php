<?php
include '../recursosHumanos/conexion/conexion.php';
// include '../global_seguridad/verificar_sesion.php';

$cadena_consulta = "SELECT id_persona, CONCAT(nombre,' ',ap_paterno,' ',ap_materno) AS 'Nombre' FROM tabla_personas";
$ejecutar_consulta = mysqli_query($conexion, $cadena_consulta);

?>


<!-- //////////////////////////////////////////////////// -->



<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CAPI.COM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/themify-icons.css">
    <link rel="stylesheet" href="../../css/nice-select.css">
    <link rel="stylesheet" href="../../css/flaticon.css">
    <link rel="stylesheet" href="../../css/gijgo.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/slick.css">
    <link rel="stylesheet" href="../../css/slicknav.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- ----------------------------------------------------------- -->
	<!-- bootstrap 4-->
	<link rel="stylesheet" type="text/css" href="../../plugins/bootstrap/css/bootstrap.min.css">
	<!-- fontawesome -->
	<link rel="stylesheet" href="../../plugins/fontawesome-free-5.8.1-web/css/all.min.css">
	<!-- Estilo personalizado -->
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<!-- bootstrap-toggle-master -->
	<link href="../../plugins/bootstrap-toggle-master/css/bootstrap-toggle.css" rel="stylesheet">
	<link href="../../plugins/bootstrap-toggle-master/stylesheet.css" rel="stylesheet">
	<!-- alertify -->
	<link href="../../plugins/alertifyjs/css/alertify.css" rel="stylesheet">	
	<link href="../../plugins/alertifyjs/css/themes/default.css" rel="stylesheet">	
	<!-- animate -->
    <link rel="stylesheet" href="../../plugins/animate/animate.css">
    <!-- ------------------------------------------------------------ -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
    <!-- ----------------------------------------------------------- -->
</head>

<body>
<!-- header-start -->
 <header>
  <div class="header-area ">
   <div class="header-top_area d-none d-lg-block">
    <div class="container">
     <div class="row">
      <div class="col-xl-6 col-md-6 ">
       <div class="social_media_links">
        <a href="#">
         <i class="fa fa-linkedin"></i>
        </a>
        <a href="#">
         <i class="fa fa-facebook"></i>
        </a>
        <a href="#">
         <i class="fa fa-google-plus"></i>
        </a>
       </div>
      </div>
      <div class="col-xl-6 col-md-6">
      <div class="short_contact_list">
       <ul>
        <li>
         <a href="#">
          <i class="fa fa-envelope"></i>AHernandez360@gmail.com
         </a>
        </li>
        <li>
         <a href="#">
          <i class="fa fa-phone"></i> +52-821-145-6792
         </a>
        </li>
       </ul>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div id="sticky-header" class="main-header-area">
   <div class="container">
    <div class="header_bottom_border">
     <div class="row align-items-center">
      <div class="col-xl-3 col-lg-2">
        <div class="logo">
         <a href="#">
          <img src="../../IMAGENES/cfp123icon.png" alt="200px" width="200px">
         </a>
        </div>
       </div>
       <div class="col-xl-6 col-lg-7">
        <div class="main-menu  d-none d-lg-block">
         <nav>
          <ul id="navigation">
           <li><a class="active" href="index.html">Inicio</a></li>
           <li><a href="about.html">Sobre Nosotros</a></li>
            <li><a href="service.html">Servicios</a></li>
            <li><a href="#">Más<i class="ti-angle-down"></i></a>
             <ul class="submenu">
              <li><a href="elements.html">Curriculum</a></li>
              <li><a href="Portfolio.html">Portfolio</a></li>
              <li><a href="portfolio_details.html">Portfolio detllado</a></li>
             </ul>
            </li>
            <li><a href="contact.html">Contacto</a></li>
           </ul>
          </nav>
         </div>
        <div class="Appointment">
         <div class="search_button">
          <a href="#">
           <i class="ti-search"></i>
          </a>
         </div>
        </div>
        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
         <!-- <div class="book_btn d-none d-lg-block">
                <a class="popup-with-form" href="#test-form">Cotizar</a>
              </div> -->
        </div>
        </div>
        <div class="col-12">
         <div class="mobile_menu d-block d-lg-none"></div>
        </div>
       </div>
      </div>
     </div>
    </div>
  </div>
 </header>
<!-- header-end -------------------------------------------------------------- -->
    <!-- about wrap  -->
    <div class="about_wrap_area about_bg_1">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
    <!--/ about wrap  -->
<!-- ////////////////////////////////////////////////////////////////////////  -->
<!-- PANEL PRINCIPAL ------------------------------------------------- -->
<div class="titulo borde sombra">
 <!-- ----------------------------------------------  -->
 <div class="box-header panel-heading borde buttonColorCSS sombra">
  <h3 class="box-title">CODE FINERY PRODUCTIONS</h3>
 </div><br>
 <!-- PANEL FORMULARIO----------------------------------------------  -->
 <div class="contenido borde sombra" style="padding-right:18px; padding-left:18px;">
  <div class="cuerpo">
   <div class="row">
    <div class="col-xs-12">
<!-- ///////////////////////////////////////////////////////////////////// -->
<!-- TITULO FORMULARIO ------------------------------------------------- -->
<div class="box-header panel-heading borde martesColor sombra">
 <h3 class="box-title">
  <font color="white ">Formulario | Registros de Recursos Humanos</font>    
 </h3>
</div>	
<!-- INPUTS FORMULARIO---------------------------------------------- -->
<div class="container-fluid">
 <div class="box box-danger">
 <!-- ---------------------------------------------- -->
  <div class="box-body">
   <form action="" method="POST" id="form_configuracion">
    <div class="row borde sombra">
     <!-- ---------------------------------------------- -->
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <input type="hidden" id="activo" name="activo"><!--  -->
      <form action ="insertar_configuracion.php" method="POST">  
         <div class="container">
          <div class="row"><hr>Eliga porfavor el nombre de la persona que desea dar de alta como trabajador.
           <!-- --------------------------- -->
           <span class="input-group-addon w-100">
            <label for="nombre" class="text-success claseInput1">* Lista de Personas</label>
           </span>
           <select name="id_persona" id="id_persona" class="form-control claseInput1 h-100 ">
            <?php 
             while ($row = mysqli_fetch_row($ejecutar_consulta)){
            ?>
            <option value = "<?php echo $row[0];?>"> <?php echo $row[1];?> </option>
            <?php
             }
            ?>
           </select><hr>
          <!-- --------------------------- -->
         </div>
        </div>
       </form>
      </div>  
     <!-- -------------------------------------- -->
    </div>
    <!-- -------------------------------------- -->
   </div>
  </div>
 		
<!-- BUTTONS ----------------------------------------------------- -->
       <div class="col-md-2">  
          <input type="submit" value="Guardar" class="btn btn-success borde sombra" id="btn-guardar" onclick="fGuardar()" autofocus>
       </div>										
<!-- ------------------------------------------------------------------ -->    
    <!-- ------------------------------------------------------------------- -->
    </div>    
   </div>
  </div>
 </div>
<!-- fin de panel formulario ----------------------------------------------- -->
</div>
<!-- fin de panel principal  -->



    <!-- // TABLA .html ///////////////////////////// -->


    <div class="boxA box-danger panel panel-primary animated slideInUp borde sombra">
     <div class="box-header panel-heading borde miercolesColor sombra">
      <h3 class="box-title">
       <font color="white">Configuracion de Recursos Humanos | Lista de trabajadores</font>  
      </h3>
     </div>
     <div class="box-body borde sombra">
      <div class="row">
       <div class="col-md-12">
        <div class="table-responsive panel-body">
         <!-- TABLA .html ----------------------------------- -->
         <table id="lista_recursosHumanos" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead class="btn-info">
              <th width="10%">#</th>
              <th    width="">Nombre de trabajador</th>
              <th  width="5%">Activo</th>
              <th    width="20%">Opciones</th>
          </thead>
          <tbody class="">
              <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th> 
              </tr>
          </tbody>              
         </table>
         <!-- ----------------------------------------------- -->
        </div>
        <div class="panel-footer panel-primary"></div>
       </div>
      </div>
     </div>
    </div>
<!-- ------------------------------------------------------------ -->
    <div class="testmonial_area">
     <div class="container">
      <div class="row">
       <div class="col-xl-10 offset-xl-1">
        <div class="testmonial_active2 owl-carousel">
         <div  class="single_slider text-center" data-dot=''>
          <div class="author_name text-center">
           <h4>T.S.U. Aarón Hernandez</h4>
           <span> Propietario de la empresa/Corporate Executive Officer</span><br>
           <span>HEGA910515UU4</span>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
<!-- footer start -------------------------------------------------------------- -->
    <footer class="footer">
     <div class="footer_top">
      <div class="container">
       <div class="row">
        <div class="col-xl-4 col-md-6 col-lg-4">
         <div class="footer_widget">
          <div class="footer_logo">
           <a href="#">
            <img src="../../IMAGENES/cfp123icon.png" alt="200px" width="200px">
           </a>
          </div>
          <p>
           Code Finery Productions
          </p>
          <div class="socail_links">
           <ul>
            <li>
            <a href="#">
             <i class="ti-facebook"></i>
            </a>
            </li>
            <li>
            <a href="#">
             <i class="ti-twitter-alt"></i>
            </a>
            </li>
            <li>
            <a href="#">
             <i class="fa fa-instagram"></i>
            </a>
            </li>
           </ul>
          </div>
         </div>
        </div>
        <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
         <div class="footer_widget">
          <h3 class="footer_title">
           Servicios
          </h3>
          <ul>
           <li><a href="#">Consultoria</a></li>
           <li><a href="#">Soporte Técnico</a></li>
           <li><a href="#">Ingeniería Grafica</a></li>
           <li><a href="#">Administración de Proyectos</a></li>
           <li><a href="#">Desarrollo de Sistemas</a></li>
          </ul>
         </div>
        </div>
        <div class="col-xl-2 col-md-6 col-lg-2">
         <div class="footer_widget">
          <h3 class="footer_title">
           Enlaces útiles
          </h3>
          <ul>
           <li><a href="#">Sobre Nosotros</a></li>
           <li><a href="#"> Contacto</a></li>
           <li><a href="#"> Obtener una Cotizacion Gratis</a></li>
          </ul>
         </div>
        </div>
        <div class="col-xl-3 col-md-6 col-lg-3">
         <div class="footer_widget">
          <h3 class="footer_title">
           Contacto Directo
          </h3>
          <ul>
           <li>Linares Nuevo León, México</li>
           <li>+52-821-145-6792</li>
           <li><a href="#"> AHernandez360@gmail.com </a></li>
          </ul>
         </div>
        </div>
       </div>
      </div>
     </div>
        <div class="copy-right_text">
         <div class="container">
          <div class="footer_border"></div>
          <div class="row">
           <div class="col-xl-12">
            <p class="copy_right text-center">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
           </div>
         </div>
        </div>
    </footer>
    <!--/ footer end  -->

<!-- ---------------------------------------------------------------------- -->
    <!-- SCRIPT JAVASCRIPT -->

	<!-- jquery -->
	<script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<!-- alertify -->
	<script src="../../plugins/alertifyjs/alertify.js"></script>
	<!-- bootstrap -->
	<script src="../../plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- preloaders -->
	<script src="../../plugins/Preloaders/jquery.preloaders.js"></script>
	<!-- bootstrap-toggle-master -->
	<script src="../../plugins/bootstrap-toggle-master/doc/script.js"></script>
	<script src="../../plugins/bootstrap-toggle-master/js/bootstrap-toggle.js"></script>
	<!-- Scripts personalizados -->
    <script src="funciones.js"></script>
    
    <!-- JS here -->
    <script src="../../js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../../js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/owl.carousel.min.js"></script>
    <script src="../../js/isotope.pkgd.min.js"></script>
    <script src="../../js/ajax-form.js"></script>
    <script src="../../js/waypoints.min.js"></script>
    <script src="../../js/jquery.counterup.min.js"></script>
    <script src="../../js/imagesloaded.pkgd.min.js"></script>
    <script src="../../js/scrollIt.js"></script>
    <script src="../../js/jquery.scrollUp.min.js"></script>
    <script src="../../js/wow.min.js"></script>
    <script src="../../js/nice-select.min.js"></script>
    <script src="../../js/jquery.slicknav.min.js"></script>
    <script src="../../js/jquery.magnific-popup.min.js"></script>
    <script src="../../js/plugins.js"></script>
    <script src="../../js/gijgo.min.js"></script>
    <script src="../../js/slick.min.js"></script>
    <!--contact js-->
    <script src="../../js/contact.js"></script>
    <script src="../../js/jquery.ajaxchimp.min.js"></script>
    <script src="../../js/jquery.form.js"></script>
    <script src="../../js/jquery.validate.min.js"></script>
    <script src="../../js/mail-script.js"></script>

    <script src="../../js/main.js"></script>


<!-- --------------------------------------------------------------------------  -->
<script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="../../plugins/Table/Table/DataTables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
<script src="../../plugins/alertifyjs/alertify.js"></script>
<!-- ---------------------------------------------------------------------------  -->

<!-- CARGAR_TABLA -------------------------------------------------------- -->
    <!-- Para que al momento de cargar la pagina tambien se carge la tabla -->
<script type="text/javascript">

$("#btn-guardar").click(function(){
    var id_persona=$("#id_persona").val();
    var nombre=$("#nombre").val();
    var ap_paterno=$("#ap_paterno").val();
    var ap_materno=$("#ap_materno").val();
    var activo=$("#activo").val();
    console.log(nombre,ap_paterno,ap_materno);


    // IF - 
    if ($("#nombre").val() == "" || $("#ap_paterno").val() == "" || $("#ap_materno").val() == "" ) {
     alertify.success("Favor de rellenar todos los datos");
    }else{
    // variable que sirve como conexion a codigoInsertar.php (inserta y editar)
    var url = "insertar_configuracion.php";
    // AJAX - tipo fetch para registros de arrays y guarda la informacion
    $.ajax({
        // mandando llamar el codigoInsertar con su variable
        url:url,
        // attributo POST
        type:"POST",
        // en un tipo archivo HTML
        dateType:"html",
        // data sera el $("#idFormulario").funcion(),
        data:$("#form_configuracion").serialize(),
        // funcion exito
        success:function(respuesta){
            // fCargarTabla();
            cargar_tabla();
            alertify.success("Datos de persona fueron registrados correctamente.");
            // Manda llamar el array como primer y unico registro, iniciando en 0 y resetea al cargar la pagina
            $("#form_configuracion")[0].reset();
        },
    error:function(xhr, status){
    alert("error");
      }
  });
}
});

function cargar_tabla(){
$('#lista_recursosHumanos').dataTable().fnDestroy();
     $('#lista_recursosHumanos').DataTable( {
    'language':{
        "url":"../../plugins/Table/Table/DataTables/Spanish.json"
    },
    "paging":false,
    "dom":'Bfrtip',
    buttons:[{
        
        extend:'pageLength',
        text:'Registros',
        className:'btn btn-info borde sombra buttonColorCSS text-default fa fa-database'
    },
    {  
        extend:'excel',
        text:' Exportar a Excel',
        className:'btn btn-success borde sombra martesColor fa fa-file-excel-o',
        title:'CODE FINERY PRODUNCTIONS | Lista de Trabajadores',
        exportOptions:{
            columns:':visible'
        }
    },
    {   
        extend:'pdf',
        text:' Exportar a PDF',
        className:'btn btn-danger borde sombra text-default horaColor fa fa-file-pdf-o',
        title:'CODE FINERY PRODUNCTIONS | Lista de Trabajadores',
        exportOptions:{
            columns:':visible'
        }
    },
    {
      
        extend:'copy',
        text:' Copiar registros',
        className:'btn btn-default borde sombra fa fa-files-o',
        copySuccess:{
            _:'%d lignes copiees',
            1:'1 ligne copiee'
        }
    }
],

"ajax":{
    "type":"POST",
    "url":"tabla.php",
    "dataSrc":""
},
"columns":[{
        "data":"id_trabajador"
    },
    {
        "data":"id_persona"
    },
    {
        "data":"activo"
    },
    {
        "data":"opciones"
    }
]
});
}

$(document).ready(function() {
cargar_tabla();
});
</script>

<!-- ELIMINAR ----------------------------------- -->

<script>
function eliminar(id_registro){
var url="eliminar_registro.php";

$.ajax({
    url:url,
    type:"POST",
    dateType:"html",
    data:{
        id_registro:id_registro
    },
    success:function(respuesta){
        alertify.error("Registro eliminado correctamente");
        cargar_tabla();
    },
    error:function(xhr,status){
        alert("error");
    }
});
}
</script>



<!-- EDITAR ----------------------------------- -->

<script>
function editar(id_registro){

var url="consulta_registro.php";
$.ajax({
    url:url,
    type:"POST",
    dateType:"html",
    data:{
        id_registro:id_registro
    },
    success:function(respuesta){
        var array=eval(respuesta);
        $("#ide").val(array[0]);
        $("#idNombre").val(array[1]);
        $("#idApPaterno").val(array[2]);
        $("#idApMaterno").val(array[3]);
        // $("#activo").val(array[4]);
    },
    error:function(xhr,status){
        alert("error");
    }
});
};
</script>

</body>

</html>