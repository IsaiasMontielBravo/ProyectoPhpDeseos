<?php

require("../modelo/conexion.php");

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

$object = new conexion(); 
$object -> registrar_usuario($cedula, $nombre, $apellido, $usuario, $pass1, $pass2);
$object -> cerrar();


?>