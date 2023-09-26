<?php
include 'conexion.php';

class genero{
    public $genero;
    const TABLA = 'genders';

    public function __construct($genero) {
        $this->genero = $genero;
    }

    function guardar(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare("INSERT INTO ".self::TABLA."(`gen_gender`) VALUES (:gender)");
        $consulta->bindParam(':gender',$this->genero);
        $consulta->execute();
    }

    function mostrar(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare("SELECT * FROM ".self::TABLA);
        $consulta->execute();
        $resultados = $consulta->fetchAll();
        return $resultados;
    }

    function encontrar($id){
        $conexion = new Conexion();
        $consulta = $conexion->prepare("SELECT * FROM ".self::TABLA." WHERE gen_id=".$id);
        $consulta->execute();
        $resultados = $consulta->fetchAll();
        return $resultados[0];
    }

    function cambiar($id, $nombre){
        $conexion = new Conexion();
        $consulta = $conexion->prepare("UPDATE ".self::TABLA." SET `gen_gender`='$nombre' WHERE gen_id=".$id);
        $consulta->execute();
    }

    function eliminar($id){
        $conexion = new Conexion();
        $consulta = $conexion->prepare("DELETE from ".self::TABLA." WHERE gen_id=".$id);
        $consulta->execute();
    }
}
?>