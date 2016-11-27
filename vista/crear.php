<html>
    <head>
        <title>Crear cuenta</title>
        <meta charset= "UTF-8">
        <link href ="css/login.css" rel ="stylesheet" type ="text/css">
    </head>
    <body>       
    <center><h1>Registrarte Gratis</h1>
        <div class ="login">
            <form  method ="POST">
            <fieldset>
                <legend>Crear cuenta</legend> 
            <table>
                <tr>
                    <td><input title="Es necesario un numero de identificación" type="text" class ="pass" id ="cedula" placeholder="Identificación" required></td>
                </tr>
                <tr>
                    <td><input title="Es necesario un nombre de usuario" type="text" class ="pass" id ="nombre" placeholder="Nombre" required> <input title="Campo obligatorio" class ="pass" type="text" id ="apellido" placeholder="Apellido" required></td>
                </tr>
                <tr>
                    <td><input title="Campo obligatorio" type ="text" id = "usuario" class ="pass" placeholder ="Nombre de usuario" required></td>
                </tr>
                <tr>
                    <td><input title ="Campo obligatorio" class="pass" type ="password" id ="pass1" placeholder="Contraseña" required></td>
                </tr>
                <tr>
                    <td><input title ="Campo obligatorio" class="pass" type ="password" id ="pass2" placeholder="Verificar Contraseña" required></td>
                </tr>
                <tr>
                    <td><p id="mensaje"></p></td>
                </tr>
            </table>   
                <button type="button" id="registrar">Registrar</button>
              </fieldset>
            </form>
        </div>
        </center>
    </body>
    <script src="../js/jquery.js"></script>
<script src="../js/operaciones.js"></script>
</html>
