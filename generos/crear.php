<?php
include_once 'genero.php';

$nombre = $_POST['nombre'];

$genero = new Genero($nombre);

$genero->guardar();
header("Location: mostrar.php");
?>