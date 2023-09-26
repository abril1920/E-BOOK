<?php
 require_once 'registros.php';
 
    $registro = new Registro($_POST['nombre'],$_POST['edad'],$_POST['email'],$_POST['apodo'],$_POST['contraseña']);
    $registro->guardar();
    echo $registro->getNombre() . ' se ha guardado correctamente con el id: ' . $registro->getId();
?>