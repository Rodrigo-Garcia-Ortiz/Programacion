<?php
require_once '../controlador/EventosController.php';
$controller = new EventosController();
$eventos = $controller->listarEventos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Listado de Eventos</title>
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
            </ul>
        </div>
    </div>
</nav>
    <h1>Eventos</h1>
    <table border="1" class = "table table-striped">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Lugar</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($eventos as $evento): ?>
            <tr>
                <td><?= $evento['id_evento'] ?></td>
                <td><?= $evento['nombre_evento'] ?></td>
                <td><?= $evento['fecha'] ?></td>
                <td><?= $evento['lugar'] ?></td>
                <td>
                    <a href="editar_evento.php?id=<?= $evento['id_evento'] ?>" class = "btn btn-primary">Editar</a>
                    <a href="eliminar_evento.php?id=<?= $evento['id_evento'] ?>" class = "btn btn-primary">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="alta_evento.html" class = "btn btn-primary">Agregar un nuevo evento</a>
</body>
</html>