<?php require '../templates/header.php';?>

<div class="container">
    <br>
    <h3 class="mb-3">Agregar Cliente</h3>
    <div class="row">
    <div class="col-md-6">
        <form action="http://localhost/KodigoCRUD/controllers/agregarClienteController.php" method="POST">
            <div class="mb-3">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" name="apellido" required>
            </div>
            <div class="mb-3">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" name="telefono" required>
            </div>
            <div>
                <input type="submit" value="Agregar" class="btn btn-primary">
            </div>
        </form>
    </div>
    </div>
</div>

<?php require '../templates/footer.php';?>