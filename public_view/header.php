<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesorios Lalau</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: 'Roboto', sans-serif;
        }

        header {
            background-color: #f18ca4;
            padding: 15px 0;
            position: relative;
        }

        .navbar-brand {
            font-family: 'Roboto', sans-serif;
            font-size: 32px;
            font-weight: bold;
            text-decoration: none;
            letter-spacing: 2px;
            color: #fff;
            transition: opacity 0.3s ease;
        }

        .navbar-brand:hover {
            opacity: 0.8;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            margin-right: 20px;
            text-decoration: none;
            text-transform: uppercase;
            padding: 8px 15px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #f18ca4;
        }

        .navbar::before,
        .navbar::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 4px;
            background: linear-gradient(45deg, #e62893, #f18ca4, #ec609c, #ffcc00, #ec609c, #f18ca4, #e62893);
            background-size: 200% 100%;
            animation: moveGradient 5s linear infinite;
        }

        .navbar::before {
            top: 0;
        }

        .navbar::after {
            bottom: 0;
        }

        @keyframes moveGradient {
            0% {
                background-position: 0 50%;
            }
            100% {
                background-position: 200% 50%;
            }
        }

        @keyframes colorChange {
            0% {
                background: linear-gradient(45deg, #f18ca4, #ec609c, #e62893);
            }
            100% {
                background: linear-gradient(45deg, #e62893, #f18ca4, #ec609c);
            }
        }

        @media (max-width: 768px) {
            .navbar {
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <!-- Encabezado -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-pink-500">
            <div class="container">
                <a class="navbar-brand text-white" href="#">Accesorios Lalau</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
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
                            <a class="nav-link" href="#contacto">
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
            </div>
        </nav>
    </header>

    <!-- Resto del contenido de la página -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
