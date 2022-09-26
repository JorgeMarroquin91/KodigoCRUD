<?php require '../templates/header.php';?>
<?php require '../models/conexion.php';
$id = $_GET['id'];

$respuesta = $bd->prepare("select * from cliente where idCliente=?");
$respuesta->execute([$id]);
$cliente = $respuesta->fetch(PDO::FETCH_OBJ);
?>

<div class="container">
    <br>
    <h3 class="mb-3">Editar Cliente</h3>
    <div class="row">
    <div class="col-md-6">
        <form action="http://localhost/KodigoCRUD/controllers/editarClienteController.php" method="POST">
            <div class="mb-3">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" value=<?php echo $cliente->nombre?> required>
            </div>
            <div class="mb-3">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" name="apellido" name="nombre" value=<?php echo $cliente->apellido?> required>
            </div>
            <div class="mb-3">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" name="telefono" name="nombre" value=<?php echo $cliente->telefono?> required>
            </div>
            <div class="mb-3">
                <input type="radio" name="activo" value="1" <?php if($cliente->activo) echo "checked"; ?>>
                <label for="activo">Activo</label>
                <input type="radio" name="activo" value="0">
                <label for="inactivo">Inactivo</label>
            </div>
            <div class="mb-3">
                <input type="hidden" class="form-control" name="id" value=<?php echo $cliente->idCliente?>>
            </div>
            <div>
                <input type="submit" value="Editar" class="btn btn-primary">
            </div>
        </form>
    </div>
    </div>
</div>

<?php require '../templates/footer.php';?>