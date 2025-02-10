<?php 
session_start();
require_once '../controlador/tareasController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Guarda la nueva tarea en la base de datos
    $controller = new TareasController();
    $controller->agregarTarea(
        $_SESSION['id'], 
        $_POST['nombre'], 
        $_POST['estado'], 
    );
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Agregar Tarea</title>
</head>
<body>
    <div class="container mt-4">
        <h1>Agregar Tarea</h1>
        <form method = "POST"> 

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label> <!-- Guarda el nombre de la tarea -->
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div> 

            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label> <!-- Guarda el estado de la tarea -->
                <select class="form-control" id="estado" name="estado">
                    <option value="completada">Completada</option>
                    <option value="incompleta">Incompleta</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
</body>
</html>