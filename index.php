<?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="relative h-screen min-h-[600px] flex items-center justify-center" style="background-image: url('gridimages/mesa-sidra-conservas.jpg'); background-size: cover; background-position: center;">
        <div class="hero-gradient absolute inset-0"></div>
        <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                Del productor al barrio
            </h1>
            <p class="text-xl md:text-2xl mb-10 font-light leading-relaxed">
                Excelentes productos directos. Calidad, honestidad, sencillez, vecindad
            </p>
            <a href="#filosofia" class="bg-almercau-yellow hover:opacity-80 text-gray-900 px-8 py-4 rounded-full font-semibold text-lg transition transform hover:scale-105 inline-block">
                Conoce el proyecto
            </a>
        </div>
    </section>

    <!-- Philosophy Section -->
    <section id="filosofia" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-8">Nuestra Filosofía</h2>
                <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-6">
                    AlMercáu nace de la convicción de que otra forma de consumir es posible. Creemos en la conexión directa entre productores y consumidores, eliminando intermediarios innecesarios y recuperando la esencia de lo auténtico.
                </p>
                <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                    Somos un proyecto de barrio que apuesta por la <strong>calidad</strong>, la <strong>honestidad</strong>, la <strong>sencillez</strong> y la <strong>vecindad</strong>. Productos excelentes que llegan directamente del productor a tu mesa.
                </p>
            </div>
        </div>
    </section>

    <!-- Two Cards Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">

                <!-- Card 1: Grupo de Consumo -->
                <div id="grupo-consumo" class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition border border-gray-100">
                    <img src="gridimages/boton-catalogo.png" alt="Grupo de Consumo" class="w-full h-64 md:h-80 object-cover">
                    <div class="p-8 md:p-10">
                        <h3 class="text-2xl md:text-3xl font-bold text-almercau-blue mb-4">
                            AlMercáu Grupo de Consumo
                        </h3>
                        <p class="text-gray-700 text-lg leading-relaxed mb-6">
                            Un grupo de consumo donde puedes acceder a productos de calidad directamente de los productores. Sin intermediarios, con transparencia y respeto por el trabajo bien hecho. Pedidos semanales de productos frescos, ecológicos y de temporada.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 bg-almercau-blue hover:opacity-80 text-white px-6 py-3 rounded-full font-semibold transition">
                            Cómo funciona
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Card 2: Degustación -->
                <div id="degustacion" class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition border border-gray-100">
                    <img src="gridimages/comidas-y-raciones.jpg" alt="Degustación" class="w-full h-64 md:h-80 object-cover">
                    <div class="p-8 md:p-10">
                        <h3 class="text-2xl md:text-3xl font-bold text-almercau-blue mb-4">
                            AlMercáu Degustación
                        </h3>
                        <p class="text-gray-700 text-lg leading-relaxed mb-6">
                            Un espacio acogedor para disfrutar y descubrir. Bar de degustación donde puedes probar vinos naturales, cervezas artesanas, vermuts, conservas de calidad y productos seleccionados. Un lugar de encuentro y conversación en el barrio.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 bg-almercau-yellow hover:opacity-80 text-gray-900 px-6 py-3 rounded-full font-semibold transition">
                            Ven a tomar algo
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section id="contacto" class="py-20 bg-almercau-yellow">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue text-center mb-12">
                Dónde estamos
            </h2>

            <div class="grid md:grid-cols-2 gap-10 items-start">

                <!-- Info Column -->
                <div class="space-y-8 text-center md:text-left">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3 flex items-center gap-2 justify-center md:justify-start">
                            <svg class="w-6 h-6 text-almercau-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Dirección
                        </h3>
                        <p class="text-lg text-gray-700">
                            c/ Luanco, 5 - Laviada<br>
                            Xixón, Asturias
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3 flex items-center gap-2 justify-center md:justify-start">
                            <svg class="w-6 h-6 text-almercau-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Horario
                        </h3>
                        <div class="text-lg text-gray-700 space-y-1">
                            <p><strong>Miércoles:</strong> 17:00 - 21:00h</p>
                            <p><strong>Jueves - Viernes:</strong> 11:00 - 14:30h / 17:00 - 21:00h</p>
                            <p><strong>Sábado:</strong> 11:00 - 13:00h</p>
                        </div>
                    </div>

                    <div class="flex justify-center md:justify-start">
                        <a href="https://wa.me/34611183123" target="_blank" class="inline-flex items-center gap-3 bg-green-500 hover:bg-green-600 text-white px-8 py-4 rounded-full font-semibold text-lg transition transform hover:scale-105">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            Contactar por WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Map Column -->
                <div class="bg-gray-200 rounded-2xl overflow-hidden shadow-lg h-96 md:h-full min-h-[400px] flex items-center justify-center">
                    <div class="text-center text-gray-600">
                        <svg class="w-16 h-16 mx-auto mb-4 text-almercau-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                        </svg>
                        <p class="text-lg font-medium">Mapa interactivo</p>
                        <p class="text-sm">(Integrar Google Maps o similar)</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
