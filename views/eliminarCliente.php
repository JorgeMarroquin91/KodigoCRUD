<?php require '../templates/header.php';?>
<?php require '../models/conexion.php';
$id = $_GET['id'];

$respuesta = $bd->prepare("select * from cliente where idCliente=?");
$respuesta->execute([$id]);
$cliente = $respuesta->fetch(PDO::FETCH_OBJ);
?>

<div class="container">
    <br>
    <h4>Datos del Cliente a Eliminar</h4>
    <br>
    <h5>Nombre: <?php echo $cliente->nombre?></h5>
    <h5>Apellido: <?php echo $cliente->apellido?></h5>
    <h5>Telefono: <?php echo $cliente->telefono?></h5>
    <br>

    <h5>¿Estas Seguro?</h5>
    <a href="http://localhost/KodigoCRUD/controllers/eliminarClienteController.php/?id=<?php echo $id?>" class="btn btn-danger">SI</a>
    <a href="http://localhost/KodigoCRUD/index.php" class="btn btn-primary">No</a>
</div>

<?php require '../templates/footer.php';?>