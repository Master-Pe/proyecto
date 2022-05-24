<?php
//conexion de tipo PDO que es una libreria de PHP que permite conexión y transcción
//orientada a objetos hacia una base de datos

class Conexion{
    private static $conexion = NULL;

    private function __construct(){}      //constructor 

    public static function conectar (){
        //verificar errrores
        $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION; //Captura de errores
        self::$conexion = new PDO('mysql:host=localhost;dbname=proyecto_1','root','',$pdo_options);
        return self::$conexion;
    }

    static function desconectar(&$conexion){
        $conexion = NULL;
    }

}

$baseDatos = Conexion::conectar();

?>