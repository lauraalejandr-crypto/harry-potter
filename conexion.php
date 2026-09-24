<?php
$servidor= "127.0.0.1";
$puerto=3306;
$usuario="root";
$clave = "";
$nombreBD = "formulario";

//Crear conexion a base de datos
$conexion = new mysqli($servidor, $usuario, $clave,$nombreBD, $puerto);

//Verificar conexion
if ($conexion->connect_error) {
    die("Conexion fallida:" . $conexion->connect_error);
    
} else {
        echo "Conexion exitosa a la base de datos";
        }
?>
