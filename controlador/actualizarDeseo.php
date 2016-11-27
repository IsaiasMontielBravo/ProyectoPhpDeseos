<?php
include('../modelo/conexion.php');
$titulo = $_POST['titulo'];
$des = $_POST['des'];

$var = new conexion();
$var->modificarDeseo($titulo, $des);
$var->cerrar();
?>