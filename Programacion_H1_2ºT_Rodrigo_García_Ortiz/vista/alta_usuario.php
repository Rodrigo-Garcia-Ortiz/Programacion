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
        <form action = "agregar_usuario.php" method = "POST"> 
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label> 
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label> 
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label> 
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label> 
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label> 
                <input type="text" class="form-control" id="edad" name="edad" required>
            </div>
            <div class="mb-3">
                <label for="plan" class="form-label">Plan</label> 
                <select class="form-control" id="plan" name="plan" required>
                    <option value="Básico">Básico</option>
                    <option value="Estándar">Estándar</option>
                    <option value="Premium">Premium</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="paquete" class="form-label">Paquete</label> 
                <select class="form-control" id="paquete" name="paquete" required>
                    <option value="Deporte">Deporte</option>
                    <option value="Cine">Cine</option>
                    <option value="Infantil">Infantil</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="duracion" class="form-label">Duración</label> 
                <select class="form-control" id="duracion" name="duracion" required>
                    <option value="Mensual">Mensual</option>
                    <option value="Anual">Anual</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
</body>
</html>