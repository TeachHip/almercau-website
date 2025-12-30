<?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="relative h-96 md:h-[500px] flex items-center justify-center" style="background-image: url('gridimages/conservas-bonito-1.jpg'); background-size: cover; background-position: center;">
        <div class="hero-gradient absolute inset-0"></div>
        <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">
                Productos
            </h1>
            <p class="text-2xl md:text-3xl font-light">
                Qué tenemos
            </p>
        </div>
    </section>
    
    <!-- Intro -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-8 text-center">
                Del productor a tu casa
            </h2>
            
            <div class="space-y-6 text-lg text-gray-700 leading-relaxed mb-8">
                <p>
                    <strong>Todo lo que encuentras en AlMercáu viene directamente del productor.</strong> Sin intermediarios, sin engaños. La mayoría son artesanos que cuidan cada detalle.
                </p>
                <p>
                    Si eres mercante, compras a precio de coste. Si no lo eres, también puedes llevarte productos no perecederos en el local a precio normal.
                </p>
            </div>
            
            <div class="border-l-4 border-almercau-yellow p-6 rounded">
                <p class="text-gray-800 font-medium">
                    ℹ️ Los productos frescos (frutas, verduras, huevos) solo están disponibles para mercantes en pedidos quincenales.
                </p>
            </div>
        </div>
    </section>
    
    <!-- Catálogo por Categorías -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-5xl">
            <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-12 text-center">
                Nuestro catálogo
            </h2>
            
            <div class="space-y-4" x-data="{ openCategory: null }">
                
                <!-- Categoría 1: Embutidos y Quesos -->
                <div class="rounded-xl overflow-hidden">
                    <button @click="openCategory = openCategory === 1 ? null : 1" class="w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <span class="text-4xl">🥓</span>
                            <h3 class="text-2xl font-bold text-gray-900">Embutidos y Quesos</h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-600 transition-transform duration-300" :class="{ 'rotate-45': openCategory === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openCategory === 1" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="p-6">
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            Curados artesanos de Asturias y alrededores. Chorizos, salchichón, quesos de oveja, cabra, vaca.
                        </p>
                        
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <div class="h-32 bg-gray-200 rounded mb-3 overflow-hidden">
                                    <img src="gridimages/jamon-con-cuchillo.jpg" alt="Chorizo" class="w-full h-full object-cover">
                                </div>
                                <h4 class="font-bold text-gray-900 mb-1">Chorizo ahumado</h4>
                                <p class="text-sm text-gray-600">Productor artesano</p>
                            </div>
                            
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <div class="h-32 bg-gray-200 rounded mb-3 overflow-hidden">
                                    <img src="gridimages/quesos-tabla.jpg" alt="Queso" class="w-full h-full object-cover">
                                </div>
                                <h4 class="font-bold text-gray-900 mb-1">Queso curado de oveja</h4>
                                <p class="text-sm text-gray-600">Quesería local</p>
                            </div>
                            
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <div class="h-32 bg-gray-200 rounded mb-3 overflow-hidden">
                                    <img src="gridimages/vermut-jamon.jpg" alt="Cecina" class="w-full h-full object-cover">
                                </div>
                                <h4 class="font-bold text-gray-900 mb-1">Cecina artesana</h4>
                                <p class="text-sm text-gray-600">El Bierzo</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Categoría 2: Conservas -->
                <div class="rounded-xl overflow-hidden">
                    <button @click="openCategory = openCategory === 2 ? null : 2" class="w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <span class="text-4xl">🥫</span>
                            <h3 class="text-2xl font-bold text-gray-900">Conservas</h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-600 transition-transform duration-300" :class="{ 'rotate-45': openCategory === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openCategory === 2" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="p-6">
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            Bonito del Cantábrico, mejillones, pimientos, tomate. Conservas de calidad excepcional.
                        </p>
                        
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <div class="h-32 bg-gray-200 rounded mb-3 overflow-hidden">
                                    <img src="gridimages/conservas-bonito-1.jpg" alt="Bonito" class="w-full h-full object-cover">
                                </div>
                                <h4 class="font-bold text-gray-900 mb-1">Bonito del Norte</h4>
                                <p class="text-sm text-gray-600">Conservera Cantábrica</p>
                            </div>
                            
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <div class="h-32 bg-gray-200 rounded mb-3 overflow-hidden">
                                    <img src="gridimages/conservas-bonito-2.jpg" alt="Mejillones" class="w-full h-full object-cover">
                                </div>
                                <h4 class="font-bold text-gray-900 mb-1">Mejillones en escabeche</h4>
                                <p class="text-sm text-gray-600">Galicia</p>
                            </div>
                            
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <div class="h-32 bg-gray-200 rounded mb-3 overflow-hidden">
                                    <img src="gridimages/conservas-bonito-3.jpg" alt="Pimientos" class="w-full h-full object-cover">
                                </div>
                                <h4 class="font-bold text-gray-900 mb-1">Pimientos del piquillo</h4>
                                <p class="text-sm text-gray-600">Navarra</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Categoría 3: Legumbres y Cereales -->
                <div class="rounded-xl overflow-hidden">
                    <button @click="openCategory = openCategory === 3 ? null : 3" class="w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <span class="text-4xl">🫘</span>
                            <h3 class="text-2xl font-bold text-gray-900">Legumbres y Cereales</h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-600 transition-transform duration-300" :class="{ 'rotate-45': openCategory === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openCategory === 3" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="p-6">
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            Fabes, garbanzos, lentejas, arroz. Producto seco de agricultura cuidada.
                        </p>
                        
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <div class="h-32 bg-gray-200 rounded mb-3"></div>
                                <h4 class="font-bold text-gray-900 mb-1">Fabes asturianas</h4>
                                <p class="text-sm text-gray-600">La Granja</p>
                            </div>
                            
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <div class="h-32 bg-gray-200 rounded mb-3"></div>
                                <h4 class="font-bold text-gray-900 mb-1">Garbanzos pedrosillano</h4>
                                <p class="text-sm text-gray-600">Castilla y León</p>
                            </div>
                            
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <div class="h-32 bg-gray-200 rounded mb-3"></div>
                                <h4 class="font-bold text-gray-900 mb-1">Arroz integral</h4>
                                <p class="text-sm text-gray-600">Delta del Ebro</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Categoría 4: Bebidas -->
                <div class="rounded-xl overflow-hidden">
                    <button @click="openCategory = openCategory === 4 ? null : 4" class="w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <span class="text-4xl">🍺</span>
                            <h3 class="text-2xl font-bold text-gray-900">Bebidas</h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-600 transition-transform duration-300" :class="{ 'rotate-45': openCategory === 4 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openCategory === 4" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="p-6">
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            Cervezas artesanas, vinos naturales, sidra, vermut. Para disfrutar en el bar o llevar a casa.
                        </p>
                        
                        <div class="grid md:grid-cols-4 gap-4">
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <div class="h-32 bg-gray-200 rounded mb-3 overflow-hidden">
                                    <img src="gridimages/canero-cerveza-cotoya.jpg" alt="Cerveza" class="w-full h-full object-cover">
                                </div>
                                <h4 class="font-bold text-gray-900 mb-1">Cerveza artesana</h4>
                                <p class="text-sm text-gray-600">Microcervecera</p>
                            </div>
                            
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <div class="h-32 bg-gray-200 rounded mb-3 overflow-hidden">
                                    <img src="gridimages/cotoya-bitter-playa-agua.jpg" alt="Bitter" class="w-full h-full object-cover">
                                </div>
                                <h4 class="font-bold text-gray-900 mb-1">Bitter artesano</h4>
                                <p class="text-sm text-gray-600">Cotoya</p>
                            </div>
                            
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <div class="h-32 bg-gray-200 rounded mb-3"></div>
                                <h4 class="font-bold text-gray-900 mb-1">Vino natural</h4>
                                <p class="text-sm text-gray-600">Bodega pequeña</p>
                            </div>
                            
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <div class="h-32 bg-gray-200 rounded mb-3"></div>
                                <h4 class="font-bold text-gray-900 mb-1">Sidra natural</h4>
                                <p class="text-sm text-gray-600">Asturias</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Categoría 5: Miel y Dulces -->
                <div class="rounded-xl overflow-hidden">
                    <button @click="openCategory = openCategory === 5 ? null : 5" class="w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <span class="text-4xl">🍯</span>
                            <h3 class="text-2xl font-bold text-gray-900">Miel y Dulces</h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-600 transition-transform duration-300" :class="{ 'rotate-45': openCategory === 5 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openCategory === 5" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="p-6">
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            Miel del Eo, mermeladas, chocolates artesanos.
                        </p>
                        
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <div class="h-32 bg-gray-200 rounded mb-3"></div>
                                <h4 class="font-bold text-gray-900 mb-1">Miel de brezo</h4>
                                <p class="text-sm text-gray-600">Valle del Eo</p>
                            </div>
                            
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <div class="h-32 bg-gray-200 rounded mb-3"></div>
                                <h4 class="font-bold text-gray-900 mb-1">Mermelada casera</h4>
                                <p class="text-sm text-gray-600">Frutas de temporada</p>
                            </div>
                            
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <div class="h-32 bg-gray-200 rounded mb-3"></div>
                                <h4 class="font-bold text-gray-900 mb-1">Chocolate 70%</h4>
                                <p class="text-sm text-gray-600">Artesano</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Categoría 6: Frescos -->
                <div class="rounded-xl overflow-hidden">
                    <button @click="openCategory = openCategory === 6 ? null : 6" class="w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <span class="text-4xl">🥬</span>
                            <h3 class="text-2xl font-bold text-gray-900">Frescos <span class="text-sm font-normal text-gray-600">(solo mercantes)</span></h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-600 transition-transform duration-300" :class="{ 'rotate-45': openCategory === 6 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openCategory === 6" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="p-6">
                        <p class="text-gray-700 mb-4 leading-relaxed">
                            Frutas, verduras, huevos. Pedidos quincenales. Solo disponibles para mercantes.
                        </p>
                        
                        <div class="border-l-4 border-almercau-blue p-4 rounded mb-6">
                            <p class="text-gray-800">
                                <strong>🔒 Solo para mercantes:</strong> Naranjas en temporada (pedido mensual), cesta de verduras cada 2 semanas, huevos ecológicos.
                            </p>
                        </div>
                        
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-white rounded-lg p-4 shadow-sm opacity-75">
                                <div class="h-32 bg-gray-200 rounded mb-3"></div>
                                <h4 class="font-bold text-gray-900 mb-1">Cesta de verduras</h4>
                                <p class="text-sm text-gray-600">Huerta local</p>
                            </div>
                            
                            <div class="bg-white rounded-lg p-4 shadow-sm opacity-75">
                                <div class="h-32 bg-gray-200 rounded mb-3"></div>
                                <h4 class="font-bold text-gray-900 mb-1">Naranjas de Valencia</h4>
                                <p class="text-sm text-gray-600">En temporada</p>
                            </div>
                            
                            <div class="bg-white rounded-lg p-4 shadow-sm opacity-75">
                                <div class="h-32 bg-gray-200 rounded mb-3"></div>
                                <h4 class="font-bold text-gray-900 mb-1">Huevos ecológicos</h4>
                                <p class="text-sm text-gray-600">Gallinas felices</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <!-- Comprar sin ser mercante -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-4xl text-center">
            <div class="text-6xl mb-6">🏪</div>
            <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-6">
                ¿No eres mercante?
            </h2>
            <p class="text-xl text-gray-700 mb-8 max-w-2xl mx-auto leading-relaxed">
                También puedes comprar. Los productos no perecederos están disponibles en el local a precio normal. Pásate en horario de apertura y llévate lo que quieras.
            </p>
            
            <a href="contacto.php" class="inline-flex items-center gap-3 bg-almercau-blue hover:opacity-80 text-white px-8 py-4 rounded-full font-bold text-lg transition transform hover:scale-105 shadow-lg">
                Ver horario
            </a>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="py-20 bg-almercau-yellow">
        <div class="container mx-auto px-4 max-w-4xl text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">
                ¿Quieres acceder a todo el catálogo a precio de coste?
            </h2>
            
            <a href="https://wa.me/34611183123?text=Hola,%20quiero%20hacerme%20mercante" target="_blank" class="inline-flex items-center gap-3 bg-gray-900 hover:opacity-80 text-almercau-yellow px-10 py-5 rounded-full font-bold text-xl transition transform hover:scale-105 shadow-lg">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                Hazte mercante
            </a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
