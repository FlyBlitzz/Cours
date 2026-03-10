<?php /** @var array $p */ ?>
<article class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm product">

    <img src="/assets/img/produits/<?php echo htmlspecialchars($p['image']); ?>" class="w-full rounded-2xl mb-4"
        alt="<?php echo htmlspecialchars($p['nom']); ?>">

    <div class="flex items-start justify-between gap-3">
        <div>
            <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">Produit</div>
            <h3 class="mt-1 text-lg font-extrabold text-slate-900">
                <?php echo htmlspecialchars($p['nom']); ?>
            </h3>
            <p class="mt-2 text-sm text-slate-600">
                <?php echo nl2br(htmlspecialchars($p['descriptif'])); ?>
            </p>
        </div>

        <?php if ((int) $p['stock'] > 0): ?>
            <span
                class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-extrabold text-emerald-800 ring-1 ring-emerald-100">En
                stock</span>
        <?php else: ?>
            <span
                class="rounded-full bg-slate-200 px-3 py-1 text-xs font-extrabold text-slate-800 ring-1 ring-slate-300">Rupture</span>
        <?php endif; ?>
    </div>

    <div class="mt-5 flex items-center justify-between">
        <div>
            <div class="text-xs font-bold text-slate-500">Prix TTC</div>
            <div class="text-lg font-extrabold text-slate-900">
                <?php echo format_price($p['prix']); ?>
            </div>
        </div>

        <div class="flex items-center gap-2">
            <?php if ((int) $p['stock'] > 0): ?>
                <form method="post" action="/cart.php" class="flex items-center gap-2">
                    <input type="hidden" name="action" value="add">
                    <input type="hidden" name="id" value="<?php echo (int) $p['id']; ?>">

                    <input type="number" name="qty" min="1" value="1" max="<?php echo (int) $p['stock']; ?>"
                        class="w-16 rounded-xl border border-slate-300 px-3 py-2 text-sm">

                    <button type="submit"
                        class="rounded-2xl bg-blue-700 px-4 py-2 text-sm font-extrabold text-white shadow hover:bg-blue-800">
                        Ajouter
                    </button>
                </form>
            <?php else: ?>
                <button class="rounded-2xl bg-slate-300 px-4 py-2 text-sm font-extrabold text-white" disabled>
                    Indisponible
                </button>
            <?php endif; ?>
        </div>
    </div>

</article>