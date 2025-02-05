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

    if ($_POST['usuario'] == $usuario['usuario']) { //Si la contraseña y el usuario están en la base de datos permite acceder a la página

        if ($_POST['contraseña'] == $usuario['contraseña']){

            $_SESSION['usuario'] = $usuario['usuario']; //El usuario introducido se vuelve el usuario de la sesión
            $_SESSION['rol'] = $usuario['rol']; //El rol del usuario introducido se vuelve el rol de la sesión

            header("Location: vista/lista_socios.php");
            
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
                <label for="usuario" class="form-label">Usuario</label> 
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>

            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña">
            </div> 

            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
    </div> 
</body>
</html>