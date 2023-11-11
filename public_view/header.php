<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesorios Lalau</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Playfair Display', serif;
        }

        header {
            background: linear-gradient(45deg, #ff69b4, #ff1493);
            padding: 5px 0; /* Ajusta el valor de padding aquí */
            margin-bottom: 5px; /* Ajusta el valor de margin aquí */
            border-bottom: 2px solid #fff;
        }

        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-size: 20px; /* Ajusta el tamaño de la fuente aquí */
            font-weight: bold;
            text-decoration: none;
            letter-spacing: 1px;
            color: #fff;
            display: flex;
            align-items: center;
        }

        .navbar-brand:hover {
            opacity: 0.8;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-size: 16px; /* Ajusta el tamaño de la fuente aquí */
            font-weight: bold;
            margin-right: 15px; /* Ajusta el valor de margin-right aquí */
            text-decoration: none;
            text-transform: uppercase;
            padding: 5px 10px; /* Ajusta el valor de padding aquí */
        }

        .navbar-nav .nav-link:hover {
            color: #f18ca4;
        }

        @media (max-width: 768px) {
            .navbar {
                justify-content: center;
            }
        }

        /* Estilos de la corona de princesa */
        .princess-crown-header {
            color: gold;
            font-size: 1em; /* Ajusta el tamaño de la fuente aquí */
            margin-right: 5px; /* Ajusta el valor de margin-right aquí */
            animation: pulse 1.5s infinite alternate;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.1);
            }
        }
    </style>
</head>

<body>
    <!-- Encabezado -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(45deg, #ff69b4, #ff1493);">
            <div class="container">
                <a class="princess-crown-header fas fa-crown" href="#" style="text-decoration: none; color: gold;"></a>
                <a class="navbar-brand" href="#">Accesorios Lalau</a>
         <a class="princess-crown-header fas fa-crown" href="#" style="text-decoration: none; color: gold;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="home/index">
                                <i class="fas fa-home" style="margin-right: 5px;"></i>Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home/products">
                                <i class="fas fa-box-open" style="margin-right: 5px;"></i>Productos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#carrito">
                                <i class="fas fa-shopping-cart" style="margin-right: 5px;"></i>Carrito
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="\public_view\content_public\login.php">
                                <i class="fas fa-sign-in-alt" style="margin-right: 5px;"></i>Log In
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">
                                <i class="fas fa-envelope" style="margin-right: 5px;"></i>Contacto
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Resto del contenido de la página -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
