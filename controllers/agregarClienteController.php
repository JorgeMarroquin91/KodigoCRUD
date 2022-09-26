<?php 
require '../models/conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];

try{
    $sentencia = $bd->prepare("Insert into cliente (nombre, apellido, telefono, activo) values(?,?,?,?)");
    $respuesta = $sentencia->execute([$nombre, $apellido, $telefono, 1]);

    if($respuesta){
        header('Location: http://localhost/KodigoCRUD/index.php');
    }
}catch(Exception $e){
    echo "Error al Ingresar los Datos";
}


?>