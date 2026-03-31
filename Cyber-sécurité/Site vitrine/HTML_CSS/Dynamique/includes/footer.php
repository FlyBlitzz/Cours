<footer class="border-t border-slate-200 bg-white">
    <?php
    $pageCourante = basename($_SERVER['SCRIPT_NAME']);
    $pagesSecondaires = ['panier.php', 'confirmation-commande.php', 'mentions-legales.php', 'politique-confidentialite.php'];
    $estPageSecondaire = in_array($pageCourante, $pagesSecondaires);

    $libelleRetour = $estPageSecondaire ? 'Retour' : 'Haut de page';
    $lienRetour = $estPageSecondaire ? '/' : '/#accueil';
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
                    href="<?php echo $lienRetour; ?>"><?php echo $libelleRetour; ?></a>
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
    document.addEventListener('DOMContentLoaded', function () {
        const regionVocale = document.createElement('div');
        regionVocale.setAttribute('aria-live', 'polite');
        regionVocale.setAttribute('role', 'status');
        regionVocale.className = 'sr-only';
        document.body.appendChild(regionVocale);

        const cibles = document.querySelectorAll('[data-animate], section[id], .product, .chip, .btn-gold, .navlink, .modal-card, .contact-field, .logo-animate');

        cibles.forEach(el => {
            if (el.dataset.animate) {
                const classeAnim = `animate-${el.dataset.animate}`;
                el.classList.add(classeAnim);
            } else if (!el.classList.contains('reveal') && !el.classList.contains('animate-fade-up') && !el.classList.contains('animate-zoom-in') && !el.classList.contains('animate-flip')) {
                el.classList.add('reveal');
            }

            if (el.dataset.animDelay) {
                el.style.transitionDelay = el.dataset.animDelay;
            }
            if (el.dataset.animDuration) {
                el.style.transitionDuration = el.dataset.animDuration;
            }
            if (el.dataset.animEasing) {
                el.style.transitionTimingFunction = el.dataset.animEasing;
            }
        });

        if ('IntersectionObserver' in window) {
            const observateur = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        const label = entry.target.getAttribute('aria-label') || entry.target.id || entry.target.getAttribute('data-animate') || entry.target.tagName.toLowerCase();
                        regionVocale.textContent = `${label} est maintenant visible.`;
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });
            cibles.forEach(el => observateur.observe(el));
        } else {
            cibles.forEach(el => el.classList.add('is-visible'));
            regionVocale.textContent = 'Animations activées.';
        }

        // Animation initiale du header
        const logo = document.querySelector('.logo-animate');
        if (logo) {
            logo.classList.add('is-visible');
        }
    });
</script>
</body>

</html>