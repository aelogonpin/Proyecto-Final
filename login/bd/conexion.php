<?php 
class Conexion{	  
    public static function Conectar() {        
        define('servidor', '192.168.48.135');
        define('nombre_bd', 'definitivo');
        define('usuario', 'root');
        define('password', 'Eloyto11#');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}
