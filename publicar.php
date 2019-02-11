<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="iso-8859-1">
    
    <meta  content='width=device-width, Initial-scale=1, maximun-scale=1' name='viewport'>
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/efectos.js"></script>
  <link rel="stylesheet" href="CSS/start.css">
  <link rel="stylesheet"  href="CSS/publicar.css">
  
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <title>Publica Gratis</title>
  </head>
<body>
	    <!--INICIO DEL ENCABEZADO-->

    <header class="encabezado">
      <div id="logo">
            <img src="imagenes/Titulo.gif" width="200" height="100">
      </div>
    </header>
</br>
                <!--NAV DEL MENU-->

    <nav class="menu">
  		<a href="index"><li class="izq">Inicio</li></a>
      	<a href="publicar"><li class="izq">¡PUBLICA GRATIS!</li></a>
        <a onclick="ventanas(1);" class="cursor"> <li class="rig">Iniciar sesion</li></a>
    </nav>
</br>
                <!--DIV DEL CUERPO (CENTRO DE LA PAGINA)-->

    <div class="cuerpo">
        <form  method="post" id="form" enctype="multipart/form-data">
        	<label>Categoria :</label>
        	<select name="lista_categoria" id="listaCategoria">
           <script type="text/javascript" src="js/listaCategoria.js"></script> 
          </select>
            
        	<label>pais :</label>
          <select name="lista_pais" id="listaPais">
            <script type="text/javascript" src="js/listaPais.js"></script> 
          </select>
           
        	<label>departamento :</label>
        	<select name="lista_departamento" id="listaDepartamento">
            <script type="text/javascript" src="js/listaDepartamento.js"></script> 
          </select>

            <label>Ciudad :</label>
          <select name="lista_ciudad" id="listaCiudad">
          <!--  <script type="text/javascript" src="js/listaCiudad.js"></script> -->
          </select>
        	
        	<label>Tutulo :</label>
        	<input type="text" name="titulo" id="titulo" maxlength="50">
        	
        	<label>Descripcion corta :</label>
        	<input type="text" name="titulo" id="titulo" maxlength="200">
        	
        	<label>Texto anuncio</label>
          <div class="contenedorCKeditor">
            <textarea class="ckeditor" id="ckeditor"></textarea>
          </div>
        	
        	
        	<label>Telefono :</label>
        	<input type="tel" name="numero" id="numero">
        	
        	<label>Web: </label>
        	<input type="url" name="web" id="web">
        	
        	<label>Correo: </label>
        	<input type="email" name="correo" id="correo">

          <label>fotos: </label>
          <input type="file" name="archivos[]" id="archivos[]" multiple="">
          <input type="submit" name="" value="Crear Anuncio">
        </form>
    </div>
</br>
                <!--PIE DE PAGINA-->

    <footer class="pie">

    </footer>
    <div id="cogebox" style="display:none">
                <!--DIV DEL LOGIN-->
        <div class="flotingid">
          	<a onclick="ventanas(2);" class="cursor"><h3 class="x-derecha">X</h3></a>
              <!-- FORMULARIO DE LOGIN-->
          	<form action="consulta.php" method="post" class="formulario">
                <h3>Usuario</h3>
                <input type="text" name="user" id="user" placeholder="Ingrese usuario"></input>
                <h3>contraseña</h3>
                <input type="password" name="pass" id="pass" placeholder="Ingrese contraseña"></input>
                <input type="submit" name="boton" value="Iniciar" class="cursor"></input>
         	</form>
        </div>
                <!--DIV DEL FONDO PARA EL LOGIN-->

        <div id="fondoNegro">

        </div>
                <!-- AQUI TERMINA LA COGEBOX-->
    </div>
                <!--TERMINA EL CUERPO-->
  </body>
</html>
