<?php
// Load centralized site configuration
if (!isset($defaultTitle)) {
    require_once __DIR__ . '/site-config.php';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : $defaultTitle; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : $defaultDescription; ?>">
    <meta name="theme-color" content="#196b8e">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $siteUrl . (isset($_SERVER['REQUEST_URI']) ? htmlspecialchars($_SERVER['REQUEST_URI']) : ''); ?>">

    <!-- Favicons for all devices -->
    <link rel="icon" type="image/x-icon" href="/assets/imgs/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/imgs/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/imgs/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/imgs/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/imgs/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/assets/imgs/android-chrome-512x512.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#196b8e">
    <meta name="theme-color" content="#196b8e">

    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $siteUrl . (isset($_SERVER['REQUEST_URI']) ? htmlspecialchars($_SERVER['REQUEST_URI']) : ''); ?>">
    <meta property="og:title" content="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : htmlspecialchars($defaultTitle); ?>">
    <meta property="og:description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : htmlspecialchars($defaultDescription); ?>">
    <meta property="og:image" content="<?php echo $defaultOgImage; ?>">
    <meta property="og:locale" content="es_ES">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : htmlspecialchars($defaultTitle); ?>">
    <meta name="twitter:description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : htmlspecialchars($defaultDescription); ?>">
    <meta name="twitter:image" content="<?php echo $defaultOgImage; ?>">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fit One Line JS (auto-fit text to one line)
    <script defer src="/assets/js/fit-one-line.js"></script> -->

    <!-- Custom Effects CSS -->
    <link rel="stylesheet" href="assets/css/effects.css">

    <!-- AOS (Animate On Scroll) CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

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

        /* Accordion Styles - Centralized Configuration */
        .accordion-button {
            /* Button base styles */
        }

        .accordion-icon {
            /* Plus icon that rotates to X */
        }

        .accordion-icon-emoji {
            font-size: 2.25rem; /* text-4xl equivalent: 36px */
        }

        .accordion-heading {
            font-size: 1.5rem; /* text-2xl equivalent: 24px */
        }

        .accordion-content {
            /* Content area styles */
        }
    </style>

    <!-- Structured Data (Schema.org) -->
    <script type="application/ld+json">
        <?php
        // Build JSON-LD schema using site-config.php variables
        $schema = [
            "@context" => "https://schema.org",
            "@type" => "LocalBusiness",
            "name" => $siteName,
            "description" => $defaultDescription,
            "image" => $defaultOgImage,
            "url" => $siteUrl,
            "@id" => $siteUrl,
            "telephone" => $businessPhone,
            "email" => $businessEmail,
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => $businessAddress,
                "addressLocality" => $businessCity,
                "addressRegion" => "Asturias",
                "postalCode" => $businessPostalCode,
                "addressCountry" => "ES"
            ],
            "geo" => [
                "@type" => "GeoCoordinates",
                "latitude" => $shopLat,
                "longitude" => $shopLng
            ],
            "openingHoursSpecification" => [
                [
                    "@type" => "OpeningHoursSpecification",
                    "dayOfWeek" => "Wednesday",
                    "opens" => "17:00",
                    "closes" => "21:00"
                ],
                [
                    "@type" => "OpeningHoursSpecification",
                    "dayOfWeek" => ["Thursday", "Friday"],
                    "opens" => "11:00",
                    "closes" => "14:30"
                ],
                [
                    "@type" => "OpeningHoursSpecification",
                    "dayOfWeek" => ["Thursday", "Friday"],
                    "opens" => "17:00",
                    "closes" => "21:00"
                ],
                [
                    "@type" => "OpeningHoursSpecification",
                    "dayOfWeek" => "Saturday",
                    "opens" => "11:00",
                    "closes" => "13:00"
                ]
            ],
            "priceRange" => "€",
            "servesCuisine" => "Spanish",
            "sameAs" => array_filter([
                $instagramUrl ?? null,
                $facebookUrl ?? null,
                "https://bsky.app/profile/almercau.org"
            ])
        ];
        echo json_encode($schema, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
        ?>
    </script>
</head>
<body class="bg-white text-gray-800">

    <?php
    // Get current page filename
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>

    <!-- Skip to main content link for keyboard users -->
    <a href="#main-content" class="skip-link">Saltar al contenido principal</a>

    <!-- Header/Navigation -->
    <header class="bg-almercau-yellow shadow-sm sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">

                <!-- Logo -->
                <div class="flex items-center">
                    <a href="index.php" class="flex items-center">
                        <img src="assets/imgs/almercau.png" alt="AlMercáu" class="h-12 md:h-14">
                        <span class="hidden lg:inline-block text-2xl font-extrabold text-almercau-blue tracking-tight whitespace-nowrap ml-3">AlMercáu</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-8">
                    <?php if($current_page == 'index.php'): ?>
                        <span class="text-almercau-blue font-bold underline">Home</span>
                    <?php else: ?>
                        <a href="index.php" class="text-gray-700 hover:text-almercau-blue transition">Home</a>
                    <?php endif; ?>

                    <?php if($current_page == 'grupo.php'): ?>
                        <span class="text-almercau-blue font-bold underline">Grupo de Consumo</span>
                    <?php else: ?>
                        <a href="grupo.php" class="text-gray-700 hover:text-almercau-blue transition">Grupo de Consumo</a>
                    <?php endif; ?>

                    <?php if($current_page == 'degustacion.php'): ?>
                        <span class="text-almercau-blue font-bold underline">Degustación</span>
                    <?php else: ?>
                        <a href="degustacion.php" class="text-gray-700 hover:text-almercau-blue transition">Degustación</a>
                    <?php endif; ?>

                    <?php if($current_page == 'productores.php'): ?>
                        <span class="text-almercau-blue font-bold underline">Productores</span>
                    <?php else: ?>
                        <a href="productores.php" class="text-gray-700 hover:text-almercau-blue transition">Productores</a>
                    <?php endif; ?>

                    <?php if($current_page == 'contacto.php'): ?>
                        <span class="text-almercau-blue font-bold underline">Contacto</span>
                    <?php else: ?>
                        <a href="contacto.php" class="text-gray-700 hover:text-almercau-blue transition">Contacto</a>
                    <?php endif; ?>
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
                <div class="flex-1 flex flex-col items-center lg:hidden">
                    <span class="block text-2xl font-extrabold text-almercau-blue tracking-tight mb-1">AlMercáu</span>
                </div>
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-almercau-blue focus:outline-none">
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
                <div class="flex flex-col items-center space-y-3">
                    <?php if($current_page == 'index.php'): ?>
                        <span class="text-almercau-blue font-bold underline py-2">Home</span>
                    <?php else: ?>
                        <a href="index.php" class="text-gray-700 hover:text-almercau-blue transition py-2">Home</a>
                    <?php endif; ?>

                    <?php if($current_page == 'grupo.php'): ?>
                        <span class="text-almercau-blue font-bold underline py-2">Grupo de Consumo</span>
                    <?php else: ?>
                        <a href="grupo.php" class="text-gray-700 hover:text-almercau-blue transition py-2">Grupo de Consumo</a>
                    <?php endif; ?>

                    <?php if($current_page == 'degustacion.php'): ?>
                        <span class="text-almercau-blue font-bold underline py-2">Degustación</span>
                    <?php else: ?>
                        <a href="degustacion.php" class="text-gray-700 hover:text-almercau-blue transition py-2">Degustación</a>
                    <?php endif; ?>

                    <?php if($current_page == 'productores.php'): ?>
                        <span class="text-almercau-blue font-bold underline py-2">Productores</span>
                    <?php else: ?>
                        <a href="productores.php" class="text-gray-700 hover:text-almercau-blue transition py-2">Productores</a>
                    <?php endif; ?>

                    <?php if($current_page == 'contacto.php'): ?>
                        <span class="text-almercau-blue font-bold underline py-2">Contacto</span>
                    <?php else: ?>
                        <a href="contacto.php" class="text-gray-700 hover:text-almercau-blue transition py-2">Contacto</a>
                    <?php endif; ?>

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
