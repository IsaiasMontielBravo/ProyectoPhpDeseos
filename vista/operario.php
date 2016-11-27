<?php


	session_start(); 


	if($_SESSION['validacion'] == 1){
?>


<!DOCTYPE html>
<html>
<head>
	<title>Operario</title>
</head>
<body>
<h1>Bienvenido Operario</h1>
</body>
</html>

<?php 
}else{

	header("Location: login.php");
}


?>