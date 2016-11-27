<?php
session_start();
if(isset ($_SESSION['validacion']) && $_SESSION['validacion'] == 1) {
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar Deseos</title>
        <link rel="stylesheet" type ="text/css" href="css/edit_wish.css">
    </head>
    <body>
    <center>
        <a href ="menu.php" class = "uno">Volver...</a>    
    <div class ="maik">   
        <form action ="../controlador/editar.php" method ="POST">
            <h3 class = "title">Edita Tu Deseo...</h3>
            <p>Titulo Del Deseo</p><input title="Se necesita el titulo del deseo" type = "text" id ="jinx" name="title" required>
                <div><textarea name ="deseo" rows="14" cols="50"  id="area" title ="Ingresa el deseo " required  ></textarea></div>
                <p id="mensaje" style="color: blue;"></p>
                <input type="reset" value="Limpiar" class ="uno"> <button type="button" id="actualizar" class="uno">Actualizar Deseo</button>
        </form>     
    </div>  
    </center>
    <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/operaciones.js"></script>
    </body>
</html>
<?php 
}else{
    echo "Debes iniciar sesion antes de acceder a esta pagina";
}
?>