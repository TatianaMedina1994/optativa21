<?php 
session_start();
$nom = $_POST['usuario']; 

$pwd = $_POST['clave'];

$con = mysql_connect('localhost','root','')or die ('Ha fallado la conexi&oacute;n: '.mysql_error()); 

mysql_select_db('escuela')or die ('Error al seleccionar la Base de Datos: '.mysql_error()); 

$query1 = mysql_query("select * from docentes where Email='".$nom."' and Password='".$pwd."'"); 

$tipo=mysql_query("select * from docentes where Email='".$nom."' and Password='".$pwd."'"); 

$Result1= mysql_fetch_row($query1); 
$Result2= mysqli_fetch_array($tipo);

if($Result1>0){ 
    
    $_SESSION['loggedin'] = true;
	    $_SESSION['username'] = $nom;
            $_SESSION['tipo']=$Result2[0];
            
                    echo "Bienvenido! administrador " . $_SESSION['username'] .$_SESSION['tipo'];
            
	echo "<script>window.location='../Vista/administrador.php';</script>";
        
	 
}
        else{
                
echo "<script>alert('Nombre o password Incorrecto, verifique...');window.location='../Vista/correo.php';</script>"; 
session_destroy(); 
        }
    
?> 
