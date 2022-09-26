<?php 
require '../models/conexion.php';

$idcliente = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$activo = $_POST['activo'];

try{
    $sentencia = $bd->prepare("update cliente set nombre = ?, apellido=?, telefono = ?, activo = ? where idCliente = ?");
    $respuesta = $sentencia->execute([$nombre, $apellido, $telefono, $activo, $idcliente]);

    if($respuesta){
        header('Location: http://localhost/KodigoCRUD/index.php');
    }
}catch(Exception $e){
    echo "Error al Ingresar los Datos";
}

?>