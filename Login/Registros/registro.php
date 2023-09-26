<?php
 require_once 'tabla_db.php';

if(isset($_POST['submit'])){


    
    if(empty($nombre) or ($nombre) == " "){
        echo "<p id='error'> Agrega tu nombre </p>";
    }else{
        if(strlen($nombre) > 18){
            echo "<p id='error'> El nombre ingresado es demasiado largo</p>";
        }else{
            if(is_numeric($nombre)){
                echo "<p id='error'> No puedes agregar numeros</p>";
            }else{
                if (!empty($nombre) and !empty($edad) and !empty($email) and !empty($apodo) and !empty($clave)){
                    $personaje = new Personaje($_POST['nombre'],$_POST['edad'],$_POST['email'],$_POST['apodo'],$_POST['clave']);
                    $personaje->guardar();
                    echo $personaje->getNombre() . ' se ha registrado correctamente con el id: ' . $personaje->getId();
                    header('location: ../inicio%20de%20sesión/Inicio_sesion.php');
                }
            }
        }
    }

    if(empty($edad) or ($edad) == " "){
        echo "<p id='error'> Agrega tu edad </p>";
    }else{
        if(!is_numeric($edad)){
            echo "<p id='error'> agrega dato numerico </p>";
        }else{
            
        }
    }

    if(empty($email) or ($email) == " "){
        echo "<p id='error'> Agrega tu email </p>";
    }else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<p id='error'> El correo es incorrecto  </p>";
        }else{
            
        }
    }

    if(empty($apodo) or ($apodo) == " "){
        echo "<p id='error'> Agrega tu apodo </p>";
    }else{
        if(strlen($apodo) > 18 ){
            echo "<p id='error'> Ingresa un apodo </p>";
        }else{
            if(is_numeric($apodo)){
                echo "<p id='error'> No puedes agregar numeros</p>";
            }else{
                
            }
        }
    }

    if(empty($clave) or ($clave) == " "){
        echo "<p id='error'> Agrega tu contraseña </p>";
    }else{
        if ( strlen($clave) > 30 ){
            echo "<p id='error'> la contraseña es muy larga </p>";
        }else{
            
        }
    }




}
    

    

?>

<style>
    #error{
        font-size: 20px;
        text-align: start;
        margin: 3px;
        padding: 0;
        color:red;
    }
</style>