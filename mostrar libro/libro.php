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
    <link rel="stylesheet" href="libro.css">
    <title>Percy Jackson</title>
</head>
<body>  
    <div id="screen">
        <div id="barra">
            <h3 id="titulo">E-BOOK</h1> 
            <div class="btn">
                <a id="a1" href="../Login/pantalla_prinicipal/principal.php"   target="_parent">Inicio     </a>
                <a id="a2" href="../MIlista/Milista.php"                 target="_parent">Mi lista   </a>
                <a id="a3" href="../Login/inicio%20de%20sesión/controlador_cerrarsesion.php"           target="_parent">Salir de la sesión </a>
                <a id="a4" href="http://localhost/poo/PERFIL/usuario.html"                  target="_parent">
            <?php   
            echo $_SESSION['nombre'];
            ?>
            </a>
            </div> 
        </div>   
        
            <h1>Percy Jackson</h1>
        <div id="info_libro">     
            <div class="ima1">
                <img id="imagen1" src="../images/el ladron del rayo.png" alt="libro: percy jackson">
            </div>
            <div class="text1">
                <b>Descripción:</b> 
                <br>
                El ladrón del rayo es un libro escrito por Rick Riordan. Es el primer libro de la serie Percy Jackson y los dioses del Olimpo, que cuenta 
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
            <div id="pedir_libro">
                <a id="pd" href="" target="_parent">Pedir libro ahora</a>
            </div>
        </div>
    </div>
</body>
</html>
    
</body>
</html>