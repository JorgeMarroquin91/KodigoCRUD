<?php 
require '../models/conexion.php';

$idcliente = $_GET['id'];
$activo = 0;

try{
    $sentencia = $bd->prepare("update cliente set activo = ? where idCliente = ?");
    $respuesta = $sentencia->execute([$activo, $idcliente]);

    if($respuesta){
        header('Location: http://localhost/KodigoCRUD/index.php');
    }
}catch(Exception $e){
    echo "Error al Ingresar los Datos";
}

?>