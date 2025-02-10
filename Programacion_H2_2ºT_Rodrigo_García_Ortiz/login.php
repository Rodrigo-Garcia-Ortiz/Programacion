<?php
session_start();
require_once 'config/conexion.php';
$conexion = new Conexion();
$query = "SELECT * FROM usuarios";
        $resultado = $conexion->conexion->query($query);
        $usuarios = [];
        while ($fila = $resultado->fetch_assoc()) {
            $usuarios[] = $fila;
        }

foreach ($usuarios as $usuario):

    if ($_POST['usuario'] == $usuario['nombre']) { //Si la contraseña y el usuario están en la base de datos permite acceder a la página

        if ($_POST['contrasena'] == $usuario['contrasena']){

            $_SESSION['usuario'] = $usuario['nombre']; //El usuario introducido se vuelve el usuario de la sesión
            $_SESSION['id'] = $usuario['id_usuario']; //El id del usuario introducido se vuelve el id de la sesión
            header("Location: vista/lista_tareas.php");
            
        } else {

            echo "Contraseña incorrecta.";
        }
    } else {

        echo "Usuario incorrecto.";
    }
    
endforeach
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container mt-4">
        <h1>Iniciar sesión</h1>
        <form method = "POST"> 

            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label> <!-- Recibe el nombre del usuario a utilizar -->
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>

            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña</label> <!-- Recibe la contraseña del usuario a utilizar -->
                <input type="password" class="form-control" id="contrasena" name="contrasena">
            </div> 

            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
    </div> 
</body>
</html>