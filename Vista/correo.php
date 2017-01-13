
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Cristobal de Troya</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" />
  <link href="../css/style.css" type="text/css" rel="stylesheet" />
  <link href="../css/estilos.css" type="text/css" rel="stylesheet" />
</head>
<body class="blue lighten-5" style="background-image: url('../imagenes/fondo-azul.jpg')">
    <h3 id="uno">Unidad Educativa "Capitán Cristóbal de Troya"</h3>
    
   <ul id="dropdown1" class="dropdown-content">
       <li><a href="../Vista/mision.php">Misión</a></li>
   <li class="divider"></li>
   <li><a href="../Vista/vision.php">Visión</a></li>
  <li class="divider"></li>
  <li><a href="../Vista/resenia.php">Reseña Histórica</a></li>
</ul>
<nav>
    <div class="nav-wrapper" id="barra">
    <ul class="left hide-on-med-and-down">
        <li><a href="../index.html">Inicio</a></li>
     
      <li ><a class="dropdown-button" href="#!" data-activates="dropdown1">Quienes Somos<i class="material-icons right">arrow_drop_down</i></a></li>
      <li class="active"><a href="../Vista/correo.php">Correo institucional</a></li>
      <!-- Dropdown Trigger -->
    </ul>
  </div>
</nav>
    <br><br>
  
  <div class="container">
     
    <div class="section">
      <div class="row ">
        <div class="col s12 ">    
             
           <div id="login-page" class="row" style="margin-left: 90px; width: 800px; margin-top: -25px;">
               
    <div class="col s12 z-depth-6 card-panel">
       
        <form class="login-form" action="../Modelo/validar.php" method="post">
            
        <div class="row">
            
            <h5 class="center">Sistema de Notas</h5>
          <div class="input-field col s6 center">
             
              <img style="height: 170px; width: 170px; margin-left: -50px; margin-top: 40px;" src="../imagenes/login.png" alt="" class="responsive-img valign profile-image-login">
           
          </div>
            <div class="col s6" style="margin-left: -30px; margin-top: 40px;">
        
          <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input class="validate" id="email" type="email" name="usuario" required="true">
            <label for="email" data-error="wrong" data-success="right" >Email</label>
          </div>
       
          <div class="input-field col s12">
            <i class="material-icons prefix">lock</i>
            <input id="password" type="password" name="clave" required="true">
            <label for="password">Contraseña</label>
          </div>
       
        
          <div class="input-field col s12 center" >
              <input type="submit" name="Submit" value="Iniciar Sesión" class="btn waves-effect waves-light col s12" style="padding-top: 7px;" >
          </div>
        
        
          <div class="input-field col s6 right">
              <p class="margin right medium-small"><a href="forgot-password.html">Olvidaste tu contraseña?</a></p>
          </div>          
        
 </div>
      </form>
    </div>
  </div> 
        </div>
        
    
      </div>

    </div>
  </div>
  </div>

  <footer class="page-footer red">
    <div class="container">
        
      <div class="row">
          <div style="height: 130px;" >
          <h5 class="white-text ">Contáctenos</h5>
          
          <ul>
              <li ><img src="../imagenes/direccion-icono.png" alt="" class="lista1"> <a class="white-text"> Dirección: Barrio el Ejido, Calles 5 de junio y 8 de marzo</a></li>
              <li><img src="../imagenes/icono-telefono-azul.png"  alt="" class="lista1"><a class="white-text" > Teléfono:(06)2631420</a></li>
              <li><img src="../imagenes/email_14410.png"  alt="" class="lista1"><a class="white-text" >E-mail: sergjarabe@hotmail.com</a></li>
          </ul>
        </div>
      </div>
    </div>
      <div   class="footer-copyright">
      <div class="container">
      Realizado por: Tatiana Medina, Boonter Cabascango <a class="red white-text" ></a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script >
       $(document).ready(function(){
        $('.button-collapse').sideNav();
      $(".dropdown-button").dropdown();
        
      });
  </script>

  </body>
</html>
