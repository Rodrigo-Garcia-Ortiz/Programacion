<?php
require_once '../controlador/recetasController.php';
$controller = new RecetasController();

// Obtener el ID del socio a editar desde el parámetro GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $receta = $controller->obtenerRecetaPorId($id);
}

// Si se envió el formulario, procesar la edición
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_receta = $_POST['id_receta'];
    $nombre = $_POST['nombre'];
    $elaboracion = $_POST['elaboracion'];
    $ingredientes = $_POST['ingredientes'];
    // Actualizar la receta usando el controlador
    $resultado = $controller->actualizarReceta($id_receta, $nombre, $elaboracion, $ingredientes);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Receta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container mt-4">
    <h1>Editar Receta</h1>

    <form action="editar_receta.php?id=<?= htmlspecialchars($receta['id_receta']) ?>" method="POST">
        <input type="hidden" name="id_receta" value="<?= htmlspecialchars($receta['id_receta']) ?>">

        <div class="mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="<?= htmlspecialchars($receta['nombre']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="elaboracion">Elaboración</label>
            <input type="text" id="elaboracion" name="elaboracion" class="form-control" value="<?= htmlspecialchars($receta['elaboracion']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="ingredientes">Ingredientes</label>
            <input type="text" id="ingredientes" name="ingredientes" class="form-control" value="<?= htmlspecialchars($receta['ingredientes']) ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</body>
</html>