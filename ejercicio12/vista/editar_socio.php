<?php
session_start();

// Incluir el controlador para obtener la lógica necesaria
require_once '../controlador/SociosController.php';
$controller = new SociosController();

// Obtener el ID del socio a editar desde el parámetro GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $socio = $controller->obtenerSocioPorId($id);
}

// Si se envió el formulario, procesar la edición
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_socio = $_POST['id_socio'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    // Actualizar el socio usando el controlador
    $resultado = $controller->actualizarSocio($id_socio, $nombre, $apellido, $email, $telefono, $fecha_nacimiento);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Socio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container mt-4">
    <h1>Editar Socio</h1>

    <form action="editar_socio.php?id=<?= htmlspecialchars($socio['id_socio']) ?>" method="POST">
        <input type="hidden" name="id_socio" value="<?= htmlspecialchars($socio['id_socio']) ?>">

        <div class="mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="<?= htmlspecialchars($socio['nombre']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" class="form-control" value="<?= htmlspecialchars($socio['apellido']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="email">Correo</label>
            <input type="email" id="email" name="email" class="form-control" value="<?= htmlspecialchars($socio['email']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono" class="form-control" value="<?= htmlspecialchars($socio['telefono']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="fecha_nacimiento">Edad</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" value="<?= htmlspecialchars($socio['fecha_nacimiento']) ?>" required>
        </div>
        <br>
    </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</body>
</html>