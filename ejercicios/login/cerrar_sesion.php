<?php
session_name("registroCC");
session_start();

	$_SESSION["registroCC_autenticado"] = "NO";
	 echo"<script language=\"javascript\">window.location=\"index.php\"</script>";
 ?>