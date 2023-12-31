<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Accesorios Lalau</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        .top-to-bottom {
            opacity: 0;
            transform: translateY(-50px);
            transition: opacity .5s, transform .5s;
        }
        .right-to-left {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity .5s, transform .5s;
        }
        .left-to-right {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity .5s, transform .5s;
        }
        .bottom-to-top {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity .5s, transform .5s;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">

    <!-- Cuerpo de la página -->
    <section class="py-16 bg-white top-to-bottom" data-aos="fade-in" data-aos-delay="300" data-aos-duration="1000">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-semibold text-pink-500 mb-4">Tienda De Accesorios</h2>
            <p class="text-gray-600">En Lalau, tu estilo es nuestra pasión. Nos especializamos en traerte los accesorios más elegantes y únicos que elevarán tus conjuntos a niveles deslumbrantes. Desde collares deslumbrantes hasta paletas de maquillaje excepcionales y fragancias encantadoras, encontrarás todo lo que necesitas para destacar en cada ocasión. Únete a nosotros en un viaje de estilo y autenticidad.</p>
            <a href="#" class="mt-6 py-2 px-4 bg-pink-500 hover:bg-pink-400 text-white rounded-full inline-block">Explora nuestra historia</a>
        </div>
    </section>

    <!-- Productos destacados -->
    <section id="productos" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center bottom-to-top" data-aos="fade-in" data-aos-delay="300" data-aos-duration="1000">
            <h2 class="text-2xl font-semibold text-pink-500 mb-6">Productos Destacados</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Producto 1 -->
                <div class="bg-white rounded-lg shadow-md p-6 transform hover:scale-105 transition duration-300">
                    <img src="img_public/accesorios.jpg" alt="Accesorio" class="mx-auto mb-4 rounded-full">
                    <h3 class="text-xl font-semibold text-pink-500 mb-2">Accesorios</h3>
                    <p class="text-gray-600">Este elegante collar es perfecto para ocasiones especiales o para un look casual. El dije en forma de corona le agrega un toque de autenticidad a tu look.</p>
                    <a href="#" class="mt-4 py-2 px-4 bg-pink-500 hover:bg-pink-400 text-white rounded-full inline-block">Ver Más</a>
                </div>
                <!-- Producto 2 -->
                <div class="bg-white rounded-lg shadow-md p-6 transform hover:scale-105 transition duration-300">
                    <img src="img_public/maquillajes.jpg" alt="Maquillaje" class="mx-auto mb-4 rounded-full">
                    <h3 class="text-xl font-semibold text-pink-500 mb-2">Maquillajes</h3>
                    <p class="text-gray-600">¡Descubre nuestros maquillajes exclusivos! Resalta tu belleza con productos únicos. Perfectos para cada ocasión, realza tu estilo con maquillaje de calidad.</p>
                    <a href="#" class="mt-4 py-2 px-4 bg-pink-500 hover:bg-pink-400 text-white rounded-full inline-block">Ver Más</a>
                </div>
                <!-- Producto 3 -->
                <div class="bg-white rounded-lg shadow-md p-6 transform hover:scale-105 transition duration-300">
                    <img src="img_public/perfumes.jpg" alt="Perfume" class="mx-auto mb-4 rounded-full">
                    <h3 class="text-xl font-semibold text-pink-500 mb-2">Perfumes</h3>
                    <p class="text-gray-600">Descubre esta fragancia: un clásico que nunca pasa de moda. Ideal para ocasiones especiales, te hará destacar con elegancia.</p>
                    <a href="#" class="mt-4 py-2 px-4 bg-pink-500 hover:bg-pink-400 text-white rounded-full inline-block">Ver Más</a>
                </div>
            </div>
        </div>
    </section>

  <section class="bg-light py-16">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center justify-between">
                <div class="w-full md:w-1/2 px-6 right-to-left" data-aos="fade-in" data-aos-delay="300" data-aos-duration="1000">
                    <h2 class="text-2xl font-semibold text-pink-500 mb-4">Descubre Nuestra Inspiración</h2>
                    <p class="text-gray-600">Detrás de cada accesorio se encuentra una historia. Nuestra pasión por la moda, la cultura y la creatividad se fusiona para inspirar cada elección en nuestra tienda. Desde las calles de la ciudad hasta los colores de la naturaleza, exploramos todas las esferas para brindarte accesorios que hablan de tu personalidad única.</p>
                </div>
                <div class="w-full md:w-1/2 px-6 left-to-right" data-aos="fade-in" data-aos-delay="300" data-aos-duration="1000">
                    <h2 class="text-2xl font-semibold text-pink-500 mb-4">Tu Estilo, Nuestra Prioridad</h2>
                    <p class="text-gray-600">En Tienda de Accesorios Lalau, tu estilo es nuestra máxima prioridad. Nuestro equipo dedicado trabaja incansablemente para curar una colección que resuene con tu individualidad. Ya sea que busques un toque de elegancia o una explosión de color, encontrarás algo que encaje perfectamente contigo. Nos enorgullecemos de ser tu socio en el viaje hacia la expresión personal.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
        document.addEventListener("aos:in", ({ detail }) => {
            if (detail instanceof HTMLElement) {
                if (detail.classList.contains("left-to-right")) {
                    detail.style.opacity = 1;
                    detail.style.transform = "translateX(0)";
                }
                if (detail.classList.contains("right-to-left")) {
                    detail.style.opacity = 1;
                    detail.style.transform = "translateX(0)";
                }
                if (detail.classList.contains("bottom-to-top")) {
                    detail.style.opacity = 1;
                    detail.style.transform = "translateY(0)";
                }
                if (detail.classList.contains("top-to-bottom")) {
                    detail.style.opacity = 1;
                    detail.style.transform = "translateY(0)";
                }
            }
        });
    </script>
</body>

</html>
