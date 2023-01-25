
<?php

class Cconexion{
    public static function ConexionDB(){ /* Solo funciona con funcion static*/
$server = "localhost";
$user = "root";
$pass = "";
$db = "conectar"; /*Nombre de prueba para establecer conexión */

$conexion = new mysqli ($server, $user, $pass, $db);
 if ($conexion->connect_errno)
    die("Conexion Fallida" + $conexion->connect_errno);
   else {
    echo ("Se conecto a base de datos: $db") ;
   }
}

}