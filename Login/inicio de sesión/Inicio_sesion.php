
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicio_sesion.css">
    <title>Inicia Sesión |</title>
</head>
<body>
    <div id="titulo">
        <h1 id="tit1">E-BOOK</h1>
    </div>

    <div id="container">
    <p id="texto"><b>
        ¡Hola! como estas ?
        <br>
        <br>
        Que deseas leer el dia de hoy?.
        <br>
    </b>
    </p>
    <div id="config-form">
        <form action="" method="post" >
            <div class="input-group">
                <h2 id="pti">Inicio de sesión</h2> 
                <?php
                include "modelo/conexion.php";
                include "controlador_inicio.php";
                ?>    
                <label for="apodo">      Apodo   </label> <input type="text"    name="apodo"    placeholder="Apodo">
                <label for="clave">Contraseña</label><input type="password"   name="clave"placeholder="Contraseña">
                <div class="form-txt">
                    <a href="#">Politicas y privacidad</a>
                    <a href="#">Terminos y condiciones</a>
                </div>
                <input class="btn" type="submit" value="Entrar" name="btnIngresar">
            </div>
        </form>
                
    </div>
</div>  
</body>
</html>