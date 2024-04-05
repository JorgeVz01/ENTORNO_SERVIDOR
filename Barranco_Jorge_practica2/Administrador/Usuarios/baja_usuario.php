<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienvenido</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>

    </style>
  </head>
  <body>
  <?php
  require_once "../../functions.php";

// Obtener todos los usuarios
$usuarios = obtenerTodosLosUsuarios();

if ($usuarios) {
    ?>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario['usuario_id']; ?></td>
                        <td><?php echo $usuario['nombres']; ?></td>
                        <td>
                            <form action="./Proceso/procesar_baja_usuario.php" method="post">
                                <input type="hidden" name="usuario" value="<?php echo $usuario['usuario_id']; ?>">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php
} else {
    echo '<p>No se encontraron usuarios.</p>';
}
?>

  </body>
</html>
