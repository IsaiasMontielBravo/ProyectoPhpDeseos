<?php
session_start();
if(isset ($_SESSION['validacion']) && $_SESSION['validacion'] == 1) {
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar Deseos</title>
        <link rel="stylesheet" type ="text/css" href="css/wish_list.css">
        <link rel="stylesheet" type ="text/css" href="css/tabla.css">
    </head>
    <body>
    <center>
        <a href ="menu.php" class = "uno">Volver...</a>    
    <div class ="maik">   

            <h3 class = "title">Lista De Tus Deseos...</h3>
            <?php
                include ("../modelo/conexion.php");
                $wish = new conexion(); 
            ?>
            <table id="tabla">
                <tr>
                    <th>TITULO</th><th>DESCRIPTION</th>
                </tr>
           <?php
           $wish->listarDeseos(); 
           ?>
            </table>
    </div>  
    </center>
    </body>
</html>
<?php
}else{
    echo "Debes iniciar sesion antes de entrar a esta pagina";
}

?>



