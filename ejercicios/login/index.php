<?php
// include 'global_seguridad/verificar_sesion_inicio.php';
// include 'conexion/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/a.ico" type="image/ico" />

	<title>Panel Admin </title>

	<!-- Bootstrap -->
	<link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
	<!-- bootstrap-progressbar -->
	<link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
	<!-- JQVMap -->
	<link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
	<!-- bootstrap-daterangepicker -->
	<link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="build/css/custom.min.css" rel="stylesheet">

  </head>

  <body class="nav-md">
	<div class="container body">
	  <div class="main_container">
		<div class="col-md-3 left_col">
		  <div class="left_col scroll-view">
			<div class="navbar nav_title" style="border: 0;">
			  <a href="index.php" class="site_title"><i class="fa "></i> <span>Panel Admin</span></a>
			</div>

			<div class="clearfix"></div>

			<!-- menu profile quick info -->
			<div class="profile clearfix">
			  <div class="profile_pic">
				<img src="images/p.jpg" alt="..." class="img-circle profile_img">
			  </div>
			  <div class="profile_info">
				<span>Bienvenido</span>
				
			  </div>
			</div>
			<!-- /menu profile quick info -->

			<br />


			<!-- /menu footer buttons -->
			<div class="sidebar-footer hidden-small" >
			  <a data-toggle="tooltip" data-placement="top" title="Cerrar Sesión" href="login.html">
				<span style="color:White" class="glyphicon glyphicon-off" aria-hidden="true"> Cerrar sesión</span>
			  </a>
			</div>
			<!-- /menu footer buttons -->
		  </div>
		</div>

		<!-- top navigation -->
		<div class="top_nav">
		  <div class="nav_menu">
			<nav>
			  <div class="nav toggle">
				<a id="menu_toggle"><i class="fa fa-bars"></i></a>
			  </div>
			  
			</nav>
		  </div>
		</div>
		<!-- /top navigation -->
		
		<!--Inicia captura FORMULARIO -->
		 <div class="right_col" role="main">

		  <!-- top tiles -->
		  <div class="row tile_count">
		  </div>
		  <!-- /top tiles -->
		
		  <div class="row">
			 
<div class="row text-center">
	   <div class="col-md-12">
	   <a href="Personas/index.php"> 	
  <button type="button" class="btn btn-primary" class="btn btn-default btn-lg" style = "font-size: 60px" >
    <span class="glyphicon glyphicon-user"></span> Personas
  </button>
	   </a>
		 
	   </div>
  </div>
  <br>  <br>  <br> <br> <br>
  <div class="row text-center">
	   <div class="col-md-12">
	   <a href="Citas/index.php">
	   <button type="button" class="btn btn-primary" class="btn btn-default btn-lg" style = "font-size: 70px">
    <span class="glyphicon glyphicon-calendar"></span> Clientes 
  </button>
	   	 
	   </a>
		 
	   </div>
  </div> 
  <br>  <br>  <br> <br> <br>
  <div class="row text-center">
	   <div class="col-md-12">
	   <a href="Usuarios/index.php">
	   <button type="button" class="btn btn-primary" class="btn btn-default btn-lg" style = "font-size: 60px">
    <span class="glyphicon glyphicon-ok-sign"></span> Factura
  </button>
	   	 
	   </a>
		 
	   </div>
  </div> 
  <br>  <br>  <br> <br> <br>
  <br>  <br>  <br> <br> <br>
  <br>  <br>  <br> <br> <br>
  <br>  <br>  <br> <br> <br>
  <br>  <br>  <br> <br> <br>
		  </div>

	  </div>
	</div>
 </form>


	<!-- jQuery -->
	<script src="vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="vendors/nprogress/nprogress.js"></script>
	<!-- Chart.js -->
	<script src="vendors/Chart.js/dist/Chart.min.js"></script>
	<!-- gauge.js -->
	<script src="vendors/gauge.js/dist/gauge.min.js"></script>
	<!-- bootstrap-progressbar -->
	<script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- iCheck -->
	<script src="vendors/iCheck/icheck.min.js"></script>
	<!-- Skycons -->
	<script src="vendors/skycons/skycons.js"></script>
	<!-- Flot -->
	<script src="vendors/Flot/jquery.flot.js"></script>
	<script src="vendors/Flot/jquery.flot.pie.js"></script>
	<script src="vendors/Flot/jquery.flot.time.js"></script>
	<script src="vendors/Flot/jquery.flot.stack.js"></script>
	<script src="vendors/Flot/jquery.flot.resize.js"></script>
	<!-- Flot plugins -->
	<script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
	<script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
	<script src="vendors/flot.curvedlines/curvedLines.js"></script>
	<!-- DateJS -->
	<script src="vendors/DateJS/build/date.js"></script>
	<!-- JQVMap -->
	<script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
	<script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
	<script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="vendors/moment/min/moment.min.js"></script>
	<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

	<!-- Custom Theme Scripts -->
	<script src="build/js/custom.min.js"></script>

	  <!--Formulario Personas-->
	 <script src="jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
