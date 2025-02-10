<?php 
require_once '../controlador/usuariosController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Guarda los datos recibidos en la base de datos
    $controller = new UsuariosController();
    $controller->registrarUsuario(
        $_POST['usuario'], 
        $_POST['correo'], 
        password_hash($_POST['contrasena'], PASSWORD_DEFAULT), 
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
    <title>Registrar Usuario</title>
</head>
<body>
    <div class="container mt-4">
        <h1>Registrar Usuario</h1>
        <form method = "POST"> 

            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label> <!-- Guarda el nombre del usuario -->
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label> <!-- Guarda el correo del usuario -->
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>

            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña</label> <!-- Guarda la contraseña del usuario -->
                <input type="password" class="form-control" id="contrasena" name="contrasena" required>
            </div> 

            <div class="mb-3">
                <label><h5>He leído y acepto las políticas de privacidad</h5></label><br> <!-- Acepta las políticas de privacidad -->
                <label>Sí</label>
                <input type="radio" id="privacidad" name="privacidad" value="si">
                <br>
                <label>No</label>
                <input type="radio" id="privacidad" name="privacidad" value="no">
            </div> 

            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</body>
</html>