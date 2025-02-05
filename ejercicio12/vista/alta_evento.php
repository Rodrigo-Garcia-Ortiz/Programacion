<?php 
session_start();
require_once '../controlador/EventosController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Guarda los datos del nuevo evento en la base de datos
    $controller = new EventosController();
    $controller->agregarEvento(
        $nombre = $_POST['nombre'],
        $fecha = $_POST['fecha'],
        $lugar = $_POST['lugar'],
    );
    header("Location: lista_eventos.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Agregar Evento</title>
</head>
<body>
    <div class="container mt-4">
        <h1>Agregar Evento</h1>
        <form method = "POST"> 
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label> 
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label> 
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div> 
            <div class="mb-3">
                <label for="lugar" class="form-label">Lugar</label> 
                <input type="text" class="form-control" id="lugar" name="lugar" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
</body>
</html>