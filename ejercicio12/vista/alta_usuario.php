<?php 
session_start();
require_once '../controlador/usuariosController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Guarda los datos recibidos en la base de datos
    $controller = new UsuariosController();
    $controller->agregarUsuario(
        $_POST['usuario'], 
        $_POST['contraseña'], 
        $_POST['rol'], 
    );
    header("Location: lista_usuarios.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Agregar Usuario</title>
</head>
<body>
    <div class="container mt-4">
        <h1>Agregar Usuario</h1>
        <form method = "POST"> 

            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label> 
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>

            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña" required>
            </div> 

            <div class="mb-3">
                <label for="rol" class="form-label">rol</label> 
                <select class="form-control" id="rol" name="rol">
                    <option value="admin">Administrador</option>
                    <option value="user">Usuario</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
</body>
</html>