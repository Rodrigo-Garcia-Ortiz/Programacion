<?php 
session_start();
require_once '../controlador/SociosController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Guarda los datos del nuevo socio en la base de datos
    $controller = new SociosController();
    $controller->agregarSocio(
        $_POST['nombre'],
        $_POST['apellido'],
        $_POST['email'],
        $_POST['telefono'],
        $_POST['fecha_nacimiento'], 
    );
    header("Location: lista_socios.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Agregar Socio</title>
</head>
<body>
    <div class="container mt-4">
        <h1>Agregar Socio</h1>
        <form action = "agregar_socio.php" method = "POST"> 
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label> 
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label> 
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div> 
            <div class="mb-3">
                <label for="email" class="form-label">Email</label> 
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label> 
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label> 
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
</body>
</html>