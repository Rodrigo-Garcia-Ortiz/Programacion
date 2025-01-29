<?php
// Incluir el controlador para obtener la lógica necesaria
require_once '../controlador/usuariosController.php';
$controller = new UsuariosController();

// Obtener el ID del socio a editar desde el parámetro GET
if (isset($_GET['id_usuario'])) {
    $id = $_GET['id_usuario'];
    $usuario = $controller->obtenerUsuarioPorId($id);

    // Verificar si el socio existe
}

// Si se envió el formulario, procesar la edición
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_usuario = $_POST['id_usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $edad = $_POST['edad'];
    $plan = $_POST['plan'];
    $paquete = $_POST['paquete'];
    $duracion = $_POST['duracion'];

    // Actualizar el socio usando el controlador
    $resultado = $controller->actualizarUsuario($id_usuario, $nombre, $apellido, $correo, $telefono, $edad, $plan, $paquete, $duracion);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container mt-4">
    <h1>Editar Usuario</h1>

    <form action="editar_usuario.php?id=<?= htmlspecialchars($usuario['id_usuario']) ?>" method="POST">
        <input type="hidden" name="id_usuario" value="<?= htmlspecialchars($usuario['id_usuario']) ?>">

        <div class="mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="<?= htmlspecialchars($usuario['nombre']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" class="form-control" value="<?= htmlspecialchars($usuario['apellido']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="correo">Correo</label>
            <input type="email" id="correo" name="correo" class="form-control" value="<?= htmlspecialchars($usuario['correo']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono" class="form-control" value="<?= htmlspecialchars($usuario['telefono']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="edad">Edad</label>
            <input type="int" id="edad" name="edad" class="form-control" value="<?= htmlspecialchars($usuario['edad']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="plan">Plan</label>
            <select class="form-control" id="plan" name="plan" value="<?= htmlspecialchars($usuario['plan']) ?>" required>
                <option value="Básico">Básico</option>
                <option value="Estándar">Estándar</option>
                <option value="Premium">Premium</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="paquete">Paquete</label>
            <select class="form-control" id="paquete" name="paquete" value="<?= htmlspecialchars($usuario['paquete']) ?>" required>
                <option value="Deporte">Deporte</option>
                <option value="Cine">Cine</option>
                <option value="Infantil">Infantil</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="duracion">Duracion</label>
            <select class="form-control" id="duracion" name="duracion" value="<?= htmlspecialchars($usuario['duracion']) ?>" required>
                <option value="Mensual">Mensual</option>
                <option value="Anual">Anual</option>
            </select>
        <div class="mb-3"><br>
    </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</body>
</html>
