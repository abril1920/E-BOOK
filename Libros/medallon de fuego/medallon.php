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
    <link rel="stylesheet" href="medallon.css">
    <title>Medallon de Fuego</title>
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
        



            <h1>Medallon de Fuego</h1>
        <div id="info_libro">     
            <div class="ima1">
                <img id="imagen1" src="../images/img/z.jpg" alt="libro: viaje al centro dela tierra">
            </div>
            <div class="text1">
                <b>Descripción:</b> 
                <br>
                Madrid, actualidad.Ana García-Brest, experta en arte, recibe la  llamada de Martin, el joven y misterioso buscador de tesoros 
                a quien  conoció fugazmente durante la búsqueda de El Astrólogo en La Tabla Esmeralda. Han asesinado a un magnate italiano y 
                un poderoso tesoro está en peligro: el Medallón de Hiram, una reliquia mágica que  perteneció al arquitecto del templo de Salomón. 
                Nadie conoce el   paradero exacto de la pieza y Martin necesita la ayuda de Ana para  encontrarla. Ambos emprenderán una trepidante 
                búsqueda por toda  Europa  enfrentándose a infinidad de peligros, pues muy pronto descubrirán que  ellos no son los únicos que desean 
                hacerse con la reliquia.
                <br>
                <br>
                <b>Autor:</b> Carla Montero
                <br>
                <br>
                <b>Fecha de publicación:</b> 14 de octubre del 2021
                <br>
                <br>
                <b>Generos: </b>Ficción
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