<?php
session_start();

if(!empty($_POST["btnIngresar"])){
    if (!empty($_POST['apodo']) and !empty($_POST['clave'])){
        $apodo=$_POST['apodo'];
        $clave  =$_POST['clave'];
        $sql= $conexion-> query(" select * from registros where apodo='$apodo' and clave='$clave' ");
        if($datos=$sql->fetch_object()){
            $_SESSION["id"]=$datos->id;
            $_SESSION["nombre"]=$datos->nombre;
            $_SESSION["email"]=$datos->email;
            header('location: ../pantalla_prinicipal/principal.php');
        }else{
            echo "<p id='error'> Acceso denegado </p>";
        }
    }else{
        echo "<p id='error'> Campos vacios </p>";;
    }
}
?>

<style>
    #error{
        font-size: 21px;
        margin: 3px;
        padding:0px;
        color: red;
    }
</style>