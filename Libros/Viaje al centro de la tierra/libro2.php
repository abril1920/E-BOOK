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
    <link rel="stylesheet" href="viaje.css">
    <title>Viaje al centro de la tierra</title>
</head>
<body>  
    <div id="screen">
        <div id="barra">
            <h3 id="titulo">E-BOOK</h1> 
            <div class="btn">
            <a id="a1" href="Login/pantalla_prinicipal/principal.php"                  target="_parent">Inicio     </a>
            <a id="a2" href="http://localhost/poo/MIlista/Milista.php"                 target="_parent">Mi lista   </a>
            <a id="a3" href="../../Login/inicio%20de%20sesión/controlador_cerrarsesion.php"     target="_parent">Salir de la sesión </a>
            <a id="a4" href="http://localhost/poo/PERFIL/usuario.html"                  target="_parent">
            <?php   
            echo $_SESSION['nombre'];
            ?>
            </a>
            </div>
        </div>      
        



            <h1>Viaje al centro de la Tierra</h1>
        <div id="info_libro">     
            <div class="ima1">
                <img id="imagen1" src="../images/img/m.jpg" alt="libro: viaje al centro dela tierra">
            </div>
            <div class="text1">
                <b>Descripción:</b> 
                <br>
                Relata la expedición del profesor Lidenbrock, su sobrino Axel y un guía llamado Hans, hacia 
                el mismísimo centro del planeta. Hamburgo, Islandia, Reikiavik, volcán Snæfellsjökull, centro de la tierra, 
                isla de Estrómboli e Italia.
                <br>
                <br>
                <b>Autor:</b> Julio Verne
                <br>
                <br>
                <b>Fecha de publicación:</b> 25 de noviembre de 1984
                <br>
                <br>
                <b>Generos: </b>Mundo perdido, ficción subterránea, novela científica y ficción de aventuras
                <br>
                <br>
                <b>Ilustrador: </b>Riou 
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