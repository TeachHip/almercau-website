<?php
// Set timezone globally for all scripts
date_default_timezone_set('Europe/Madrid');
/**
 * Centralized site content configuration
 * All default content definitions in one place for easy updates
 */

// Default Site Title & Description
$defaultTitle = 'AlMercáu - Grupo de consumo y bar en Gijón. Calidad directamente del productor';
$defaultDescription = 'Grupo de consumo y bar en Laviada, Gijón. Consumo consciente. Nos organizamos para conseguir alimentos de calidad en las mejores condiciones y trato justo.';

// Page-Specific Titles & Descriptions
$pageTitles = [
    'index' => 'AlMercáu - Del productor al barrio | Grupo de consumo y bar en Gijón',
    'grupo' => 'Grupo de Consumo - Consumo consciente y responsable | AlMercáu Gijón',
    'degustacion' => 'Bar degustación - Aperitivos de calidad | AlMercáu Gijón',
    'productores' => 'Nuestros Productores - Pequeños artesanos de calidad | AlMercáu',
    'contacto' => 'Contacto y Horario - Laviada, Xixón | AlMercáu',
    'soy-mercante' => 'Información para mercantes y calendario | AlMercáu'
];

$pageDescriptions = [
    'index' => 'Del productor al barrio en Laviada, Gijón. Grupo de consumo y bar-degustación con productos de calidad directos del productor. Transparencia, trato justo y vecindad.',
    'grupo' => 'Únete al grupo de consumo AlMercáu en Gijón. Compras colectivas de alimentos de calidad directos del productor a precios justos. No somos tienda, somos grupo. ¡Hazte mercante!',
    'degustacion' => 'Bar-degustación en el barrio de Laviada. Aperitivos, sesión vermut, vinos exclusivos, cervezas artesanas, conservas... Abierto a todo el mundo. Prueba, comparte y disfruta.',
    'productores' => 'Trabajamos con los mejores productores: miel, setas, cerveza, quesos, vinos, conservas... Pequeños productores de calidad excepcional en AlMercáu.',
    'contacto' => 'Visítanos en c. Luanco 5, Laviada, Gijón. Horarios, ubicación y contacto del grupo de consumo y bar AlMercáu. Detrás de los ALSAs. ☎ 611 183 123',
    'soy-mercante' => 'Información para mercantes (socios) y calendario de eventos del grupo de consumo AlMercáu en Gijón.'
];

// Business Contact Information
$siteName = 'AlMercáu';
$siteUrl = 'https://almercau.org';
$businessPhone = '+34611183123';
$businessPhoneDisplay = '611 183 123';
$businessEmail = 'info@almercau.org';
$businessAddress = 'c/ Luanco, 5 - Laviada';
$businessCity = 'Xixón, Asturias';
$businessPostalCode = '33207';
$businessCountry = 'España';

// Social Media
$instagramUrl = 'https://www.instagram.com/almercau/';
$facebookUrl = 'https://www.facebook.com/almercau';
$whatsappUrl = 'https://wa.me/34611183123';

// Site Images
$logoPath = 'assets/imgs/almercau.png';
$defaultOgImage = 'https://almercau.org/assets/imgs/almercau.png';

// Shop Coordinates (for map)
$shopLat = 43.53827092416648;
$shopLng = -5.668128001842376;

// Opening Hours
$openingHours = [
    'wednesday' => '17:00 - 21:00h',
    'thursday_friday' => '11:00 - 14:30h / 17:00 - 21:00h',
    'saturday' => '11:00 - 13:00h'
];

// Individual producer arrays
$best_producer1 = [
    'name' => 'Miel del Eo',
    'image' => 'miel-del-eo.jpg',
    'place' => 'San Tirso de Abres, Asturias',
    'product' => 'Miel',
    'description' => 'Miel 100% natural y artesanal de San Tirso de Abres, en el far-west de Asturias, a 2 pasos de Galicia.'
];

$best_producer2 = [
    'name' => 'Setadebosque',
    'image' => 'setadebosque.jpg',
    'place' => 'Piloña, Asturias',
    'product' => 'Setas shiitake',
    'description' => 'Setas shiitake de cultivo artesano y ecológico en tronco, en el concejo de Piloña.'
];

$best_producer3 = [
    'name' => 'Cerveza Cotoya',
    'image' => 'cerveza-cotoya.jpg',
    'place' => 'Lugones, Asturias',
    'product' => 'Cerveza artesana',
    'description' => 'Cerveza artesana asturiana con algunas variedades que no deberías dejar pasar.'
];

$best_producer4 = [
    'name' => 'Bodega Solotero',
    'image' => 'bodega-solotero.jpg',
    'place' => 'León',
    'product' => 'Vinos',
    'description' => 'Vinos de uva prieto picudo y albarín muy agradables y de soberbia relación calidad-precio.'
];

$best_producer5 = [
    'name' => 'Granja La Amistad',
    'image' => 'huevos-la-amistad.jpg',
    'place' => 'Asturias',
    'product' => 'Huevos',
    'description' => 'Gallinas felices, huevos de calidad.'
];

$best_producer6 = [
    'name' => 'Cooperativa La Unión',
    'image' => 'cooperativa-la-union.jpg',
    'place' => 'Montilla, Córdoba',
    'product' => 'Aceite, vinos y vinagre',
    'description' => 'Cooperativa moderna de gran volumen con almazara y bodega, y excelentes campos de olivos y viñas.'
];

$best_producer7 = [
    'name' => 'Conservas Vega Esla',
    'image' => 'vega-esla.jpg',
    'place' => 'León',
    'product' => 'Conservas vegetales',
    'description' => 'Los mejores pimientos asados del mercado. Verduras y salsas en conserva de producción propia y elaboración artesanal.'
];

$best_producer8 = [
    'name' => 'Café El Chícaro',
    'image' => 'cafe-el-chicaro.jpg',
    'place' => 'Grandas de Salime, Asturias',
    'product' => 'Café de Venezuela',
    'description' => 'Café arábica seleccionado de campos familiares en Venezzuela y tostado artesanalmente en Asturias.'
];


$best_producer = [
    $best_producer1,
    $best_producer2,
    $best_producer3,
    $best_producer4,
    $best_producer5,
    $best_producer6,
    $best_producer7,
    $best_producer8
];
?>
