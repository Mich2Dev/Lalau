<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrusel de Categorías Bonito</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f7d1e7; /* Color de fondo fucsia pastel */
      font-family: 'Montserrat', sans-serif; /* Utilizar la fuente Montserrat */
    }

    /* Estilos para la sección del carrusel */
    .carrusel-section {
      padding: 40px 0;
      background-color: #fff; /* Fondo blanco para destacar el carrusel */
      border-radius: 15px; /* Bordes redondeados para la sección */
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Sombra elegante para la sección */
      position: relative;
      overflow: hidden; /* Evitar que el efecto se salga del contenedor */
    }

    .carrusel-title {
      font-size: 32px; /* Tamaño del título */
      font-weight: bold;
      text-align: center;
      margin-bottom: 30px;
      color: #333; /* Color del título */
    }

    .owl-carousel {
      position: relative;
      z-index: 1; /* Asegura que el carrusel esté encima del fondo animado */
    }

    .owl-carousel .owl-item {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .owl-carousel .owl-item img {
      max-height: 400px; /* Ajustar la altura máxima deseada */
      width: auto; /* Ajustar el ancho automáticamente para mantener la proporción */
      margin: 0 auto;
      border-radius: 15px; /* Bordes redondeados para las imágenes */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Sombra elegante para las imágenes */
    }

    /* Estilos para los nombres de las categorías */
    .categoria-nombre {
    font-size: 23px; /* Tamaño del nombre de la categoría */
    margin-top: 5px; /* Espaciado entre la imagen y el nombre */
    text-align: center;
    font-weight: bold; /* Texto en negrita para destacar el nombre de la categoría */
    color: #333; /* Color del nombre de la categoría */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Sombra para el nombre de la categoría */
    font-family: 'Montserrat', sans-serif; /* Utilizar la fuente Montserrat */
  }

    /* Estilos para los controles del carrusel */
    .owl-nav {
      position: absolute;
      top: 50%;
      width: 100%;
      display: flex;
      justify-content: space-between;
      transform: translateY(-50%);
    }

    .owl-prev,
    .owl-next {
      width: 60px; /* Tamaño de los botones */
      height: 60px;
      line-height: 60px;
      color: #fff;
      text-align: center;
      text-shadow: none;
      background: #ff6b6b; /* Color de fondo del botón */
      border-radius: 50%;
      font-size: 24px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3); /* Sombra para los botones */
    }

    .owl-prev {
      left: 10px;
    }

    .owl-next {
      right: 10px;
    }

    .owl-prev:hover,
    .owl-next:hover {
      background: #ff8e8e; /* Cambia el color al pasar el mouse */
    }

    /* Estilos para el indicador de carrusel */
    .owl-dots {
      text-align: center;
      margin-top: 20px;
    }

    .owl-dot {
      display: inline-block;
      width: 20px; /* Tamaño del indicador */
      height: 20px;
      border-radius: 50%;
      background-color: #d1d1d1; /* Color del indicador no activo */
      margin: 5px;
      transition: background-color 0.3s ease-in-out;
    }

    .owl-dot.active {
      background-color: #ff6b6b; /* Color del indicador activo */
    }

    /* Efecto de escarcha */
    .owl-carousel::before {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3E%3Cg fill='%23ffffff' fill-opacity='0.4'%3E%3Ccircle cx='12' cy='12' r='3'/%3E%3Ccircle cx='20' cy='20' r='5'/%3E%3Ccircle cx='7' cy='21' r='4'/%3E%3Ccircle cx='22' cy='6' r='3'/%3E%3Ccircle cx='13' cy='5' r='5'/%3E%3C/g%3E%3C/svg%3E");
      animation: carruselEffect 10s linear infinite; /* Ajustar la duración del efecto */
      top: 0;
      left: 0;
      z-index: 0; /* Asegura que el fondo animado esté detrás del carrusel */
    }

    @keyframes carruselEffect {
      0% {
        transform: translateY(0);
      }
      100% {
        transform: translateY(-100%);
      }
    }
  </style>
</head>
<body>

<!-- Sección del carrusel -->
<section class="carrusel-section">
  <div class="container">
    <h2 class="carrusel-title">Categorías Destacadas</h2>
    <div class="owl-carousel owl-theme">
      <div class="item">
        <img src="../img/p2.jpg" alt="Categoría 1">
        <div class="categoria-nombre">ACCESORIOS</div>
      </div>
      <div class="item">
        <img src="../img/p5.jpg" alt="Categoría 2">
        <div class="categoria-nombre">PERFUMES</div>
      </div>
      <div class="item">
        <img src="../img/p6.jpg" alt="Categoría 3">
        <div class="categoria-nombre">PRODUCTOS DE BELLEZA</div>
      </div>
      <div class="item">
        <img src="../img/p7.jpg" alt="Categoría 3">
        <div class="categoria-nombre">VARIEDADES</div>
      </div>
      <!-- Agrega más imágenes y categorías aquí -->
    </div>
  </div>
</section>

<!-- Agregar el script de Owl Carousel al final del body -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const owl = $(".owl-carousel").owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      navText: ['&lt;', '&gt;'],
      dots: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      animateOut: 'fadeOut',
    });
  });
</script>
</body>
</html>