<?php


	session_start(); 


	if($_SESSION['validacion'] == 1){
?>


<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
</head>
<body>
<h1>Bienvenido Administrador</h1>
</body>
</html>

<?php 
}else{

	header("Location: login.php");
}


?>