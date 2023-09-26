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
    <link rel="stylesheet" href="Milista.css">
    <title>Mi lista |</title>
</head>
<body>
    <nav id="barra">
        <h3 id="titulo">E-BOOK</h1> 
        <div class="btn">
            <a id="a1" href="../Login/pantalla_prinicipal/principal.php"   target="_parent">Inicio     </a>
            <a id="a2" href="http://localhost/poo/MIlista/Milista.php"                   target="_parent">Mi lista   </a>
            <a id="a3" href="../Login/inicio%20de%20sesión/controlador_cerrarsesion.php"      target="_parent">Salir de la sesión </a>
            <a id="a4" href="http://localhost/poo/PERFIL/usuario.html"                  target="_parent">
                <?php   
                echo $_SESSION['nombre'];
                ?>
                </a>
        </div>     
    </nav>

    <p id="texto"><b>
        ¡Libros reservados, leidos o por leer!
    </b></p>
    <h1>LIBROS LEIDOS</h1>

    <div class="lb1">
        <div class="imagen1">
            <a  class="l1" href="../mostrar%20libro/libro.php">
                <img id="libro1" src="../Libros/images/el ladron del rayo.png" alt="">
            </a>
        </div>
        <div class="text1">
            <b>Descripción:</b> El ladrón del rayo es un libro escrito por Rick Riordan. Es el primer libro de la serie Percy Jackson y los dioses del Olimpo, que cuenta 
            las aventuras de un chico actual de doce años, Percy Jackson, cuando descubre que es un semidiós; el hijo de una mortal, Sally Jackson, y 
            del dios griego, Poseidón.
            <br>
            <br>
            <b>Autor:</b> Rick Riordan
            <br>
            <br>
            <b>Fecha de publicación:</b> 28 de junio de 2005
            <br>
            <br>
            <b>Generos: </b>Mitología griega, Novela, Género fantástico, Ficción adulto joven, Literatura fantástica, Alta fantasía
        </div>
    </div>


    <div class="lb1">
        <div class="imagen1">
            <a  class="l1" href="../Libros/Viaje al centro de la tierra/libro2.php">
                <img id="libro1" src="../Libros/images/img/m.jpg" alt="">
            </a>
        </div>
        <div class="text1">
            <b>Descripción:</b> Relata la expedición del profesor Lidenbrock, su sobrino Axel y un guía llamado Hans, hacia 
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
        </div>
    </div>
    <div class="lb1">
        <div class="imagen1">
            <a  class="l1" href="../Libros/medallon de fuego/medallon.php">
                <img id="libro1" src="../images/img/z.jpg" alt="">
            </a>
        </div>
        <div class="text1">
            <br>
                <b>Descripción</b><br>
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
    </div>
    <div class="lb1">
        <div class="imagen1">
            <a  class="l1" href="../Libros/Diario de Ana/Diario.php">
                <img id="libro1" src="../images/img/k.jpg" alt="">
            </a>
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
    </div>
    <div class="lb1">
        <div class="imagen1">
            <a  class="l1" href="../Libros/Manipulación/manipulación.php">
                <img id="libro1" src="../images/img/r.jpg" alt="">
            </a>
        </div>
        <div class="text1">
            <b>Descripción:</b> El ladrón del rayo es un libro escrito por Rick Riordan. Es el primer libro de la serie Percy Jackson y los dioses del Olimpo, que cuenta 
            las aventuras de un chico actual de doce años, Percy Jackson, cuando descubre que es un semidiós; el hijo de una mortal, Sally Jackson, y 
            del dios griego, Poseidón.
            <br>
            <br>
            <b>Autor:</b> Rick Riordan
            <br>
            <br>
            <b>Fecha de publicación:</b> 28 de junio de 2005
            <br>
            <br>
            <b>Generos: </b>Mitología griega, Novela, Género fantástico, Ficción adulto joven, Literatura fantástica, Alta fantasía
        </div>
    </div>
</body>
</html>