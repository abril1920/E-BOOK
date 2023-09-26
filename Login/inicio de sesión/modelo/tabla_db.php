<?php

 class Personaje {
   private $id;
   private $nombre;
   private $edad;
   private $email;
   private $apodo;
   private $clave;
   const TABLA = 'registros';

   public function getId() {
      return $this->id;
   }

   public function getNombre() {
      return $this->nombre;
   }
   public function getEdad() {
      return $this->edad;
   }
   public function getEmail() {
      return $this->email;
   }
   public function getApodo() {
      return $this->apodo;
   }
   public function getClave() {
      return $this->clave;
   }

   public function setNombre($nombre) {
      $this->nombre = $nombre;
   }
   public function setEdad($edad) {
      $this->edad = $edad;
   }
   public function setEmail($email) {
      $this->email =$email;
   }
   public function setApodo($apodo) {
      $this->apodo = $apodo;
   }
   public function setClave($clave) {
      $this->clave = $clave;
   }
   public function __construct($nombre, $edad, $email, $apodo, $clave, $id=null) {
      $this->nombre  = $nombre;
      $this->edad    = $edad;
      $this->email   = $email;
      $this->apodo   = $apodo;
      $this->clave   = $clave;
      $this->id      = $id;
   }
   public function guardar(){
      $conexion = new Conexion();
{
         $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (nombre, edad, email, apodo, clave) VALUES(:nombre, :edad, :email, :apodo, :clave)');
         $consulta->bindParam(':nombre', $this->nombre);
         $consulta->bindParam(':edad', $this->edad);
         $consulta->bindParam(':email',   $this->email);
         $consulta->bindParam(':apodo',   $this->apodo);
         $consulta->bindParam(':clave',   $this->clave);
         $consulta->execute();
         $this->id = $conexion->lastInsertId();
      }
      $conexion = null;
   }

   public static function recuperarTodos(){
      $conexion =new Conexion();
      $consulta = $conexion->prepare('SELECT id,nombre,edad FROM'.self::TABLA.' ORDER BY nombre ASC');
      $consulta->execute();
      $registro = $consulta ->fetchAll();
      return $registro;
  }
}
?>