<?php
session_start();
if ($_SESSION['usuario'] == "") {

    header("Location: ../index.php");
} 

$usuario = $_SESSION['id'];
require_once '../controlador/tareasController.php';
$controller = new TareasController();
$tareas = $controller->obtenerTareas($usuario);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Listado de Tareas</title>
</head>
<body>
    <h1>Tareas</h1>
    <table border="1" class = "table table-striped"> <!-- Muestra las tareas del usuario elegido -->
        <tr>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Opciones</th>
        </tr>
        <?php foreach ($tareas as $tarea): ?>
            <tr>
                <td><?= $tarea['usuario'] ?></td>
                <td><?= $tarea['nombre'] ?></td>
                <td><?= $tarea['estado'] ?></td>
                <td>
                    <?php if ($tarea['estado'] == "incompleta") { ?>
                        <a href="completar_tarea.php?id=<?= $tarea['id_tarea'] ?>" class = "btn btn-primary">Marcar como completada</a>
                    <?php } else {} ?>
                    <a href="eliminar_tarea.php?id=<?= $tarea['id_tarea'] ?>" class = "btn btn-primary">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="alta_tarea.php" class = "btn btn-primary">Agregar una nueva tarea</a>
    <a href="../logout.php" class = "btn btn-primary">Cerrar sesión</a>
</body>
</html>