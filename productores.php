<?php
require_once 'includes/site-config.php';
$pageTitle = $pageTitles['productores'];
$pageDescription = $pageDescriptions['productores'];
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section id="main-content" class="relative h-96 md:h-[500px] flex items-center justify-center" style="background-image: url('assets/imgs/con-los-productores.jpg'); background-size: cover; background-position: center;">
        <div class="hero-gradient absolute inset-0"></div>
        <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto" data-aos="fade">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">
                Productores
            </h1>
            <p class="text-2xl md:text-3xl font-light">
                Gracias a quiénes hacen esto posible
            </p>
        </div>
    </section>

<main role="main">

    <!-- Agradecimiento -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-8 text-center">
                Nuestros productores
            </h2>

            <div class="space-y-6 text-xl text-gray-700 leading-relaxed text-center">
                <p>
                    <strong>AlMercáu existe gracias a los productores que confían en nosotros.</strong> Artesanos, agricultores, ganaderos, bodegueros... que cuidan cada detalle, miman la calidad y apuestan por un modelo de comercio justo y directo.
                </p>
                <p>
                    Por muy moderno que se esté volviendo todo seguimos, como desde hace muchos siglos, dependiendo de quienes cultivan, crían y elaboran los alimentos que consumimos. No es una frase hecha. Sin ellos no comemos. Ahora, hay productores masivos, industriales, que venden a grandes cadenas y supermercados y cuyos productos y medios de producción son, cuanto menos, dudosos (para la salud, el medio ambiente y la sociedad en general). Cuanto más, perjudiciales.
                </p>
                <p>Es por ello que el proyecto de AlMercáu apuesta por <strong>pequeños productores de proximidad, responsables, que garantizan calidad, sostenibilidad y un trato justo</strong>. Así consumimos y comemos bien (¡muy bien!) y colaboramos con el tejido productivo, el mantenimiento de puestos de trabajo y una sociedad con algo de sentido común.</p>
                <p>Todos nuestros productores son ejemplares en cuanto al producto que ofrecen y el trato que mantenemos. Cuando no es así buscamos uno nuevo. Capacidad de elección se llama. Y como buenos profesionales no dejan de enseñarnos. Con el tiempo algunos pasaron a ser parte esencial de AlMercáu. En ese caso les concedemos nuestro particular etiquetado de garantía: <strong>Excelente producto. Productores excelentes</strong>. Y, tenlo claro, tiene más valor que el FIFA de la paz.</p>
            </div>
        </div>
    </section>

    <!-- Listado Productores -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="flex justify-center mb-8">
                <img
                    src="assets/imgs/productores-excelentes/certificado-AlMercau-excelente-producto.png"
                    alt="Certificado AlMercáu - Excelente Producto"
                    class="w-full max-w-[200px] sm:max-w-[260px] md:max-w-[320px] h-auto object-contain"
                    loading="lazy">
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-12 text-center">
                Excelente producto. Productores excelentes.
            </h2>

            <div class="grid md:grid-cols-2 gap-6">

                <?php foreach ($best_producer as $producer): ?>
                <!-- Mobile layout -->
                <article class="bg-white rounded-xl p-2 shadow-sm hover:shadow-md transition flex flex-col gap-2 items-stretch md:hidden">
                    <h3 class="text-lg font-bold text-gray-900 mb-0 w-full">
                        <?= htmlspecialchars($producer['name']) ?>
                    </h3>
                    <div class="flex flex-row w-full">
                        <div class="w-20 h-20 bg-gray-200 rounded-lg flex-shrink-0 flex items-center justify-center overflow-hidden -mt-2">
                            <img src="<?= 'assets/imgs/productores-excelentes/' . htmlspecialchars($producer['image']) ?>" alt="<?= htmlspecialchars($producer['name']) ?>" class="w-full h-full object-cover" loading="lazy">
                        </div>
                        <div class="flex flex-col justify-center pl-3 flex-1">
                            <p class="text-xs text-gray-600 flex items-center gap-1 mb-1">
                                <span>📍</span> <?= htmlspecialchars($producer['place']) ?>
                            </p>
                            <p class="text-almercau-blue font-semibold text-sm">
                                <?= htmlspecialchars($producer['product']) ?>
                            </p>
                        </div>
                    </div>
                    <div class="w-full">
                        <p class="text-gray-700 text-xs leading-relaxed mt-1">
                            <?= htmlspecialchars($producer['description']) ?>
                        </p>
                    </div>
                </article>
                <!-- Desktop layout -->
                <article class="bg-white rounded-xl md:p-2 shadow-sm hover:shadow-md transition hidden md:flex gap-4 items-start">
                    <div class="w-[120px] h-[120px] bg-gray-200 rounded-lg flex-shrink-0 flex items-center justify-center overflow-hidden m-0 p-0">
                        <img src="<?= 'assets/imgs/productores-excelentes/' . htmlspecialchars($producer['image']) ?>" alt="<?= htmlspecialchars($producer['name']) ?>" class="w-full h-full object-cover" loading="lazy">
                    </div>
                    <div class="flex-1 min-w-0 flex flex-col justify-center">
                            <h3 class="text-lg font-bold text-gray-900 mb-0" style="margin-bottom:0;padding-bottom:0;">
                            <?= htmlspecialchars($producer['name']) ?>
                        </h3>
                        <p class="text-xs text-gray-600 mb-2 flex items-center gap-1">
                            <span>📍</span> <?= htmlspecialchars($producer['place']) ?>
                        </p>
                        <p class="text-almercau-blue font-semibold text-sm mb-2">
                            <?= htmlspecialchars($producer['product']) ?>
                        </p>
                        <p class="text-gray-700 text-xs leading-relaxed mt-2">
                            <?= htmlspecialchars($producer['description']) ?>
                        </p>
                    </div>
                </article>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <!-- Llamada Nuevos Productores -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-5xl">
            <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-8 text-center">
                ¿Eres productor?
            </h2>

            <div class="max-w-3xl mx-auto mb-12 text-lg text-gray-700 leading-relaxed text-center space-y-4">
                <p>
                    <strong>Si produces alimentos de calidad y buscas un canal de venta justo, AlMercáu puede ser tu sitio.</strong>
                </p>
            </div>

            <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Qué ofrecemos</h3>

            <div class="grid md:grid-cols-2 gap-8 mb-12">

                <!-- Oferta 1 -->
                <div class="flex flex-col items-center text-center md:flex-row md:items-start md:text-left md:gap-1">
                    <div class="text-4xl flex-shrink-0 mb-0 md:mb-0 md:mr-2">👨‍👩‍👧‍👦</div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-0 leading-tight">Un cliente grande</h4>
                        <p class="text-gray-700 m-0 leading-snug">
                            70 familias (creciendo) + hostelería. Consumo a medida: regular y predecible, o puntual.
                        </p>
                    </div>
                </div>

                <!-- Oferta 2 -->
                <div class="flex flex-col items-center text-center md:flex-row md:items-start md:text-left md:gap-1">
                    <div class="text-4xl flex-shrink-0 mb-0 md:mb-0 md:mr-2">📢</div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-0 leading-tight">Promoción</h4>
                        <p class="text-gray-700 m-0 leading-snug">
                            Redes sociales, eventos, contacto directo con consumidores que valoran tu trabajo.
                        </p>
                    </div>
                </div>

                <!-- Oferta 3 -->
                <div class="flex flex-col items-center text-center md:flex-row md:items-start md:text-left md:gap-1">
                    <div class="text-4xl flex-shrink-0 mb-0 md:mb-0 md:mr-2">🤝</div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-0 leading-tight">Networking</h4>
                        <p class="text-gray-700 m-0 leading-snug">
                            Conexión con otros productores, hosteleros, proyectos afines.
                        </p>
                    </div>
                </div>

                <!-- Oferta 4 -->
                <div class="flex flex-col items-center text-center md:flex-row md:items-start md:text-left md:gap-1">
                    <div class="text-4xl flex-shrink-0 mb-0 md:mb-0 md:mr-2">💶</div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-0 leading-tight">Cobro sin demora</h4>
                        <p class="text-gray-700 m-0 leading-snug">
                            Pagamos a tiempo. Sin retrasos, sin excusas.
                        </p>
                    </div>
                </div>

                <!-- Oferta 5 -->
                <div class="flex flex-col items-center text-center md:flex-row md:items-start md:text-left md:gap-1">
                    <div class="text-4xl flex-shrink-0 mb-0 md:mb-0 md:mr-2">🌱</div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-0 leading-tight">Proyecto social</h4>
                        <p class="text-gray-700 m-0 leading-snug">
                            No somos una empresa al uso. Somos un proyecto de grupo que apuesta por un modelo distinto.
                        </p>
                    </div>
                </div>

                <!-- Oferta 6 -->
                <div class="flex flex-col items-center text-center md:flex-row md:items-start md:text-left md:gap-1">
                    <div class="text-4xl flex-shrink-0 mb-0 md:mb-0 md:mr-2">💻</div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-0 leading-tight">Ayuda web y comunicación</h4>
                        <p class="text-gray-700 m-0 leading-snug">
                            Te echamos una mano con tu presencia digital si lo necesitas (de la mano de 4tres.com)
                        </p>
                    </div>
                </div>

            </div>

            <div class="max-w-3xl mx-auto text-center">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Qué valoramos:</h3>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Calidad extrema. Honestidad. Trato directo. Compromiso con tu producto.
                </p>
            </div>
        </div>
    </section>

    <!-- CTA Contacto -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-4xl text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8">
                ¿Hablamos?
            </h2>

            <a href="https://wa.me/34611183123?text=Hola,%20soy%20productor%20y%20quiero%20informaci%C3%B3n" target="_blank" class="inline-flex items-center gap-3 bg-green-500 hover:bg-green-600 text-white px-10 py-5 rounded-full font-bold text-xl transition transform hover:scale-105 shadow-lg mb-6">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                Contacta con nosotros
            </a>

            <p class="text-gray-600 mt-4">
                O escribe a: <a href="mailto:info@almercau.org" class="text-almercau-blue font-semibold hover:underline">info@almercau.org</a>
            </p>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
