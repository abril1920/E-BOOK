<?php   
    if(isset($_POST['submit'])){

        $nombre     = $_POST['nombre'];
        $edad       = $_POST['edad'];
        $email      = $_POST['email'];
        $apodo      = $_POST['apodo'];
        $clave      = $_POST['clave'];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    
    <title>Registrate |</title>
</head>
<body>
    <div id="titulo">
        <h1 id="tit1">E-BOOK</h1>
    </div>

    <div id="container">
    <p id="texto">
        Bienvenido a la página online de  <b> E-BOOK.</b>
        <br>
        <br>
        Podrás encontrar y adquirir una variedad de libros de acuerdo a tu gusto.
        <br>
        regístrate y conoce mas de nosotros 
    </p>
    <div id="config-form">
        <form  method="post" >
            <div class="input-group">
                <h2 id="pti">REGISTRO DE DATOS</h2>      
                <label for="Nombre">    Nombre:  </label> <input type="text" name="nombre" id="nombre"  placeholder="Nombre"
                value="<?php 
                if(isset($nombre)) echo $nombre;
                ?>"> 
                <label for="Edad">      Edad:    </label>   <input type="number"  name="edad"     placeholder="Edad"
                value="<?php 
                if(isset($edad)) echo $edad;
                ?>"> >
                <label for="Email">     Email:   </label>   <input type="email"   name="email"    placeholder="Email"
                value="<?php 
                if(isset($email)) echo $email;
                ?>"> >
                <label for="Apodo">     Apodo:   </label>   <input type="text"    name="apodo"    placeholder="Apodo"
                value="<?php 
                if(isset($apodo)) echo $apodo;
                ?>"> >
                <label for="Clave" >Contraseña:</label>     <input type="password"   name="clave"placeholder="Contraseña"
                value="<?php 
                if(isset($clave)) echo $clave;
                ?>"> >
                <div class="form-txt">
                    <a href="#">Politicas y privacidad</a>
                    <a href="#">Terminos y condiciones</a>
                </div>
                <input class="btn" type="submit" value="Enviar" name="submit"  >
            </div>
            <?php
                include ('../Login/Registros/registro.php')
            ?>
        </form>
        
        
    </div>
</div>  
</body>
</html>