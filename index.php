<?php
require_once 'includes/site-config.php';
$pageTitle = $pageTitles['index'];
$pageDescription = $pageDescriptions['index'];
include 'includes/header.php';
?>

<!-- Hero Section -->
<section id="main-content" class="relative h-screen min-h-[600px] flex items-center justify-center"
    style="background-image: url('assets/imgs/mesa-sidra-conservas.jpg'); background-size: cover; background-position: center;">
    <div class="hero-gradient absolute inset-0"></div>
    <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto" data-aos="fade">
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
            Del productor al barrio
        </h1>
        <p class="text-xl md:text-2xl mb-10 font-light leading-relaxed">
            Calidad, transparencia, trato justo y vecindad.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="#filosofia"
                class="bg-almercau-yellow hover:opacity-80 text-gray-900 px-5 md:px-8 py-2 md:py-4 rounded-full font-semibold text-lg transition transform hover:scale-105 inline-block">
                Conoce el proyecto
            </a>
            <a href="grupo.php"
                class="bg-almercau-blue hover:opacity-80 text-white px-5 md:px-8 py-2 md:py-4 rounded-full font-semibold text-lg transition transform hover:scale-105 inline-block">
                el Grupo de consumo
            </a>
            <a href="degustacion.php"
                class="bg-white hover:opacity-80 text-almercau-blue px-5 md:px-8 py-2 md:py-4 rounded-full font-semibold text-lg transition transform hover:scale-105 inline-block">
                Al bar
            </a>
        </div>
    </div>
</section>

<main role="main">

<!-- Philosophy Section -->
<section id="filosofia" class="py-20 bg-white">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-8">Un Proyecto sencillo<br>
                con mucha Filosofía y Sabor</h2>
            <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-6">
                En AlMercáu sabemos que <strong>otra forma de consumir es posible</strong>. Con organización, cariño y
                un poco de esfuerzo, conseguimos conectar sin intermediarios los mejores productores de alimentación con
                nuestra gente del barrio de Laviada en Gijón.
            </p>
            <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-6">
                <strong>¿Qué empleamos?</strong> Productos, elaboraciones y trato humano como antiguamente, sin olvidar
                la tecnología para comunicarnos y para acercar los alimentos en las mejores condiciones. Lo que sería
                nuestra acepción de 'decrecimiento': lo pequeño es hermoso, lo sostenible, lo mejor de antes y lo mejor
                de ahora.
            </p>
            <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-6">
                <strong>¿Cómo lo hacemos?</strong> Sólo trabajamos con productores pequeños o muy pequeños (si los
                comparamos con las grandes corporaciones y cadenas de alimentación). Estos productores sí que se
                preocupan por ofrecer lo mejor. Y nosotros lo traemos sin intermediarios para que llegue en esas mismas
                condiciones: en pocos días, sin escalas sospechosas, con el precio justo y con la seguridad de saber que
                comemos y bebemos máxima calidad.
            </p>
            <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-6">
                <strong>¿Por qué?</strong> Porque nos robaron los mercados, y en los supermercados manda el máximo
                beneficio económico a cambio de productos de muy dudosa calidad, sin trazabilidad y a precios caros y
                pactados. Porque muchas tiendinas y bares parecen anuncios comerciales de 4 o 5 marcas famosísimas (y de
                escasa calidad). Porque queremos saber qué consumimos, de dónde viene, cómo se hace y cuánto cuesta de verdad. Porque el
                trato humano se va perdiendo y aquí, en AlMercáu, lo recuperamos con vecindad y cuidados.
            </p>
            <h3 class="text-xl md:text-xl font-bold text-almercau-blue mb-4 mt-10">Lo importante es el producto y las
                personas</h3>
            <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-6">
                El proyecto se materializa en simbiosis entre el <strong>Grupo de Consumo</strong> -donde las mercantes lo apoyan con
                cuotas mensuales- y <strong>AlMercáu degustación</strong> (mundialmente conocido como 'el bar') que se nutre de los mismos productos del grupo, y es donde nos reunimos y
                donde cualquiera puede pasar a conocernos, tomar algo, llevar algún producto a casa y, si le interesa,
                darse de alta en el Grupo.
            </p>
            <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                AlMercáu es un proyecto de barrio, de proximidad, que ayuda a consumir bien, disfrutar y tener la
                conciencia tranquila. Y a hacerlo en armonía, con sencillez y vecindad. Excelentes productos y la
                tranquilidad de hacer las cosas bien son razones que convencen, ho!
            </p>
        </div>
    </div>
</section>

<!-- Two Cards Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">

            <!-- Card 1: Grupo de Consumo -->
            <div id="grupo-consumo"
                class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition border border-gray-100">
                <img src="assets/imgs/boton-catalogo.png" alt="Grupo de Consumo"
                    class="w-full h-64 md:h-80 object-cover" loading="lazy">
                <div class="p-4 md:p-10">
                    <h3 class="text-2xl md:text-3xl font-bold text-almercau-blue mb-4">
                        Grupo de Consumo
                    </h3>
                    <p class="text-gray-700 text-lg leading-relaxed mb-6">
                        Compramos juntas productos de calidad directamente del productor. Sin intermediarios, con
                        transparencia y respeto por el trabajo bien hecho.
                    </p>
                    <p class="text-gray-700 text-lg leading-relaxed mb-6">
                        Servimos pedidos quincenales de productos frescos de temporada, pedidos exprés para optimizar el
                        transporte, los mejores básicos de la despensa, excedentes...
                    </p>
                    <a href="grupo.php"
                        class="inline-flex items-center gap-2 bg-almercau-blue hover:opacity-80 text-white px-4 md:px-6 py-3 rounded-full font-semibold transition">
                        ¿Y cómo funciona?
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Card 2: Degustación -->
            <div id="degustacion"
                class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition border border-gray-100">
                <img src="assets/imgs/comidas-y-raciones.jpg" alt="Degustación"
                    class="w-full h-64 md:h-80 object-cover" loading="lazy">
                <div class="p-4 md:p-10">
                    <h3 class="text-2xl md:text-3xl font-bold text-almercau-blue mb-4">
                        AlMercáu Degustación
                    </h3>
                    <p class="text-gray-700 text-lg leading-relaxed mb-6">
                        El bar. Un espacio sencillo con productos únicos y excelentes. Todo directo de productor. Por
                        eso no hay cocaloca, ni mau, ni dudosos fiambres. Ni tele, porque venimos a charlar, a estar a gusto sin sobresaltos.
                    </p>
                    <p class="text-gray-700 text-lg leading-relaxed mb-6">
                        Hay cerveza artesana, vinos de bodega, vermuts de premio, sidra selección o limonada
                        casera y cosas ricas para picar.
                    </p>
                    <a href="degustacion.php"
                        class="inline-flex items-center gap-2 bg-almercau-yellow hover:opacity-80 text-gray-900 px-4 md:px-6 py-3 rounded-full font-semibold transition">
                        ¿Vienes a tomar algo?
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Why We're Different Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue text-center mb-12">
            ¿Por qué AlMercáu es diferente?
        </h2>

        <div class="grid md:grid-cols-3 gap-8 text-center">
            <!-- Column 1: Direct from Producer -->
            <div class="flex flex-col items-center" data-aos="fade" data-aos-delay="100">
                <div class="text-6xl mb-4">✅</div>
                <h3 class="text-xl md:text-2xl font-bold text-almercau-blue">
                    Directo del productor
                </h3>
                <p class="text-lg text-gray-700">
                    Decidimos qué consumimos
                </p>
            </div>

            <!-- Column 2: Quality First -->
            <div class="flex flex-col items-center" data-aos="fade" data-aos-delay="200">
                <div class="text-6xl mb-4">✅</div>
                <h3 class="text-xl md:text-2xl font-bold text-almercau-blue">
                    Calidad excelente
                </h3>
                <p class="text-lg text-gray-700">
                    De verdad, sin pijaes
                </p>
            </div>

            <!-- Column 3: Neighborhood Project -->
            <div class="flex flex-col items-center" data-aos="fade" data-aos-delay="300">
                <div class="text-6xl mb-4">✅</div>
                <h3 class="text-xl md:text-2xl font-bold text-almercau-blue">
                    Proyecto de barrio
                </h3>
                <p class="text-lg text-gray-700">
                    Va de disfrutar y compartir
                </p>
            </div>
        </div>
    </div>
</section>


<?php
$showWhatsappBtn = true;
$dondeBg = 'bg-almercau-yellow';
include __DIR__ . '/includes/section-donde-estamos.php';
?>

</main>

<?php include 'includes/footer.php'; ?>