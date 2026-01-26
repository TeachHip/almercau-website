<?php
// Dónde estamos section for both index and contacto
// Usage: include 'includes/section-donde-estamos.php';
// Set $showWhatsappBtn = true (index) or false (contacto) before including.
require_once __DIR__ . '/site-config.php';
$sectionBg = isset($dondeBg) ? $dondeBg : 'bg-almercau-yellow';
?>
<section id="contacto" class="py-20 <?php echo $sectionBg; ?>">
    <div class="container mx-auto px-4 max-w-6xl" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold text-almercau-blue text-center mb-12">
            Dónde estamos
        </h2>
        <div class="grid md:grid-cols-2 gap-10 items-start">
            <!-- Info Column -->
            <div class="space-y-8 text-center md:text-left no-strong-style" data-aos="fade-left" data-aos-delay="100">
                <address>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3 flex items-center gap-2 justify-start text-left">
                        <svg class="w-6 h-6 text-almercau-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Dirección
                    </h3>
                    <p class="text-lg text-gray-700 pl-0 md:pl-8">
                        c/ Luanco, 5 - Laviada<br>
                        (¡tras la estación de autobuses!)<br>
                        Xixón, Asturias
                    </p>
                </address>
                <section aria-label="Horario">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3 flex items-center gap-2 justify-start text-left">
                        <svg class="w-6 h-6 text-almercau-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Horario
                    </h3>
                    <div class="text-lg text-gray-700 space-y-1 pl-0 md:pl-8">
                        <p><strong>Miércoles:</strong> 17:00 - 21:00h</p>
                        <p><strong>Jueves - Viernes:</strong> 11:00 - 14:30h / 17:00 - 21:00h</p>
                        <p><strong>Sábado:</strong> 11:00 - 13:00h</p>
                        <p class="pt-2 leading-tight"><em>Grupo de Consumo abierto por whatsapp de lunes a viernes en horario de oficina</em></p>
                    </div>
                </section>
                <?php if (!empty($showWhatsappBtn)): ?>
                <div class="flex justify-center md:justify-start">
                    <a href="https://wa.me/34611183123" target="_blank"
                        class="inline-flex items-center gap-3 bg-green-500 hover:bg-green-600 text-white px-8 py-4 rounded-full font-semibold text-lg transition transform hover:scale-105">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg>
                        Contactar por WhatsApp
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <!-- Map Column -->
            <div class="bg-gray-200 rounded-2xl overflow-hidden shadow-lg h-96 md:h-full min-h-[400px] flex items-center justify-center" data-aos="fade-right" data-aos-delay="200">
                <div id="map-donde-estamos" class="w-full h-full min-h-[350px]" style="min-height:350px;"></div>
            </div>
            <style>
            @media (max-width: 767px) {
                /* Push Leaflet controls down on small screens */
                #map-donde-estamos .leaflet-top,
                #map-donde-estamos .leaflet-control-container .leaflet-top {
                    top: 2.5rem !important;
                }
            }
            </style>
            </div>
        </div>
    </div>
</section>
<!-- Leaflet CSS/JS (only once per page, but safe to include here for both pages) -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var lat = <?php echo json_encode($shopLat); ?>;
        var lng = <?php echo json_encode($shopLng); ?>;
        var map = L.map('map-donde-estamos').setView([lat, lng], 16);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        var almercauIcon = L.icon({
            iconUrl: 'assets/imgs/favicon-32x32.png',
            iconSize: [24, 24],
            iconAnchor: [12, 24],
            popupAnchor: [0, -24]
        });
        L.marker([lat, lng], { icon: almercauIcon }).addTo(map)
            .bindPopup('AlMercáu')
            .openPopup();
    });
</script>
