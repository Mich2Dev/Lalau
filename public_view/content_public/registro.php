<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Rosa</title>
    <!-- Incluye Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f8d7da; /* Color de fondo rosa claro */
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #dc3545; /* Color de encabezado rosa oscuro */
            color: #fff;
            text-align: center;
            border-radius: 15px 15px 0 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-pink {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-pink:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Registro</h4>
                </div>
                <div class="card-body">
                    <!-- Formulario de registro -->
                    <form>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="correo">Usuario</label>
                            <input type="user" class="form-control" id="usuario" placeholder="Ingresa tu correo electrónico" required>
                        </div>
                        <div class="form-group">
                          <label for="correo">N° Telefono</label>
                          <input type="number" class="form-control" id="Telefono" placeholder="Ingresa tu correo electrónico" required>
                      </div>
                        <div class="form-group">
                          <label for="correo">Correo electrónico</label>
                          <input type="email" class="form-control" id="correo" placeholder="Ingresa tu correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <label for="correo">Contraseña</label>
                            <input type="password" class="form-control" id="correo" placeholder="Ingresa tu correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <label for="contrasena">N.Contraseña</label>
                            <input type="password" class="form-control" id="contrasena" placeholder="Ingresa tu contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-pink btn-block">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Incluye Bootstrap JS y Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
