<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accesorios Lalau</title>
  <!-- Agregar la hoja de estilos de Google Fonts para la fuente Roboto -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <!-- Estilos personalizados -->
  <style>
    body {
      background-color: #f7d1e7; /* Color de fondo fucsia pastel */
      font-family: 'Roboto', sans-serif; /* Utilizar la fuente Roboto */
      margin: 0;
      padding: 0;
    }

    footer {
      background-color: #f18ca4; /* Color de fondo fucsia */
      color: #fff;
      padding: 15px 0;
      text-align: center;
    }

    /* Estilos para el contenido del footer */
    .footer-container {
      max-width: 600px; /* Reducir el ancho máximo del footer */
      margin: 0 auto;
      display: flex;
      justify-content: center; /* Centrar el contenido horizontalmente */
    }

    .footer-left, .footer-right {
      flex: 1;
    }

    .footer-left h3, .footer-right h3 {
      font-size: 20px;
      margin-bottom: 15px;
      /* Agregar sombra a las fuentes */
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .footer-left p {
      margin: 0;
      line-height: 1.6;
      /* Agregar sombra a las fuentes */
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    }

    .footer-right {
      text-align: center; /* Centrar el contenido horizontalmente */
    }

    .social-icons {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .social-icons li {
      display: inline-block;
      margin-right: 10px;
    }

    .social-icons li:last-child {
      margin-right: 0;
    }

    .social-icons a {
      color: #fff;
      font-size: 20px;
      text-decoration: none;
    }

    /* Estilos responsivos */
    @media (max-width: 600px) {
      .footer-container {
        flex-direction: column;
        text-align: center;
      }

      .footer-left, .footer-right {
        margin-bottom: 20px;
      }
    }
  </style>
</head>
<body>

<footer class="bg-pink-500 text-white py-6">
  <div class="footer-container">
    <div class="footer-left">
      <h3>Información de contacto</h3>
      <p>Email: AccesoriosLalau@gmail.com</p>
      <p>Teléfono:(+57) 301***5775</p>
    </div>
    <div class="footer-right">
      <h3>Redes sociales</h3>
      <ul class="social-icons">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
      </ul>
    </div>
  </div>

  <!-- Agregar versión inicial del proyecto -->
  <p style="text-shadow:1px 1px 1px py">¡Gracias por visitar Accesorios Lalau!</p>
  <div class="container">
        &copy; 2023 Tienda de Accesorios Lalau. Todos los derechos reservados.
    </div>
</footer>

<!-- Librería Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</body>
</html>
