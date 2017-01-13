<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
     
      <li class="active"><a class="dropdown-button" href="#!" data-activates="dropdown1">Quienes Somos<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="../Vista/correo.php">Correo institucional</a></li>
      <!-- Dropdown Trigger -->
    </ul>
  </div>
</nav>
    <br><br>
    
  
 
  <div class="container" style=" width: 1100px; ">
      
      
      <div class="section"  style="margin-top: 20px;">

      <!--   Icon Section   -->
      <div class="row" >
       <div class="col s6"  >        
           <img class="materialboxed" width="550" style="margin-left: 30px;" src="../imagenes/8.jpg"> <!-- random image -->
          
        </div>

      
          <div class="col s6" style="width: 450px; margin-left: 100px; margin-top: 5px;" >        
              <h5 class="center blue darken-4 white-text" style="margin-left: -50px;height: 50px; padding-top: 10px; padding-bottom: 10px;margin-bottom: -10px; "><marquee>Visión</marquee></h5>
            
            <p class="card-panel large red lighten-3 " style="margin-left: -50px; text-align: justify; font-size: 16px;">
          La Unidad Educativa “CRISTOBAL DE TROYA " tiene como visión ser centro líder del ínter aprendizaje con un desarrollo integral,  promoviendo la formación científica y humanística de sus estudiantes brindando alternativas de innovación pedagógicas, para que con alta conciencia ciudadana promuevan el progreso institucional, comunitario y del país para alcanzar el Buen Vivir.
            </p>
          
        </div>
      </div>

    </div>
    <br><br>

    <div class="section">
        <br>
    </div>
  </div>

  <footer class="page-footer red">
    <div class="container">
        
      <div class="row">
        <div style="height: 130px;">
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
        $('.carousel').carousel();
        
      });
  </script>

  </body>
</html>

