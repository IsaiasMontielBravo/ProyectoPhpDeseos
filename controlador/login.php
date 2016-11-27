<?php
include("../modelo/conexion.php");

$user = $_POST['correo'];
$pass = $_POST['clave']; 

$wish = new conexion; 
$wish->login($user, $pass);
$wish->cerrar(); 


?>