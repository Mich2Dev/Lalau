<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesorios Lalau</title>
    <!-- Agregar la hoja de estilos de Google Fonts para la fuente Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Agregar la hoja de estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f2f2f2;
            font-family: 'Roboto', sans-serif; /* Utilizar la fuente Roboto */
        }

        header {
            background-color: #f18ca4; /* Color de fondo fucsia */
            padding: 15px 0;
            position: relative; /* Posición relativa para los elementos decorativos */
        }

        /* Estilos para el nombre de la página (navbar-brand) */
        .navbar-brand {
            font-family: 'Roboto', sans-serif; /* Fuente Roboto */
            font-size: 32px;
            font-weight: bold;
            text-decoration: none;
            letter-spacing: 2px; /* Espaciado entre letras */
            color: #fff; /* Texto en color blanco */
        }

        .navbar-brand:hover {
            opacity: 0.8; /* Reducir opacidad al pasar el cursor */
        }

        .navbar-nav .nav-link {
            color: #fff; /* Color del texto de los enlaces */
            font-size: 18px;
            font-weight: bold;
            margin-right: 20px; /* Mayor espacio entre enlaces */
            text-decoration: none;
            text-transform: uppercase; /* Texto en mayúsculas */
            padding: 8px 15px; /* Ajustar el relleno */
            transition: background-color 0.3s ease; /* Transición suave del color de fondo */
        }

        .navbar-nav .nav-link:hover {
            animation: colorChange 2s infinite alternate; /* Animación para el cambio de colores al pasar el cursor */
            color: #fff; /* Texto en color blanco al pasar el cursor */
        }

        /* Estilos para el borde decorativo */
        .navbar::before,
        .navbar::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 4px;
            background: linear-gradient(45deg, #e62893, #f18ca4, #ec609c, #ffcc00, #ec609c, #f18ca4, #e62893); /* Degradado fucsia con reflejos dorados */
            background-size: 200% 100%; /* Aumentar el tamaño del degradado en el eje X */
            animation: moveGradient 5s linear infinite; /* Animación para el movimiento del degradado */
        }

        .navbar::before {
            top: 0;
        }

        .navbar::after {
            bottom: 0;
        }

        /* Animación para el movimiento del degradado */
        @keyframes moveGradient {
            0% {
                background-position: 0 50%;
            }
            100% {
                background-position: 200% 50%;
            }
        }

        /* Animación para el cambio de colores al pasar el cursor */
        @keyframes colorChange {
            0% {
                background: linear-gradient(45deg, #f18ca4, #ec609c, #e62893); /* Inicio de la animación */
            }
            100% {
                background: linear-gradient(45deg, #e62893, #f18ca4, #ec609c); /* Fin de la animación */
            }
        }

    </style>
</head>

<body>
    <!-- Encabezado -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f18ca4;"> <!-- Cambiar el color de fondo del navbar a fucsia -->
            <div class="container"> <!-- Agregar la clase 'container' -->
                <a class="navbar-brand" href="#" style="font-size: 32px; font-weight: bold; color: #fff; text-decoration: none; letter-spacing: 2px;">Accesorios Lalau</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #fff; font-size: 18px; font-weight: bold; margin-right: 20px; text-decoration: none; text-transform: uppercase; padding: 8px 15px; transition: background-color 0.3s ease;">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home/products" style="color: #fff; font-size: 18px; font-weight: bold; margin-right: 20px; text-decoration: none; text-transform: uppercase; padding: 8px 15px; transition: background-color 0.3s ease;">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#nosotros" style="color: #fff; font-size: 18px; font-weight: bold; margin-right: 20px; text-decoration: none; text-transform: uppercase; padding: 8px 15px; transition: background-color 0.3s ease;">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto" style="color: #fff; font-size: 18px; font-weight: bold; margin-right: 20px; text-decoration: none; text-transform: uppercase; padding: 8px 15px; transition: background-color 0.3s ease;">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Resto del contenido de la página -->

    <!-- Enlace al archivo de scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>

</html>
