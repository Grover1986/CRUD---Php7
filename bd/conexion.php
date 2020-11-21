<?php

    // Para conectarnos a la BD usaremos PDO q significa Php Data Object, nos ofrece muchas  ventajas y en cuanto a seguridad es mucho mejor q las anteriores.

    class Conexion {
        public static function Conectar(){
            // crearemos unas constantes
            define('servidor','localhost'); // este es para el Servidor
            define('nombre_bd','crud_2020'); // este es para la Base de Datos
            define('usuario', 'root');  // para usuario
            define('password','');  // para contraseña
            
            // creamos un arreglo con algunos parámetros de la conexion PDO
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

            try{
                $conexion = new PDO("mysql:host=". servidor. ";dbname=". nombre_bd, usuario, password); // creamos una instancia de la clase PDO, y como argumentos escribimos, el servidor, la base de datos, usuario y contraseña.
                return $conexion;
            }catch(Exception $error){   
                die("El error de conexión es:" ." {$error->getMessage()}"); // obtendremos un mensaje de error si es q lo hubiera
            }
        }   
    }