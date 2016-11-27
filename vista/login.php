<?php
	session_start();
	session_destroy();
?>

<html>
<head>
	<meta charset = "UTF-8">
	<title>Inicio</title>
	<link href = "css/login.css" rel = "stylesheet" type = "text/css">
</head>
<body>

<section id= "formulario">
	<center>
			<h1>Iniciar Sesión<h1>
			<br><br>
			<div class = "login">
			<form action = "../controlador/login.php" method = "POST">

			<fieldset>
				<legend>Login</legend>

				<p>
						<input type = "text"  class="correo"  placeholder = "Usuario" title = "Se nesecita un usuario" required>
				</p>

				<p>
						<input type = "password" class="clave" placeholder = "Contraseña" title = "Se nesecita una contraseña" required>
				</p>
				<p>
						<button type="button" id="envia">Entrar</button>
						<input type = "reset" value ="Limpiar">
				</p>
				

				<p id="mensaje" style="color: red;"></p>
				<p>
				<a href = "crear.php">
					Crear Cuenta
				</a>
				</p>



			</fieldset>
			</form>
			</div>


	</center>
</section>
</body>

<script src="../js/jquery.js"></script>
<script src="../js/operaciones.js"></script>

</html>