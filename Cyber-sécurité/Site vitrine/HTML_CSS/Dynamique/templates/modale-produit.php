<?php /** @var array $produit */ ?>
<div id="modal-<?php echo (int) $produit['id']; ?>" class="modal" role="dialog" aria-modal="true"
    aria-labelledby="modalTitle-<?php echo (int) $produit['id']; ?>" data-animate="flip">
    <a href="#produits" class="modal-backdrop"></a>
    <div class="modal-card" data-animate="zoom-in">
        <div class="flex items-start justify-between gap-3 border-b border-slate-200 p-5">
            <div>
                <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">Détails du produit</div>
                <h3 id="modalTitle-<?php echo (int) $produit['id']; ?>"
                    class="mt-1 text-lg font-extrabold text-slate-900">
                    <?php echo htmlspecialchars($produit['nom']); ?>
                </h3>
            </div>
            <a href="#produits" class="modal-close" aria-label="Fermer">Fermer</a>
        </div>

        <div class="grid gap-5 p-5 md:grid-cols-2">
            <div class="rounded-3xl bg-gradient-to-br from-slate-900 to-emerald-900 p-5 text-white">
                <div class="flex items-center justify-between">
                    <div class="text-xs font-bold text-white/80">Prix TTC</div>
                    <span
                        class="rounded-full bg-white/10 px-3 py-1 text-xs font-extrabold ring-1 ring-white/15">Inclus</span>
                </div>
                <div class="mt-2 flex items-baseline justify-between">
                    <div class="text-3xl font-extrabold"><?php echo format_prix($produit['prix']); ?></div>
                    <div class="text-xs font-bold text-white/70"><?php echo (int) $produit['stock']; ?> dispo.</div>
                </div>

                <div class="mt-4 rounded-2xl bg-white/10 p-4 ring-1 ring-white/15">
                    <div class="text-sm font-extrabold text-emerald-200">Description détaillée</div>
                    <p class="mt-2 text-sm text-white/85 leading-relaxed">
                        <?php echo nl2br(htmlspecialchars($produit['descriptif'])); ?>
                    </p>
                </div>

                <?php if ((int) $produit['stock'] > 0): ?>
                    <form method="post" action="/panier.php" class="mt-5">
                        <input type="hidden" name="action" value="add">
                        <input type="hidden" name="id" value="<?php echo (int) $produit['id']; ?>">
                        <input type="hidden" name="qty" value="1">
                        <input type="hidden" name="return_to" value="/index.php#modal-<?php echo (int) $produit['id']; ?>">
                        <button type="submit"
                            class="inline-flex w-full items-center justify-center rounded-2xl bg-blue-700 px-4 py-3 text-sm font-extrabold text-white shadow-lg hover:bg-blue-800 transition-colors">
                            Ajouter au panier
                        </button>
                    </form>
                <?php endif; ?>
            </div>

            <div class="flex flex-col gap-4">
                <div class="rounded-3xl bg-slate-50 p-5 ring-1 ring-slate-100">
                    <div class="text-sm font-extrabold text-slate-900">Informations Salapex</div>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        Ce produit est sélectionné par nos experts pour sa fiabilité et sa performance au quotidien.
                        Livré paramétré selon vos besoins avec une assistance incluse pendant 30 jours.
                    </p>
                </div>

                <div class="aspect-video w-full overflow-hidden rounded-2xl border border-slate-200">
                    <img src="<?php echo htmlspecialchars('/' . ltrim((string) $produit['image'], '/')); ?>"
                        alt="<?php echo htmlspecialchars($produit['nom']); ?>" class="h-full w-full object-cover">
                </div>

                <div class="flex gap-2">
                    <a href="#contact"
                        class="inline-flex flex-1 items-center justify-center rounded-2xl bg-blue-700 px-4 py-3 text-sm font-extrabold text-white hover:bg-blue-800 transition-colors">Parler
                        à un conseiller</a>
                </div>
            </div>
        </div>
    </div>
</div>