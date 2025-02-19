<?php
require_once '../controlador/recetasController.php';
$controller = new RecetasController();
$recetas = $controller->listarRecetas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Listado de Recetas</title>
</head>
<body>
    <h1>Recetas</h1>
    <table border="1" class = "table table-striped">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Elaboración</th>
            <th>Ingredientes</th>
            <th>Opciones</th>
        </tr>
        <?php foreach ($recetas as $receta): ?>
            <tr>
                <td><?= $receta['id_receta'] ?></td>
                <td><?= $receta['nombre'] ?></td>
                <td><?= $receta['elaboracion'] ?></td>
                <td><?= $receta['ingredientes'] ?></td>
                <td>
                    <a href="editar_receta.php?id=<?= $receta['id_receta'] ?>" class = "btn btn-primary">Editar</a>
                    <a href="eliminar_receta.php?id=<?= $receta['id_receta'] ?>" class = "btn btn-primary">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="alta_receta.php" class = "btn btn-primary">Agregar una nueva receta</a>
</body>
</html>