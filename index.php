<?php require './templates/header.php';?>
<?php include_once './models/conexion.php';
    $sentencia = $bd->query("Select * from cliente where activo=1");
    $clientes = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container">
  <h1>Clientes</h1>
  <a href="./views/agregarCliente.php" class="btn btn-primary">AGREGAR</a>

<table class="table">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Telefono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($clientes as $cliente){?>
    <tr>
      <th scope="row"><?php echo $cliente->idCliente;?></th>
      <td><?php echo $cliente->nombre;?></td>
      <td><?php echo $cliente->apellido;?></td>
      <td><?php echo $cliente->telefono;?></td>
      <td>
        <a href="./views/editarCliente.php/?id=<?php echo $cliente->idCliente;?>">Editar</a>
        <a href="./views/eliminarCliente.php/?id=<?php echo $cliente->idCliente;?>">Eliminar</a>
      </td>
    </tr>
<?php };?>
  </tbody>
</table>
</div>

<?php require './templates/footer.php';?>