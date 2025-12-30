<?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="relative h-96 flex items-center justify-center" style="background-image: url('gridimages/vermut-jamon.jpg'); background-size: cover; background-position: center;">
        <div class="hero-gradient absolute inset-0"></div>
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-5xl md:text-6xl font-bold">
                Contacto
            </h1>
        </div>
    </section>
    
    <!-- Main Content -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-5xl">
            
            <!-- Dónde estamos -->
            <div class="mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-8 text-center">
                    Dónde estamos
                </h2>
                
                <div class="grid md:grid-cols-2 gap-10 items-start">
                    <!-- Address Info -->
                    <div class="space-y-6">
                        <div class="p-6">
                            <div class="flex items-start gap-4">
                                <svg class="w-8 h-8 text-almercau-blue flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Dirección</h3>
                                    <p class="text-lg text-gray-700 leading-relaxed">
                                        c/ Luanco, 5 - Laviada<br>
                                        Xixón, Asturias
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <p class="text-lg text-gray-800 font-medium">
                                📍 Detrás de los ALSAs
                            </p>
                        </div>
                    </div>
                    
                    <!-- Map -->
                    <div class="bg-gray-200 rounded-xl overflow-hidden shadow-lg h-80 flex items-center justify-center">
                        <div class="text-center text-gray-600 p-6">
                            <svg class="w-16 h-16 mx-auto mb-4 text-almercau-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                            </svg>
                            <p class="text-lg font-medium">Google Maps</p>
                            <p class="text-sm mt-2">(Integrar mapa aquí)</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Horario -->
            <div class="mb-16 p-8 md:p-12">
                <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-8 text-center">
                    Horario
                </h2>
                
                <div class="max-w-2xl mx-auto space-y-4">
                    <div class="flex items-center justify-between bg-white rounded-lg p-5 shadow-sm">
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-almercau-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-lg font-semibold text-gray-900">Miércoles</span>
                        </div>
                        <span class="text-lg text-gray-700">17:00 - 21:00h</span>
                    </div>
                    
                    <div class="flex items-center justify-between bg-white rounded-lg p-5 shadow-sm">
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-almercau-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-lg font-semibold text-gray-900">Jueves - Viernes</span>
                        </div>
                        <span class="text-lg text-gray-700">11:00 - 14:30h / 17:00 - 21:00h</span>
                    </div>
                    
                    <div class="flex items-center justify-between bg-white rounded-lg p-5 shadow-sm">
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-almercau-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-lg font-semibold text-gray-900">Sábado</span>
                        </div>
                        <span class="text-lg text-gray-700">11:00 - 13:00h</span>
                    </div>
                </div>
            </div>
            
            <!-- Contacto -->
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-8 text-center">
                    Contacta con nosotros
                </h2>
                
                <div class="max-w-2xl mx-auto space-y-6">
                    
                    <!-- WhatsApp Button -->
                    <div class="text-center">
                        <a href="https://wa.me/34611183123" target="_blank" class="inline-flex items-center gap-4 bg-green-500 hover:bg-green-600 text-white px-10 py-5 rounded-full font-bold text-xl transition transform hover:scale-105 shadow-lg">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            <span>611 183 123</span>
                        </a>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="bg-almercau-blue rounded-xl p-8 text-center">
                        <h3 class="text-xl font-semibold text-white mb-4">Síguenos en redes sociales</h3>
                        <div class="flex justify-center gap-6">
                            <a href="#" class="w-14 h-14 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-full flex items-center justify-center transition transform hover:scale-110" aria-label="Instagram">
                                <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-14 h-14 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-full flex items-center justify-center transition transform hover:scale-110" aria-label="Facebook">
                                <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="p-6 text-center">
                        <div class="flex items-center justify-center gap-3 mb-2">
                            <svg class="w-6 h-6 text-almercau-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-lg font-semibold text-gray-900">Email</span>
                        </div>
                        <a href="mailto:info@almercau.org" class="text-xl text-almercau-blue hover:text-blue-700 font-medium">
                            info@almercau.org
                        </a>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
