<article class="rounded-3xl border bg-white p-5 shadow-sm product">
    <img src="assets/img/produits/<?= $p['image'] ?>" class="w-full rounded-2xl mb-4" alt="<?= $p['titre'] ?>">

    <div class="flex items-start justify-between gap-3">
        <div>
            <div class="text-xs font-extrabold uppercase text-blue-700"><?= ucfirst($p['categorie']) ?></div>
            <h3 class="mt-1 text-lg font-extrabold"><?= $p['titre'] ?></h3>
            <p class="mt-2 text-sm text-slate-600"><?= $p['description'] ?></p>
        </div>
        <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-extrabold"><?= $p['badge'] ?></span>
    </div>

    <div class="mt-4 flex flex-wrap gap-2">
        <?php foreach (explode(",", $p["usages"]) as $u): ?>
            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold"><?= ucfirst($u) ?></span>
        <?php endforeach; ?>
    </div>

    <div class="mt-5 flex items-center justify-between gap-3">
        <div>
            <div class="text-xs font-bold text-slate-500">Prix indicatif</div>
            <div class="text-lg font-extrabold">à partir de <?= $p['prix'] ?> € TTC</div>
        </div>

        <div class="flex gap-2">
            <a href="produit.php?id=<?= $p['id'] ?>" class="rounded-2xl border px-4 py-2 text-sm font-bold">Détails</a>
            <a href="mailto:contact@salapex.fr?subject=Contact%20—%20<?= urlencode($p['titre']) ?>"
                class="rounded-2xl bg-blue-700 px-4 py-2 text-sm font-extrabold text-white">Contact</a>
        </div>
    </div>
</article>