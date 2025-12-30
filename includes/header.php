<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlMercáu - Grupo de consumo en Xixón</title>
    <meta name="description" content="Grupo de consumo en Laviada, Gijón. Nos organizamos y negociamos compras al por mayor para conseguir alimentos de calidad TOP a precios de súper.">
    <meta name="theme-color" content="#196b8e">
    
    <!-- Favicons -->
    <link rel="icon" href="gridimages/logo_almercau2.png">
    <link rel="apple-touch-icon" href="gridimages/logo_almercau2.png">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://almercau.org">
    <meta property="og:title" content="AlMercáu - Grupo de consumo en Xixón. Calidad TOP a precio de súper">
    <meta property="og:description" content="Grupo de consumo en Laviada, Gijón. Nos organizamos y negociamos compras al por mayor para conseguir mejores alimentos. No hay tienda.">
    <meta property="og:image" content="https://almercau.org/gridimages/logo_almercau2.png">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Custom Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'almercau-blue': '#196b8e',
                        'almercau-yellow': '#f7ec14',
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Previous fonts tested:
           1. Inter
           2. Montserrat + Open Sans
           3. Poppins + Lato (favorite body font)
           4. Raleway + Nunito */
        
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800&family=Lato:wght@300;400;700&display=swap');
        
        body {
            font-family: 'Lato', sans-serif;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Raleway', sans-serif;
        }
        
        .hero-gradient {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
        }
    </style>
</head>
<body class="bg-white text-gray-800">
    
    <!-- Header/Navigation -->
    <header class="bg-almercau-yellow shadow-sm sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="index.php" class="flex items-center">
                        <img src="gridimages/logo_almercau2.png" alt="AlMercáu" class="h-12 md:h-14">
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="index.php" class="text-gray-700 hover:text-almercau-blue transition">Home</a>
                    <a href="grupo.php" class="text-gray-700 hover:text-almercau-blue transition">Grupo de Consumo</a>
                    <a href="degustacion.php" class="text-gray-700 hover:text-almercau-blue transition">Degustación</a>
                    <a href="productos.php" class="text-gray-700 hover:text-almercau-blue transition">Productos</a>
                    <a href="productores.php" class="text-gray-700 hover:text-almercau-blue transition">Productores</a>
                    <a href="eventos.php" class="text-gray-700 hover:text-almercau-blue transition">Eventos</a>
                    <a href="contacto.php" class="text-gray-700 hover:text-almercau-blue transition">Contacto</a>
                    <a href="mercantes.php" class="text-gray-700 hover:text-almercau-blue transition">+</a>
                </div>
                
                <!-- WhatsApp Button (Desktop) -->
                <div class="hidden lg:block">
                    <a href="https://wa.me/34611183123" target="_blank" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2.5 rounded-full font-medium transition inline-flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        611 183 123
                    </a>
                </div>
                
                <!-- Hamburger Menu Button (Mobile) -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div x-show="mobileMenuOpen" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 transform -translate-y-2"
                 x-transition:enter-end="opacity-100 transform translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 transform translate-y-0"
                 x-transition:leave-end="opacity-0 transform -translate-y-2"
                 class="lg:hidden mt-4 pb-4">
                <div class="flex flex-col space-y-3">
                    <a href="index.php" class="text-gray-700 hover:text-almercau-blue transition py-2">Home</a>
                    <a href="grupo.php" class="text-gray-700 hover:text-almercau-blue transition py-2">Grupo de Consumo</a>
                    <a href="degustacion.php" class="text-gray-700 hover:text-almercau-blue transition py-2">Degustación</a>
                    <a href="productos.php" class="text-gray-700 hover:text-almercau-blue transition py-2">Productos</a>
                    <a href="productores.php" class="text-gray-700 hover:text-almercau-blue transition py-2">Productores</a>
                    <a href="eventos.php" class="text-gray-700 hover:text-almercau-blue transition py-2">Eventos</a>
                    <a href="contacto.php" class="text-gray-700 hover:text-almercau-blue transition py-2">Contacto</a>
                    <a href="mercantes.php" class="text-gray-700 hover:text-almercau-blue transition py-2">+</a>
                    <a href="https://wa.me/34611183123" target="_blank" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2.5 rounded-full font-medium transition inline-flex items-center justify-center gap-2 mt-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        611 183 123
                    </a>
                </div>
            </div>
        </nav>
    </header>
