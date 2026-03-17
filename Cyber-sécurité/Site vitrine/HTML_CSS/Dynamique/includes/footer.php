<footer class="border-t border-slate-200 bg-white">
    <?php
    $isCartPage = basename($_SERVER['SCRIPT_NAME']) === 'cart.php';
    $returnLabel = $isCartPage ? 'Retour' : 'Haut de page';
    $returnHref = $isCartPage ? '/' : '/#accueil';
    ?>
    <div class="mx-auto max-w-6xl px-4 py-10">
        <div class="grid gap-6 md:grid-cols-2 md:items-center">
            <div>
                <div class="flex items-center gap-3">
                    <span
                        class="grid h-11 w-11 place-items-center overflow-hidden rounded-2xl bg-white/10 ring-1 ring-white/15 backdrop-blur">
                        <img src="assets/img/logo-salapex.jpg" alt="Logo Salapex" class="h-full w-full object-cover"
                            onerror="this.style.display='none'; this.parentElement.insertAdjacentHTML('beforeend', '<span class=\'text-sm font-extrabold\'>S</span>')" />
                    </span>
                    <div>
                        <div class="text-base font-extrabold">Salapex</div>
                        <div class="text-sm text-slate-600 italic">La technologie simplifiée</div>
                    </div>
                </div>
                <p class="mt-3 text-sm text-slate-600">Ordinateurs prêts à l’emploi, accessoires ergonomiques et packs
                    tout-en-un.</p>
            </div>
            <div class="flex flex-wrap gap-2 md:justify-end">
                <a class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50"
                    href="/#produits">Produits</a>
                <a class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50"
                    href="/#entreprise">Entreprise</a>
                <a class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50"
                    href="/#contact">Contact</a>
                <a class="no-print rounded-2xl bg-blue-700 px-4 py-2 text-sm font-extrabold text-white hover:bg-blue-800"
                    href="<?php echo $returnHref; ?>"><?php echo $returnLabel; ?></a>
            </div>
        </div>

        <div
            class="mt-6 flex flex-col gap-2 border-t border-slate-200 pt-6 text-xs text-slate-500 md:flex-row md:items-center md:justify-between">
            <p>© 2026 Salapex — Tous droits réservés.</p>
            <p class="flex gap-3">
                <a href="mentions-legales.php" class="text-slate-600 hover:text-slate-800">Mentions légales</a>
                <span aria-hidden="true">•</span>
                <a href="politique-confidentialite.php" class="text-slate-600 hover:text-slate-800">Confidentialité</a>
            </p>
        </div>
    </div>
</footer>

<script>
    // Mobile nav toggle (responsive)
    const menuBtn = document.getElementById('menuBtn');
    const mobileNav = document.getElementById('mobileNav');

    if (menuBtn && mobileNav) {
        menuBtn.addEventListener('click', () => {
            const isOpen = mobileNav.classList.toggle('hidden');
            menuBtn.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
        });
    }
</script>

</html>