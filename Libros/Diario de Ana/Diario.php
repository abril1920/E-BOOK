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
    <link rel="stylesheet" href="Diario de ana frank.css">
    <title>Diario de Ana Frank</title>
</head>
<body>  
    <div     id="barra">
        <h3  id="titulo">E-BOOK</h1> 
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




            <h1>Diario de Ana Frank</h1>
        <div id="info_libro">     
            <div class="ima1">
                <img id="imagen1" src="../images/img/k.jpg" alt="libro: viaje al centro dela tierra">
            </div>
            <div class="text1">
                <b>Descripción:</b> 
                <br>
                El diario de Ana Frank, es la historia de un niña judía de trece años que nos cuenta, la invación de los nazis en 
                Holanda, y como ocho personas se escondieron en una buhardilla de unas grandes oficinas, durante dos años, desde junio 
                del 1942 hasta agosto de 1944.
                <br>
                <br>
                <b>Autor:</b> Ana Frank
                <br>
                <br>
                <b>Fecha de publicación:</b> 27 de junio de 1947
                <br>
                <br>
                <b>Generos: </b>Biografía, Autobiografía, Narrativa personal, Literatura judía  
                <br>
                <br>
                <b>Idioma original: </b>Neerlandés
                <br>
                <br>
                <b>Ambientada en: </b>Casa de Ana Frank
                <br>
                <br>
                <b>Editor(es): </b> Jan Romein
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