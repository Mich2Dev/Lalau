<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Personalizado</title>
    <!-- Incluye Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Incluye Font Awesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Incluye la fuente de Google, Montserrat -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
    <!-- Estilos personalizados -->
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ffd4e5; /* Color de fondo rosa claro */
            margin: 0;
            font-family: 'Montserrat', sans-serif; /* Aplica la fuente de Google */
        }

        .container {
            position: relative;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .princess-crown {
            position: absolute;
            top: 10px;
            right: 10px;
            color: gold;
            font-size: 2em;
            animation: pulse 1.5s infinite alternate;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.2);
            }
        }

        h4 {
            color: #dc3545; /* Color de encabezado rosa oscuro */
            margin-bottom: 20px;
            font-size: 24px; /* Tamaño de fuente personalizado */
        }

        .form-group {
            margin-bottom: 20px;
        }

        input.form-control {
            font-family: 'Montserrat', sans-serif; /* Aplica la fuente de Google a los campos de entrada */
        }

        .btn-custom {
            background-color: #dc3545; /* Color de botón rosa oscuro */
            color: #fff;
            transition: background-color 0.3s;
            font-family: 'Montserrat', sans-serif; /* Aplica la fuente de Google al botón */
        }

        .btn-custom:hover {
            background-color: #c82333; /* Color de botón rosa más oscuro al pasar el mouse */
        }

        .btn-custom:active {
            background-color: #28a745; /* Color de botón verde cuando se presiona */
        }

        .botoregreso {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #80b3ff;
            color: #ffffff;
            font-size: 16px;
            text-decoration: none;
            margin: 20px auto;
            font-family: 'Montserrat', sans-serif; /* Aplica la fuente de Google al botón de regreso */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="princess-crown fas fa-crown"></div>
    <h4>Registro</h4>
    <!-- Formulario de registro -->
    <form>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nombre Completo" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nombre de Usuario" required>
        </div>
        <div class="form-group">
            <input type="tel" class="form-control" placeholder="Número de Teléfono" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Correo Electrónico" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Contraseña" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirmar Contraseña" required>
        </div>
        <button type="submit" class="btn btn-custom btn-block">
            <i class="fas fa-user"></i> Registrar
        </button>
        <!-- Botón de regreso -->
        <a href="login" class="botoregreso">
            <i class="fas fa-arrow-left"></i>
        </a>
    </form>
</div>

<!-- Incluye Bootstrap JS y Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
