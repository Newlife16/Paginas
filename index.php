<!DOCTYPE html>
<?php require_once ('php/Conexion.php'); ?>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/fonts.css">
    <link rel="stylesheet" href="CSS/start.css">
    <link rel="stylesheet" href="CSS/contenedores.css">
    <script src="js/efectos.js"></script>
    <meta charset="iso-8859-1">
    <meta  content='width=device-width, Initial-scale=1, maximun-scale=1' name='viewport'>
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>PLANETSEX</title>
  </head>
  <body>
     <div id="cogebox" style="display:none">
      
    <!--DIV DEL LOGIN-->
    <div class="flotingid">
      <a onclick="ventanas(2);" class="cursor">
        <span class="x-derecha">X
        </span>
      </a>
      <!-- FORMULARIO DE LOGIN-->
    <form method="post"  class="formulario" id="fromlg" action="">
       <h3>Usuario</h3>
       <input type="text" name="user" id="user" placeholder="Ingrese usuario" required></input>
       <h3>contraseña</h3>
       <input type="password" name="pass" id="pass" placeholder="Ingrese contraseña"required></input>
    </br>
        <input type="submit" name="boton" value="Iniciar sesion" class="Botonlg"></input>
            <script src="js/Main.js"></script>
    </form>
    </div>
    <!--DIV DEL FONDO PARA EL LOGIN-->
    <div id="fondoNegro">
       <div class="Error">
          <span>Datos de ingreso no validos, intente lo de nuevo por favor</span>
        </div>
    </div>
    <!-- AQUI TERMINA LA COGEBOX-->
    </div>
    <div class="tituloA">
      <h1 >Agencias</h1>
    </div>
    <a onclick="ventanas(1);" class="cursor"> <li class="rigIndex">Iniciar sesion</li></a>
      <a href="publicar"> <li class="rigIndex">¡PUBLICA GRATIS!</li></a>
  <div class="main">
    <div class="slides">
      <img src="imagenes/1.jpg" alt="">
      <img src="imagenes/2.jpg" alt="">
      <img src="imagenes/3.jpg" alt="">
      <img src="imagenes/4.jpg" alt="">
      <aside class="">
        <!--metere un menu a la izquiera de top,acercadenosotros,agencias,chicasindependientes,gigolos etc
        -->
      </aside>
    </div>
  </div>
      <script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
      <script src="Slides-SlidesJS-3/source/jquery.slides.js" type="text/javascript"></script>
      <script type="text/javascript" src="js/Rotacion.js"></script>
  <div class="titulo1">
    <h1>Anuncios</h1>
  </div>
  <nav class="contendor">
    
    </div>
    <div class="contenedor">
      <h3>Masajes Eroticos</h3>
      <div class="contenedor" id="departamentosMasajes"></div>
    </div>
    <div class="contenedor">
      <h3>Gigolo</h3>
      <div class="contenedor" id="departamentosGigolo">
      </div>
    </div>
    <div class="contenedor">
      <h3>Transexual</h3>
      <div class="contenedor" id="departamentosTra"></div>
    </div>
    <div class="contenedor">
      <h3>Videos</h3>
      <div class="contenedor" id="departamentosVideos"></div>
    </div>
    <div class="contenedor">
      <h3>Scort</h3>
      <div class="contenedor"   id="departamentosScort">
          <script src="js/Departamentos.js"></script>
      </div>
  </nav>
  <footer class="titulo1">
    <h1>Contactanos</h1>
  </footer>
</body>
</html>
