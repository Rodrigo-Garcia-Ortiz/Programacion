<?php
require_once '../controlador/usuariosController.php';
$controller = new UsuariosController();
$usuarios = $controller->listarUsuarios();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Listado de Usuarios</title>
</head>
<body>
    <h1>Usuarios Registrados</h1>
    <table border="1" class = "table table-striped"> 
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Edad</th>
            <th>Plan</th>
            <th>Paquete</th>
            <th>Duración</th>
            <th>Opciones</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario['id_usuario'] ?></td>
                <td><?= $usuario['nombre'] ?></td>
                <td><?= $usuario['apellido'] ?></td>
                <td><?= $usuario['correo'] ?></td>
                <td><?= $usuario['telefono'] ?></td>
                <td><?= $usuario['edad'] ?></td>
                <td><?= $usuario['plan'] ?></td>
                <td><?= $usuario['paquete'] ?></td>
                <td><?= $usuario['duracion'] ?></td>
                <td>
                    <a href="editar_usuario.php?id_usuario=<?= $usuario['id_usuario'] ?>" class = "btn btn-primary">Editar</a>
                    <a href="eliminar_usuario.php?id_usuario=<?= $usuario['id_usuario'] ?>" class = "btn btn-primary">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="alta_usuario.php" class = "btn btn-primary">Agregar un nuevo usuario</a>
</body>
</html>