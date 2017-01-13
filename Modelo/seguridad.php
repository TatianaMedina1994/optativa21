<?php
@session_start();

if($_SESSION["autentica"] != "SIP"){
	header("Location: ../Vista/correo.php");
	exit();
}
?>


