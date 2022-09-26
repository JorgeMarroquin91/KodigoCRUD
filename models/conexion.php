<?php
$contraseña = "";
$usuario = "root";
$nombre_bd ="tienda_online";

try{
    $bd = new PDO(
        'mysql:host=localhost:3307;
        dbname='.$nombre_bd,
        $usuario,
        $contraseña,
        array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8")
    );
}catch(Exception $e){
    echo "No Funciono la Conexion".$e->getMessage();
}

?>