<?php
    session_start();
    if(empty($_SESSION['id'])){
        header("location: http://localhost/poo/inicio%20de%20sesión/Inicio_sesion.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manipulación.css">
    <title>Manipulación y Psicología oscura</title>
</head>
<body>  
    <div id="screen">
        <div id="barra">
            <h3 id="titulo">E-BOOK</h1> 
            <div class="btn">
            <a id="a1" href="Login/pantalla_prinicipal/principal.php"                  target="_parent">Inicio     </a>
            <a id="a2" href="http://localhost/poo/MIlista/Milista.php"                 target="_parent">Mi lista   </a>
            <a id="a3" href="../../Login/inicio%20de%20sesión/controlador_cerrarsesion.php"      target="_parent">Salir de la sesión </a>
            <a id="a4" href="http://localhost/poo/PERFIL/usuario.html"                  target="_parent">
            <?php   
            echo $_SESSION['nombre'];
            ?>
            </a>
            </div>   
        </div>      
        



            <h1>Manipulación y Psicología oscura</h1>
        <div id="info_libro">     
            <div class="ima1">
                <img id="imagen1" src="../images/img/r.jpg" alt="libro: viaje al centro dela tierra">
            </div>
            <div class="text1">
                <b>Descripción:</b> 
                <br>
                La psicología oscura puede entenderse como el estudio de la condición humana, en relación con la naturaleza psicológica de los 
                diferentes tipos de personas que se aprovechan de los demás. El hecho es que cada ser humano tiene el potencial de victimizar 
                a otras personas u otras criaturas vivientes. Sin embargo, debido a las normas sociales, la conciencia humana y otros 
                factores, la mayoría de los humanos tienden a contener sus impulsos oscuros y a evitar actuar por cada impulso que tienen. 
                Sin embargo, hay un pequeño porcentaje de la población que no puede controlar sus oscuros instintos y daña a otros de maneras 
                aparentemente inimaginables.
                <br>
                <br>
                <b>Autor:</b> Alejandro Mendoza
                <br>
                <br>
                <b>Fecha de publicación:</b> 26 de octubre del 2019
            </div>
            <div id="pedir_libro">
                <a id="pd" href="" target="_parent">Pedir libro ahora</a>
            </div>
        </div>
    </div>
</body>
</html>
    
</body>
</html>