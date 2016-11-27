<?php
session_start();
if(isset ($_SESSION['validacion']) && $_SESSION['validacion'] == 1) {
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar Deseos</title>
        <link rel="stylesheet" type ="text/css" href="css/delete_wish.css">
    </head>
    <body>
    <center>
        <a href ="menu.php" class = "uno">Volver...</a>       
    <div class ="delete">   
        <form name="eliminar">
            <h3 class = "title">¿Que Deseo Quieres Eliminar?</h3>
              <p>Titulo Del Deseo</p><input type = "text" id ="jax" name="title">
              <p id="mensaje" style="color: white;"></p>
              <table>
                 
                  <td><input type="reset" value="Limpiar" class ="uno"></td><td><button type="button" class ="uno" id="eliminar">Eliminar Deseo</button></td>
              </table>
        </form>     
    </div>  
    </center>
    
    <script src="../js/jquery.js"></script>
    <script src="../js/operaciones.js"></script>
    </body>
</html>
<?php
}else{ 
    echo "Debes iniciar sesion antes de acceder a esta pagina";  
}
?>
