<?php
session_start();

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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Club deportivo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="lista_socios.php">Socios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lista_eventos.php">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lista_usuarios.php">Usuarios</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <h1>Usuarios</h1>
    <table border="1" class = "table table-striped">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Contraseña</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario['id_usuario'] ?></td>
                <td><?= $usuario['usuario'] ?></td>
                <td><?= $usuario['contraseña'] ?></td>
                <td><?= $usuario['rol'] ?></td>
                <td>
                    <a href="editar_usuario.php?id=<?= $usuario['id_usuario'] ?>" class = "btn btn-primary">Editar</a>
                    <a href="eliminar_usuario.php?id=<?= $usuario['id_usuario'] ?>" class = "btn btn-primary">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="alta_usuario.php" class = "btn btn-primary">Agregar un nuevo usuario</a>
    <a href="../logout.php" class = "btn btn-primary">Cerrar sesión</a>
</body>
</html>