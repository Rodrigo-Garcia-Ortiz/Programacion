<?php
// Incluir el controlador para obtener la lógica necesaria
require_once '../controlador/EventosController.php';
$controller = new EventosController();

// Obtener el ID del evento a editar desde el parámetro GET
if (isset($_GET['id_evento'])) {
    $id_evento = $_GET['id_evento'];
    $socio = $controller->obtenerEventoPorId($id);
}

// Si se envió el formulario, procesar la edición
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_evento = $_POST['id_evento'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $lugar = $_POST['lugar'];

    // Actualizar el evento usando el controlador
    $resultado = $controller->actualizarEvento($id_evento, $nombre, $fecha, $lugar);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Evento</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container mt-4">
    <h1>Editar Evento</h1>

    <form action="editar_socio.php?id=<?= htmlspecialchars($evento['id_socio']) ?>" method="POST">
        <input type="hidden" name="id_socio" value="<?= htmlspecialchars($socio['id_evento']) ?>">

        <div class="mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="<?= htmlspecialchars($socio['nombre']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" name="fecha" class="form-control" value="<?= htmlspecialchars($socio['fecha']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="lugar">Lugar</label>
            <input type="text" id="lugar" name="lugar" class="form-control" value="<?= htmlspecialchars($socio['lugar']) ?>" required>
        </div>
        <br>
    </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</body>
</html>