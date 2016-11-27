<?php
include('../modelo/conexion.php');

$titulo = $_POST['titulo'];

$var = new conexion();
$var->eliminarDeseo($titulo);
$var->cerrar();
?>