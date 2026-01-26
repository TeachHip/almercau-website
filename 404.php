<?php
include 'includes/header.php';
?>
<div class="flex flex-col bg-white">
    <main id="main-content" class="flex flex-col items-center justify-center px-4" style="min-height:0;">
        <div class="flex flex-col items-center w-full">
            <img src="assets/imgs/almercau.png" alt="AlMercáu logo" class="w-32 h-32 mb-4" loading="lazy">
            <h1 class="text-3xl md:text-4xl font-bold text-almercau-blue mb-2">404 – Ups! Nada por aquí, ho!</h1>
            <p class="text-lg text-gray-600 mb-2 text-center">Aún no tenemos esto en AlMercáu.</p>
            <a href="./" class="px-6 py-3 bg-almercau-blue text-white rounded-full font-semibold hover:bg-almercau-yellow hover:text-almercau-blue transition">Vuelve al inicio</a>
        </div>
    </main>
    <?php include 'includes/footer.php'; ?>
</div>
<script>
function resize404Main() {
    var header = document.querySelector('header');
    var footer = document.querySelector('footer');
    var main = document.getElementById('main-content');
    var headerH = header ? header.offsetHeight : 0;
    var footerH = footer ? footer.offsetHeight : 0;
    var minH = window.innerHeight - headerH - footerH;
    if (minH > 0) {
        main.style.minHeight = minH + 'px';
    } else {
        main.style.minHeight = '0';
    }
}
window.addEventListener('DOMContentLoaded', resize404Main);
window.addEventListener('load', resize404Main);
window.addEventListener('resize', resize404Main);
</script>
