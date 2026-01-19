<?php
require_once 'includes/site-config.php';
$pageTitle = $pageTitles['grupo'];
$pageDescription = $pageDescriptions['grupo'];
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section id="main-content" class="relative h-96 md:h-[500px] flex items-center justify-center" style="background-image: url('assets/imgs/boton-catalogo.png'); background-size: cover; background-position: center;">
        <div class="hero-gradient absolute inset-0"></div>
        <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto" data-aos="fade">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">
                Grupo de Consumo
            </h1>
            <p class="text-2xl md:text-3xl font-light">
                No somos tienda, somos grupo
            </p>
        </div>
    </section>

<main role="main">

    <!-- Qué es el grupo -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-12 text-center">
                Qué es el grupo
            </h2>

            <div class="grid md:grid-cols-2 gap-12">
                <div class="space-y-6 text-lg text-gray-700 leading-relaxed">
                    <p>
                        Un grupo de consumo es, en esencia, un grupo de personas que se organiza para comprar junta de forma más ventajosa. La ventaja, aparte del precio, es que <strong>decides qué quieres</strong> (y no lo hace el súper por ti).
                    </p>
                    <p>
                        Hay grupos de consumo eco, otros vegetarianos... En la mayoría hay una cesta de productos establecidos. En muchos hay que colaborar en las tareas de transporte, reparto... En AlMercáu optamos por lo más cómodo: <strong>sólo tienes que pedir y recoger</strong>. No hay compromiso de pedido mínimo, tenemos productos eco, vegetarianos y veganos, pero no exclusivamente, y no tienes por qué participar... aunque si colaboras es mucho más interesante y ayudas a mejorar.
                    </p>
                    <p>
                        En catálogo intentamos tener algunos productos básicos como legumbres, aceite, conservas (campo y mar), café o miel y, cada 2 semanas frescos como patatas, huevos y alguna verdura y fruta de temporada. Además, al compartir los productos con el bar, también tienes vinos, cervezas y vermuts exclusivos. <strong>TODO directo del productor y de calidad excepcional</strong>. Para las mercantes comer bien cada día es más fácil.
                    </p>
                    <p>
                        No menos importantes son las actividades que organizamos (en el bar o fuera) y la pertenencia al grupo que, no está mal decirlo, se compone de personas estupendas. A partir de aquí sólo queda pensar qué más podemos hacer.
                    </p>
                </div>

                <div class="bg-gray-200 rounded-2xl h-80 flex items-start justify-center overflow-hidden">
                    <img src="assets/imgs/IMG_20250528_191228.jpg" alt="Presentación de productor para mercantes" class="w-full h-full object-cover self-start" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Cómo funciona -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-16 text-center">
                Cómo funciona
            </h2>

            <div class="grid md:grid-cols-3 lg:grid-cols-5 gap-6">

                <!-- Step 1 -->
                <div class="bg-white rounded-2xl p-5 shadow-sm hover:shadow-md transition text-center">
                    <div class="text-6xl mb-4">🤝</div>
                    <div class="bg-almercau-yellow text-gray-900 rounded-full px-4 py-1 text-sm font-bold mb-3 inline-block">
                        1
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Date de alta</h3>
                    <p class="text-gray-700">
                        Por 10€/mes apoyas el proyecto y ¡ya eres mercante!
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="bg-white rounded-2xl p-5 shadow-sm hover:shadow-md transition text-center">
                    <div class="text-6xl mb-4">📱</div>
                    <div class="bg-almercau-yellow text-gray-900 rounded-full px-4 py-1 text-sm font-bold mb-3 inline-block">
                        2
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 tracking-tight">Consulta el catálogo</h3>
                    <p class="text-gray-700">
                        En la app. Cuando quieras o al recibir los avisos por whatsapp
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="bg-white rounded-2xl p-5 shadow-sm hover:shadow-md transition text-center">
                    <div class="text-6xl mb-4">🛒</div>
                    <div class="bg-almercau-yellow text-gray-900 rounded-full px-4 py-1 text-sm font-bold mb-3 inline-block">
                        3
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Haz tu pedido</h3>
                    <p class="text-gray-700">
                        Fácil desde la app. Envíalo, espera al tícket de compra y págalo
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="bg-white rounded-2xl p-5 shadow-sm hover:shadow-md transition text-center">
                    <div class="text-6xl mb-4">📦</div>
                    <div class="bg-almercau-yellow text-gray-900 rounded-full px-4 py-1 text-sm font-bold mb-3 inline-block">
                        4
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Recoge en el local</h3>
                    <p class="text-gray-700">
                        En horario de apertura. Frescos de miércoles a viernes
                    </p>
                </div>

                <!-- Step 5 -->
                <div class="bg-white rounded-2xl p-5 shadow-sm hover:shadow-md transition text-center">
                    <div class="text-6xl mb-4">✨</div>
                    <div class="bg-almercau-yellow text-gray-900 rounded-full px-4 py-1 text-sm font-bold mb-3 inline-block">
                        5
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Disfruta</h3>
                    <p class="text-gray-700">
                        Productos excepcionales con control de origen a precio justo
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Ventajas -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-16 text-center">
                Qué ganas siendo mercante
            </h2>

            <div class="grid md:grid-cols-2 gap-8">

                <!-- Ventaja 1 -->
                <div class="flex gap-4 items-start rounded-xl p-6">
                    <div class="text-5xl flex-shrink-0">🥬</div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Calidad, calidad y calidad</h3>
                        <p class="text-gray-700">
                            Lo mejor, sin pijaes. Y en Pedidos de Grupo (quincenales) productos freeescos que se cogen para ti
                        </p>
                    </div>
                </div>

                <!-- Ventaja 2 -->
                <div class="flex gap-4 items-start rounded-xl p-6">
                    <div class="text-5xl flex-shrink-0">👍</div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Eliges lo que consumes</h3>
                        <p class="text-gray-700">
                            Sabes qué consumes, qué ingredientes tiene, de dónde viene, cómo se ha producido y cuánto cuesta
                        </p>
                    </div>
                </div>

                <!-- Ventaja 3 -->
                <div class="flex gap-4 items-start rounded-xl p-6">
                    <div class="text-5xl flex-shrink-0">💰</div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Relación calidad/precio</h3>
                        <p class="text-gray-700">
                            Sin márgenes comerciales. A veces hasta menos que en origen (por comprar en grupo)
                        </p>
                    </div>
                </div>

                <!-- Ventaja 4 -->
                <div class="flex gap-4 items-start rounded-xl p-6">
                    <div class="text-5xl flex-shrink-0">🎯</div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Tu mayordomo de compras</h3>
                        <p class="text-gray-700">
                            AlMercáu te escucha, busca, selecciona, negocia y ofrece. Tú eliges, compras y recoges
                        </p>
                    </div>
                </div>

                <!-- Ventaja 5 -->
                <div class="flex gap-4 items-start rounded-xl p-6">
                    <div class="text-5xl flex-shrink-0">🎉</div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Eres del Grupo</h3>
                        <p class="text-gray-700">
                            Participas de un proyecto bien prestoso y tienes preferencia y ventajas en Pedidos Exprés, catas, charlas, actividades...
                        </p>
                    </div>
                </div>

                <!-- Ventaja 6 -->
                <div class="flex gap-4 items-start rounded-xl p-6">
                    <div class="text-5xl flex-shrink-0">🤲</div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Lo haces bien</h3>
                        <p class="text-gray-700">
                            Justo y sostenible. Compras calidad pagando bien a pequeños productores para un cuerpo feliz y una conciencia tranquila
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Requirements Section -->
    <section class="py-20 bg-almercau-blue">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-12 text-center">
                Requisitos
            </h2>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Requirement 1 -->
                <div class="flex flex-col items-center text-center bg-white rounded-xl p-6 shadow-sm">
                    <div class="text-4xl mb-4">📍</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Recoger en Laviada</h3>
                    <p class="text-gray-700">
                        Tienes que recoger tu pedido en el local en las fechas indicadas.
                    </p>
                </div>

                <!-- Requirement 2 -->
                <div class="flex flex-col items-center text-center bg-white rounded-xl p-6 shadow-sm">
                    <div class="text-4xl mb-4">🤝</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Comportarse</h3>
                    <p class="text-gray-700">
                        Somos un grupo. Imprescindible tratarnos con educación y facilitarnos las vidas.
                    </p>
                </div>

                <!-- Requirement 3 -->
                <div class="flex flex-col items-center text-center bg-white rounded-xl p-6 shadow-sm">
                    <div class="text-4xl mb-4">🚶</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Pagar la cuota semestral</h3>
                    <p class="text-gray-700">
                        La cuota permite mantener el modelo sin pedidos mínimos a precios muy justos.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-4xl text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-6">
                Únete
            </h2>
            <p class="text-xl text-gray-700 mb-10 leading-relaxed max-w-2xl mx-auto">
                Si quieres formar parte del grupo, pasa por el local o escríbenos por WhatsApp. Consulta cualquier duda y date de alta directamente.
            </p>
            <a href="https://wa.me/34611183123?text=Hola,%20quiero%20informaci%C3%B3n%20sobre%20hacerme%20mercante" target="_blank" class="inline-flex items-center gap-4 bg-green-500 hover:bg-green-600 text-white px-12 py-6 rounded-full font-bold text-2xl transition transform hover:scale-105 shadow-2xl">
                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                <span>Quiero ser mercante</span>
            </a>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
