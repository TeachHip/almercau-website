<?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="relative h-96 md:h-[500px] flex items-center justify-center" style="background-image: url('gridimages/boton-catalogo.png'); background-size: cover; background-position: center;">
        <div class="hero-gradient absolute inset-0"></div>
        <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">
                Área Mercantes
            </h1>
            <p class="text-2xl md:text-3xl font-light">
                Recursos y utilidades para el grupo
            </p>
        </div>
    </section>
    
    <!-- Intro -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <p class="text-xl text-gray-700 leading-relaxed text-center">
                <strong>Bienvenida, mercante.</strong> Aquí tienes enlaces útiles, preguntas frecuentes y todo lo que necesitas para participar en el grupo.
            </p>
        </div>
    </section>
    
    <!-- Utilidades -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-5xl">
            <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-12 text-center">
                Herramientas
            </h2>
            
            <div class="grid md:grid-cols-2 gap-8">
                
                <!-- Card 1 -->
                <div class="p-8 rounded-xl shadow-lg text-center">
                    <div class="text-6xl mb-4">🛒</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">App de pedidos</h3>
                    <p class="text-gray-700 mb-6">
                        Accede a la app para hacer tu pedido semanal
                    </p>
                    <a href="#" class="inline-block bg-almercau-yellow hover:opacity-80 text-gray-900 px-8 py-3 rounded-full font-bold transition">
                        Ir a la app
                    </a>
                </div>
                
                <!-- Card 2 -->
                <div class="p-8 rounded-xl shadow-lg text-center">
                    <div class="text-6xl mb-4">📅</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Calendario de recogidas</h3>
                    <p class="text-gray-700 mb-6">
                        Consulta horarios y fechas de recogida de pedidos
                    </p>
                    <a href="#" class="inline-block bg-almercau-yellow hover:opacity-80 text-gray-900 px-8 py-3 rounded-full font-bold transition">
                        Ver calendario
                    </a>
                </div>
                
                <!-- Card 3 -->
                <div class="p-8 rounded-xl shadow-lg text-center">
                    <div class="text-6xl mb-4">💬</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Grupo de WhatsApp</h3>
                    <p class="text-gray-700 mb-6">
                        Únete al grupo para recibir el catálogo cada lunes
                    </p>
                    <a href="#" class="inline-block bg-almercau-yellow hover:opacity-80 text-gray-900 px-8 py-3 rounded-full font-bold transition">
                        Unirme al grupo
                    </a>
                </div>
                
                <!-- Card 4 -->
                <div class="p-8 rounded-xl shadow-lg text-center">
                    <div class="text-6xl mb-4">📄</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Documentos</h3>
                    <p class="text-gray-700 mb-6">
                        Reglamento, acuerdos, información del grupo
                    </p>
                    <a href="#" class="inline-block bg-almercau-yellow hover:opacity-80 text-gray-900 px-8 py-3 rounded-full font-bold transition">
                        Ver documentos
                    </a>
                </div>
                
            </div>
        </div>
    </section>
    
    <!-- Preguntas Frecuentes -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-12 text-center">
                Preguntas frecuentes
            </h2>
            
            <div class="space-y-4" x-data="{ openFaq: null }">
                
                <!-- FAQ 1 -->
                <div class="rounded-xl overflow-hidden">
                    <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <span class="text-2xl">❓</span>
                            <h3 class="text-xl font-bold text-gray-900 text-left">¿Cómo hago un pedido?</h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-600 transition-transform duration-300 flex-shrink-0" :class="{ 'rotate-180': openFaq === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openFaq === 1" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="p-6 pt-0">
                        <p class="text-gray-700 leading-relaxed">
                            Cada lunes recibes el catálogo por WhatsApp. Accedes a la app de pedidos, seleccionas lo que quieres y finalizas. El pedido se envía automáticamente por WhatsApp. Tienes hasta el miércoles para hacer cambios.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ 2 -->
                <div class="rounded-xl overflow-hidden">
                    <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <span class="text-2xl">❓</span>
                            <h3 class="text-xl font-bold text-gray-900 text-left">¿Cuándo puedo recoger mi pedido?</h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-600 transition-transform duration-300 flex-shrink-0" :class="{ 'rotate-180': openFaq === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openFaq === 2" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="p-6 pt-0">
                        <p class="text-gray-700 leading-relaxed">
                            Los pedidos se recogen en el local de miércoles a sábado en horario de apertura (Mié 17-21h, Jue-Vie 11-14.30h/17-21h, Sáb 11-15h). Si es bastante cantidad lo dejamos preparado en cajas, si no lo preparamos cuando llegas.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ 3 -->
                <div class="rounded-xl overflow-hidden">
                    <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <span class="text-2xl">❓</span>
                            <h3 class="text-xl font-bold text-gray-900 text-left">¿Puedo cambiar mi pedido después de hacerlo?</h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-600 transition-transform duration-300 flex-shrink-0" :class="{ 'rotate-180': openFaq === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openFaq === 3" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="p-6 pt-0">
                        <p class="text-gray-700 leading-relaxed">
                            Sí, hasta el miércoles por la mañana puedes modificar o cancelar. Escribe por WhatsApp y lo ajustamos.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ 4 -->
                <div class="rounded-xl overflow-hidden">
                    <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <span class="text-2xl">❓</span>
                            <h3 class="text-xl font-bold text-gray-900 text-left">¿Cómo pago la cuota?</h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-600 transition-transform duration-300 flex-shrink-0" :class="{ 'rotate-180': openFaq === 4 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openFaq === 4" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="p-6 pt-0">
                        <p class="text-gray-700 leading-relaxed">
                            La cuota es de 60€/semestre (enero-junio, julio-diciembre). Se paga por Bizum o transferencia. Avísanos cuando lo hagas y lo apuntamos.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ 5 -->
                <div class="rounded-xl overflow-hidden">
                    <button @click="openFaq = openFaq === 5 ? null : 5" class="w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <span class="text-2xl">❓</span>
                            <h3 class="text-xl font-bold text-gray-900 text-left">¿Qué productos están siempre disponibles?</h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-600 transition-transform duration-300 flex-shrink-0" :class="{ 'rotate-180': openFaq === 5 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openFaq === 5" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="p-6 pt-0">
                        <p class="text-gray-700 leading-relaxed">
                            Embutidos, quesos curados, conservas, legumbres, miel, cerveza, vino, aceite. Están en el catálogo cada semana y puedes recogerlos cualquier día en el local.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ 6 -->
                <div class="rounded-xl overflow-hidden">
                    <button @click="openFaq = openFaq === 6 ? null : 6" class="w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <span class="text-2xl">❓</span>
                            <h3 class="text-xl font-bold text-gray-900 text-left">¿Cómo funcionan los pedidos de frescos?</h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-600 transition-transform duration-300 flex-shrink-0" :class="{ 'rotate-180': openFaq === 6 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openFaq === 6" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="p-6 pt-0">
                        <p class="text-gray-700 leading-relaxed">
                            Frutas, verduras y huevos se piden cada 2 semanas (naranjas una vez al mes en temporada). Te avisamos por el grupo cuándo abrimos pedido. Hay plazo de 48h para apuntarse.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ 7 -->
                <div class="rounded-xl overflow-hidden">
                    <button @click="openFaq = openFaq === 7 ? null : 7" class="w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <span class="text-2xl">❓</span>
                            <h3 class="text-xl font-bold text-gray-900 text-left">¿Puedo traer amigos al bar?</h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-600 transition-transform duration-300 flex-shrink-0" :class="{ 'rotate-180': openFaq === 7 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openFaq === 7" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="p-6 pt-0">
                        <p class="text-gray-700 leading-relaxed">
                            Claro. El bar es abierto a todo el mundo, no hace falta ser mercante. Trae a quien quieras.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ 8 -->
                <div class="rounded-xl overflow-hidden">
                    <button @click="openFaq = openFaq === 8 ? null : 8" class="w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <span class="text-2xl">❓</span>
                            <h3 class="text-xl font-bold text-gray-900 text-left">¿Tengo descuento en eventos?</h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-600 transition-transform duration-300 flex-shrink-0" :class="{ 'rotate-180': openFaq === 8 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openFaq === 8" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="p-6 pt-0">
                        <p class="text-gray-700 leading-relaxed">
                            Sí. Las mercantes tenéis precio especial en catas y prioridad de reserva en todos los eventos.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ 9 -->
                <div class="rounded-xl overflow-hidden">
                    <button @click="openFaq = openFaq === 9 ? null : 9" class="w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <span class="text-2xl">❓</span>
                            <h3 class="text-xl font-bold text-gray-900 text-left">¿Puedo dejar de ser mercante?</h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-600 transition-transform duration-300 flex-shrink-0" :class="{ 'rotate-180': openFaq === 9 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openFaq === 9" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="p-6 pt-0">
                        <p class="text-gray-700 leading-relaxed">
                            Sí, sin problema. No hay permanencia obligatoria. Si ya no quieres participar, avísanos y ya está.
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <!-- Contacto Interno -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-4xl text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-6">
                ¿Dudas?
            </h2>
            
            <p class="text-xl text-gray-700 mb-8">
                Si tienes cualquier duda, sugerencia o problema, escríbenos por WhatsApp o pásate por el local.
            </p>
            
            <a href="https://wa.me/34611183123?text=Hola,%20tengo%20una%20duda%20sobre%20el%20grupo" target="_blank" class="inline-flex items-center gap-3 bg-almercau-yellow hover:opacity-80 text-gray-900 px-10 py-5 rounded-full font-bold text-xl transition transform hover:scale-105 shadow-lg">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                Escribir al grupo
            </a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
