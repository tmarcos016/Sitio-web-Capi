
<!DOCTYPE HTML>
<html>
<head>
<title>Enviar correo</title>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
</head>
<body>
<!--coact start here-->
<h1>Formulario de contacto</h1>
<div class="contact">
	<div class="contact-main">
	<form method="post">
		<h3>Tu correo electrónico</h3>
		<input type="email" placeholder="ejemplo@email.com" class="hola"  name="customer_email" required />
		
		<h3>Tu nombre</h3>
		<input type="text" placeholder="Nombre" class="hola"  name="customer_name" required />
		<h3>Asunto</h3>
		<input type="text" placeholder="Asunto" class="hola"  name="subject" required />
		<h3>Mensaje</h3>
		<textarea  name="message" placeholder="Redacta tu  mensaje ...." required ></textarea>
		<?php
			if (isset($_POST['send'])){
				include("sendemail.php");//Mando a llamar la funcion que se encarga de enviar el correo electronico
				
				/*Configuracion de variables para enviar el correo*/
				$mail_username="juegasjuegos123@gmail.com";//Correo electronico saliente ejemplo: tucorreo@gmail.com
				$mail_userpassword="juegos123";//Tu contraseña de gmail
				$mail_addAddress="juegasjuegos123@gmail.com";//correo electronico que recibira el mensaje
				$template="email_template.html";//Ruta de la plantilla HTML para enviar nuestro mensaje
				
				/*Inicio captura de datos enviados por $_POST para enviar el correo */
				$mail_setFromEmail=$_POST['customer_email'];
				$mail_setFromName=$_POST['customer_name'];
				$txt_message=$_POST['message'];
				$mail_subject=$_POST['subject'];
				
				sendemail($mail_username,$mail_userpassword,$mail_setFromEmail,$mail_setFromName,$mail_addAddress,$txt_message,$mail_subject,$template);//Enviar el mensaje
			}
		?>
	</div>
	<div class="enviar">
		<div class="contact-check">
			
		</div>
        <div class="contact-enviar">
		  <input type="submit" value="Enviar mensaje" name="send">
		</div>
		<div class="clear"> </div>
		</form>
</div>
</div>

<!--contact end here-->
</body>
</html>