<?php
require_once __DIR__ . '/includes/site-config.php';
$pageTitle = $pageTitles['soy-mercante'];
$pageDescription = $pageDescriptions['soy-mercante'];
include __DIR__ . '/includes/header.php';
// Incluir hoja de estilos específica para el calendario
echo '<link rel="stylesheet" href="/assets/css/calendar.css">';
?>
<main>
	<section class="py-20 bg-white">
		<div class="container mx-auto px-4 max-w-4xl text-center">
			<h1 class="text-4xl md:text-5xl font-bold text-almercau-blue mb-6">Soy mercante</h1>
			<p class="text-xl text-gray-700 mb-8">Bienvenido a la sección para mercantes. Aquí encontrarás información relevante y el calendario de eventos.</p>
		</div>
	</section>
	<section class="py-20 bg-white">
		<div class="container mx-auto px-4 max-w-6xl">
			<h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-8 text-center">Calendario de eventos</h2>
			<?php include __DIR__ . '/includes/calendar.php'; ?>
		</div>
	</section>
</main>
<?php
include __DIR__ . '/includes/footer.php';
