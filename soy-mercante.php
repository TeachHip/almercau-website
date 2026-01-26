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
	<!-- Calendario -->
	<section class="py-20 bg-white">
		<div class="container mx-auto px-4 max-w-6xl">
			<h2 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-8 text-center">Calendario de eventos</h2>
			<?php include __DIR__ . '/includes/calendar.php'; ?>
		</div>
	</section>
	<!-- FAQ Section (dynamic from JSON) -->
	<section id="preguntas-frecuentes" class="py-20 bg-white">
		<div class="container mx-auto px-4 max-w-4xl">
			<h2 class="text-2xl md:text-3xl font-bold text-almercau-blue mb-8 text-center">Preguntas frecuentes - Consumidora</h2>
			<?php
			$faqFile = __DIR__ . '/data/FAQ-mercantes.json';
			$faqs = [];
			if (is_readable($faqFile)) {
				$rawFaq = file_get_contents($faqFile);
				$faqs = json_decode($rawFaq, true);
			}
			?>
			<div x-data="{ open: null }" class="space-y-4">
				<?php foreach ($faqs as $i => $faq): $num = $i + 1; ?>
				<div class="border rounded-lg overflow-hidden">
					<button @click="open === <?= $num ?> ? open = null : open = <?= $num ?>" class="w-full text-left px-6 py-4 bg-gray-100 hover:bg-gray-200 focus:outline-none flex justify-between items-center">
						<span><?= $num ?> - <?= htmlspecialchars($faq['question']) ?></span>
						<svg :class="{'rotate-180': open === <?= $num ?>}" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
					</button>
					<div x-show="open === <?= $num ?>" x-collapse x-cloak class="px-6 py-4 bg-white text-gray-700 faq-answer">
						<?= $faq['answer'] ?>
					</div>
				</style>
				<style>
					[x-cloak] { display: none !important; }
				</style>
				</style>
				<style>
					/* Ensure all <p> inside FAQ answers have vertical padding */
					.faq-answer p {
						padding-top: 0.5rem;
						padding-bottom: 0.5rem;
					}
				</style>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</main>
<?php
include __DIR__ . '/includes/footer.php';
