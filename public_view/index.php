<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Accesorios Lalau</title>
    <!-- Enlace al archivo de estilos de Bootstrap 4.5.2 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f7d1e7; /* Color de fondo fucsia pastel */
            font-family: 'Montserrat', sans-serif; /* Utilizar la fuente Montserrat */
            margin: 0;
            padding: 0;
        }

        /* Estilos para la sección de bienvenida */
        .bienvenida-section {
            background-image: url('background.jpg'); /* Agrega aquí la imagen de fondo */
            background-size: cover;
            background-position: center;
            padding: 5rem 0;
            text-align: center;
            color: #fff;
            position: relative;
        }

        .bienvenida-title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
            text-transform: uppercase;
        }

        .bienvenida-text {
            font-size: 18px;
            max-width: 800px;
            margin: 0 auto 40px;
            color: #fff;
        }

        .bienvenida-container {
            background-color: rgba(255, 255, 255, 0.8); /* Color de fondo semitransparente */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        /* Estilos para la sección de categorías */
        .categorias-section {
            background-color: #fff;
            padding: 40px 0;
        }

        .categorias-title {
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            text-transform: uppercase;
        }

        .categoria-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
            transition: transform 0.3s ease-in-out;
        }

        .categoria-item img {
            max-width: 200px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .categoria-nombre {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-top: 10px;
        }

        .categoria-item:hover {
            transform: scale(1.05);
        }

        /* Estilos para el pie de página */
        .footer {
            background-color: #fff;
            color: #333;
            padding: 20px 0;
            text-align: center;
        }

        /* Estilos para dispositivos móviles */
        @media (max-width: 767px) {
            .bienvenida-section {
                padding: 2rem 0;
            }

            .bienvenida-title {
                font-size: 24px;
                margin-bottom: 20px;
            }

            .bienvenida-text {
                font-size: 16px;
                margin-bottom: 20px;
            }

            .bienvenida-container {
                padding: 20px;
            }

            .categorias-section {
                padding: 20px 0;
            }

            .categorias-title {
                font-size: 24px;
                margin-bottom: 20px;
            }

            .categoria-item img {
                max-width: 150px;
            }

            .categoria-nombre {
                font-size: 16px;
                margin-top: 5px;
            }

            .footer {
                padding: 10px 0;
                font-size: 12px;
            }
             .parrafo{
               color:black;
            }
        }
    </style>
</head>

<body>
    <!-- Sección de bienvenida -->
    <section class="bienvenida-section">
        <div class="container bienvenida-container">
            <h2  class="bienvenida-title" style="color:black;">¡Bienvenidos a Tienda de Accesorios Lalau!</h2>
            <p  class="parrafo">Nuestra selección única de collares, pulseras, anillos, pendientes y más te permitirá destacar en cualquier ocasión. Nos enorgullecemos de la calidad y la artesanía de nuestros accesorios, cuidadosamente seleccionados para ofrecerte diseños exclusivos que reflejen tu personalidad y te hagan sentir extraordinaria. Explora nuestra amplia gama de accesorios y encuentra el complemento perfecto para tu atuendo.</p>
        </div>
    </section>

    <!-- Sección de categorías -->
    <section class="categorias-section">
        <div class="container">
            <h2 class="categorias-title hdocer">Categorías Destacadas</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="categoria-item">
                        <img src="categoria-1.jpg" alt="Categoría 1">
                        <div class="categoria-nombre">Accesorios</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="categoria-item">
                        <img src="categoria-2.jpg" alt="Categoría 2">
                        <div class="categoria-nombre">Perfumes</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="categoria-item">
                        <img src="categoria-3.jpg" alt="Categoría 3">
                        <div class="categoria-nombre">Productos de Belleza</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enlace al archivo de scripts de Bootstrap 4.5.2 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<style>
    .parrafo{
        font-family: 'Oswald', sans-serif;
            font-size: 20px;
            font-weight: 300;
            color: #555555;
            letter-spacing: 1px;
            line-height: 1.6;
            }
</style>
</html>
