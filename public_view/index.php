<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Accesorios Lalau</title>
    <!-- Enlace al archivo de estilos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Enlace al archivo de estilos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f2f2f2;
            font-family: 'Roboto', sans-serif;
        }

        .jumbotron {
            background-color: #f9c1d8; /* Color de fondo rosa suave */
            color: #000; /* Cambio de color de fuente a negro */
            padding: 2rem 1rem;
            margin-bottom: 2rem;
            border-radius: 15px;
        }

        .producto-card {
            background-color: #fff;
            border: 2px solid #f9c1d8; /* Borde rosa suave */
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            transform: scale(1);
            transition: transform 0.3s ease-in-out;
        }

        .producto-card:hover {
            transform: scale(1.05);
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 1s ease-in-out, transform 1s ease-in-out;
        }

        .fade-in.active {
            opacity: 1;
            transform: translateY(0);
        }

        .rotate {
            transform: rotate(0);
            transition: transform 1s ease-in-out;
        }

        .rotate.active {
            transform: rotate(360deg);
        }

        .highlight-section {
            background-color: #fff;
            padding: 4rem;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            /* Agregar borde decorativo con degradado */
            border: 2px solid transparent;
            background-image: linear-gradient(45deg, #f9c1d8, #f18ca4, #f9c1d8, #f18ca4, #f9c1d8, #f18ca4, #f9c1d8);
            background-size: 200% 100%;
            animation: moveGradient 5s linear infinite;
        }

        .highlight-section h2 {
            background: linear-gradient(45deg, #f18ca4, #fc6ca8, #f18ca4); /* Fondo con degradado */
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent; /* Color de texto transparente */
            font-weight: bold; /* Fuente en negrita */
            font-size: 28px; /* Aumentar tamaño de fuente */
            text-shadow: 2px 2px 4px rgba(241, 140, 164, 0.3); /* Sombra de texto con tono difuminado en fucsia */
            font-family: 'Sacramento', cursive; /* Fuente Sacramento */
        }

        .highlight-section p {
            font-size: 18px;
            font-weight: bold; /* Fuente en negrita */
            color: #444; /* Cambio de color de fuente a negro */
            font-family: 'Sacramento'; /* Fuente Sacramento */
        }

        .custom-btn {
            background-color: #f18ca4; /* Color de fondo rosa */
            color: #fff; /* Color de texto blanco */
            padding: 12px 20px; /* Espaciado interno */
            border: none; /* Sin borde */
            border-radius: 30px; /* Borde redondeado */
            font-size: 18px; /* Tamaño de fuente */
            cursor: pointer; /* Cambiar el cursor al pasar sobre el botón */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1); /* Sombra de texto suave */
            transition: background-color 0.3s ease; /* Transición suave al cambiar el color de fondo */
            font-family: 'Sacramento', cursive; /* Fuente Sacramento */
        }

        .custom-btn:hover {
            background-color: #fc6ca8; /* Color de fondo rosa más claro */
        }
    </style>
</head>
<hr>
<body>
    <!-- Encabezado -->
    <header class="jumbotron text-center">
        <h4 class="fade-in active">Tienda de Accesorios</h4>
        <p class="fade-in active">¡Encuentra los accesorios perfectos para complementar tu estilo!</p>
        <a href="#productos" style="border:solid #ff66cc" class="btn custom-btn fade-in active">Ver productos destacados</a>
    </header>

    <!-- Cuerpo de la página -->
    <div class="container">
        <!-- Sección de bienvenida -->
        <section id="bienvenida" class="my-5 highlight-section text-center">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                <h2 style="color: #E93E63; text-shadow: 2px 2px 4px gray;" class="fade-in active">Bienvenidos a Tienda de Accesorios Lalau</h2>
            <p style="color: #34495E; text-shadow: 2px 2px 4px gray;" class="fade-in active">En Lalau, te ofrecemos los mejores productos para realzar tu belleza y estilo. Nuestra selección única de accesorios te permitirá destacar en cualquier ocasión. Nos enorgullecemos de la calidad y artesanía de nuestros diseños exclusivos que reflejan tu personalidad. Encuentra el complemento perfecto para tu atuendo</p>

                    <a href="#" class="btn btn-primary btn-lg">Conoce más sobre nosotros</a>
                </div>
            </div>
        </section>

        <!-- Sección de productos destacados -->
        <section id="productos" class="my-5">
            <div class="text-center mb-4">
                <h2 class="fade-in active" style="color: #f18ca4;">Productos Destacados</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="producto-card fade-in active">
                        <h3 style="color: #f18ca4;">Accesorios</h3>
                        <img src="ruta-de-la-imagen.jpg" alt="Accesorio y moda"
                            class="img-fluid rounded-circle mb-3">
                        <p style="color: #444;">Este elegante collar es perfecto para ocasiones especiales o para un look casual.
                            El dije en forma de corona le agrega un toque atomicidad a tu look.</p>
                        <a href="#" class="btn btn-primary">Ver Mas</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="producto-card fade-in active">
                        <h3 style="color: #f18ca4;">Maquillajes</h3>
                        <img src="ruta-de-la-imagen.jpg" alt="Belleza y estetica"
                            class="img-fluid rounded-circle mb-3">
                        <p style="color: #444;">¡Descubre nuestros maquillajes exclusivos! Resalta tu belleza con productos únicos. Perfectos para cada ocasión, realza tu estilo con maquillaje de calidad.</p>
                        <a href="#" class="btn btn-primary">Ver Mas</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="producto-card fade-in active">
                        <h3 style="color: #f18ca4;">Perfumes</h3>
                        <img src="ruta-de-la-imagen.jpg" alt="Fragancias"
                            class="img-fluid rounded-circle mb-3">
                        <p style="color: #444;">Descubre esta fragancia: un clásico que nunca pasa de moda. Ideal para ocasiones especiales, te hará destacar con elegancia..</p>
                        <a href="#" class="btn btn-primary">Ver Mas</a>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <!-- Enlace al archivo de scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Enlace al archivo de scripts de Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <!-- Enlace al archivo de scripts de Bootstrap 4.5.2 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
