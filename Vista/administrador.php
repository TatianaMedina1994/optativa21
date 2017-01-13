<?php
	session_start();
	 
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	 
	} else {
	   echo "Esta pagina es solo para usuarios registrados.<br>";
	   echo "<br><a href='login.html'>Login</a>";
	   echo "<br><br><a href='index.html'>Registrarme</a>";
	 
	exit;
	}
?>
<html> 
<head> 
<title>App</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
</head> 
<body> <h1>Bienvenido al sistema!</h1> 
<h2>Usuario: <?php echo $_SESSION["username"]?> </h2><br> 
<h2>Tipo: <?php echo $_SESSION['tipo']?> </h2><br> 
<p>Entro correctamente al sistema.</p><br><br> 
<a href="salir.php">Salir</a> 
</body> 
</html>