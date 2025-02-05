<?php
session_start();

// Incluir el controlador para obtener la lógica necesaria
require_once '../controlador/usuarioSController.php';
$controller = new UsuariosController();

// Obtener el ID del usuario a editar desde el parámetro GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $usuario = $controller->obtenerUsuarioPorId($id);
}

// Si se envió el formulario, procesar la edición
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_usuario = $_POST['id_usuario'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $rol = $_POST['rol'];

    // Actualizar el usuario usando el controlador
    $resultado = $controller->actualizarUsuario($id_usuario, $usuario, $contraseña, $rol);
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
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario" class="form-control" value="<?= htmlspecialchars($usuario['usuario']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="contraseña">Contraseña</label>
            <input type="password" id="contraseña" name="contraseña" class="form-control" value="<?= htmlspecialchars($usuario['contraseña']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="rol">Rol</label>
            <select class="form-control" id="rol" name="rol" value="<?= htmlspecialchars($usuario['rol']) ?>" required>
                <option value="admin">Administrador</option>
                <option value="user">Usuario</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
    </div>
</body>
</html>