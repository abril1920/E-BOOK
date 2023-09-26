<?php
    session_start();
    if(empty($_SESSION['id'])){
        header("location: ../pantalla_prinicipal/principal.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"   content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="prinicipal.css">
    <script src="https://kit.fontawesome.com/e61378a64f.js" crossorigin="anonymous"></script>
    <title>Principal |</title>
</head>
<body> 
    <div     id="barra">
        <h3  id="titulo">E-BOOK</h1> 
        <div class="btn">
            <a id="a1" href="../pantalla_prinicipal/principal.php"            target="_parent">Inicio     </a>
            <a id="a2" href="http://localhost/poo/MIlista/Milista.php"                 target="_parent">Mi lista   </a>
            <a id="a3" href="../inicio%20de%20sesión/controlador_cerrarsesion.php"      target="_parent">Salir de la sesión </a>
            <a id="a4" href="http://localhost/poo/PERFIL/usuario.html"                  target="_parent">
            <?php   
            echo $_SESSION['nombre'];
            ?>
            </a>
        </div>     
    </div>
    

    <div class="carusel">
        <h2 class="titulo1" >Nuevos Libros</h2>
        <div id="conteItemsCarrusel">
         
            <div class="itemcarrusel"           id="itemcar1">    
                <div class="tarjetacarrusel"    id="tarjetacar1">
                    <a  class="l1" href="../Libros/images/el_ladr">
                        <img id="libro1" src="../images/el ladron del rayo.png" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/a.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/aa.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/b.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/bb.jpg" alt="">
                    </a>
                </div>

                <div    class="flechascarrusel">
                    <a  href="#itemcar3">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <a  href="#itemcar2">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>




            <div     class="itemcarrusel"       id="itemcar2">
                <div class="tarjetacarrusel"    id="tarjetacar2">
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/c.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/d.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/e.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/f.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/g.jpg" alt="">
                    </a>   
                </div>
                <div   class="flechascarrusel">
                    <a href="#itemcar1">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <a  href="#itemcar3">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>




            <div     class="itemcarrusel"       id="itemcar3" >
                <div class="tarjetacarrusel"    id="tarjetacar3">
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/h.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/i.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/j.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/k.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/l.jpg" alt="">
                    </a>
                </div>
                <div   class="flechascarrusel">
                    <a href="#itemcar2">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <a  href="#itemcar1">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div> 
    






    <div class="carusel">
        <h2 class="titulo1" >Acción</h2>
        <div id="conteItemsCarrusel">
            <div class="itemcarrusel"       id="itemcar4">
                <div class="tarjetacarrusel" id="tarjetacar4">
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/m.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/n.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/o.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/p.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/q.jpg" alt="">
                    </a>
                </div>
                <div class="flechascarrusel">
                    <a href="#itemcar6">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <a href="#itemcar5">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="itemcarrusel"   id="itemcar5">
                <div class="tarjetacarrusel" id="tarjetacar5">
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/r.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/s.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/t.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/u.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/v.jpg" alt="">
                    </a>

                </div>
                <div class="flechascarrusel">
                    <a href="#itemcar4">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <a href="#itemcar6">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="itemcarrusel"  id="itemcar6" >
                <div class="tarjetacarrusel" id="tarjetacar6">
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/w.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/x.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/y.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/z.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/ñ.jpg" alt="">
                    </a>
    
                </div>
                <div class="flechascarrusel">
                    <a href="#itemcar5">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <a href="#itemcar4">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div> 








    <div class="carusel">
        <h2 class="titulo1" >Al parecer esto te puede interesar</h2>
        <div id="conteItemsCarrusel">
            <div class="itemcarrusel"       id="itemcar7">
                <div class="tarjetacarrusel" id="tarjetacar7">
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/harry.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/a.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/j.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/f.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/ñ.jpg" alt="">
                    </a>
             
                </div>
                <div class="flechascarrusel">
                    <a href="#itemcar9">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <a href="#itemcar8">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="itemcarrusel"   id="itemcar8">
                <div class="tarjetacarrusel" id="tarjetacar8">
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/aa.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/r.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/el ladron del rayo.png" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/x.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/u.jpg" alt="">
                    </a>
                 
                </div>
                <div class="flechascarrusel">
                    <a href="#itemcar7">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <a href="#itemcar9">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="itemcarrusel"  id="itemcar9" >
                <div class="tarjetacarrusel" id="tarjetacar9">
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/h.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/i.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/j.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/k.jpg" alt="">
                    </a>
                    <a  class="l1" href="http://localhost/poo/mostrar%20libro/libro.html">
                        <img id="libro1" src="../images/img/l.jpg" alt="">
                    </a>
                </div>
                <div class="flechascarrusel">
                    <a href="#itemcar8">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <a href="#itemcar7">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div> 
    

</body>
</html>