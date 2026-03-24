<!-- Produits -->
<section id="produits" class="mt-12">
  <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
    <div>
      <h2 class="text-2xl font-extrabold tracking-tight text-slate-900 md:text-3xl underline-gold">
        Produits & packs
      </h2>
      <p class="mt-2 max-w-3xl text-slate-600">
        Filtrez par catégorie et par usage. Cliquez sur « Détails » pour voir le contenu, ou « Ajouter au panier »
        pour commander.
      </p>
    </div>
  </div>

  <!-- Filtres -->
  <div class="mt-6 grid gap-4 lg:grid-cols-12 catalog">
    <aside class="lg:col-span-4">
      <div class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm">
        <h3 class="text-base font-extrabold">Filtres</h3>

        <!-- Catégories -->
        <div class="mt-4">
          <div class="text-sm font-bold text-slate-800">Catégorie</div>
          <div class="chips mt-2">
            <input type="radio" name="cat" id="cat-all" checked>
            <label class="chip" for="cat-all">Tous</label>

            <input type="radio" name="cat" id="cat-packs">
            <label class="chip" for="cat-packs">Packs</label>

            <input type="radio" name="cat" id="cat-ordinateurs">
            <label class="chip" for="cat-ordinateurs">Ordinateurs</label>

            <input type="radio" name="cat" id="cat-accessoires">
            <label class="chip" for="cat-accessoires">Accessoires</label>
          </div>
        </div>

        <!-- Usages -->
        <div class="mt-4">
          <div class="text-sm font-bold text-slate-800">Usage</div>
          <div class="chips mt-2">
            <input type="radio" name="use" id="use-all" checked>
            <label class="chip" for="use-all">Tous</label>

            <input type="radio" name="use" id="use-bureautique">
            <label class="chip" for="use-bureautique">Bureautique</label>

            <input type="radio" name="use" id="use-visioconference">
            <label class="chip" for="use-visioconference">Visioconférence</label>

            <input type="radio" name="use" id="use-teletravail">
            <label class="chip" for="use-teletravail">Télétravail</label>

            <input type="radio" name="use" id="use-confort">
            <label class="chip" for="use-confort">Confort</label>

            <input type="radio" name="use" id="use-petite-entreprise">
            <label class="chip" for="use-petite-entreprise">Petite entreprise</label>

            <input type="radio" name="use" id="use-productivite">
            <label class="chip" for="use-productivite">Productivité</label>

            <input type="radio" name="use" id="use-simplicite">
            <label class="chip" for="use-simplicite">Simplicité</label>

            <input type="radio" name="use" id="use-ergonomie">
            <label class="chip" for="use-ergonomie">Ergonomie</label>
          </div>
        </div>

        <div class="mt-5 rounded-2xl bg-blue-50 p-4 ring-1 ring-blue-100">
          <div class="text-sm font-extrabold text-slate-900">Conseil express</div>
          <p class="mt-1 text-sm text-slate-600">
            Vous hésitez ? Ajoutez un ou deux produits au panier : on vous aide à choisir.
          </p>
          <a href="#contact"
            class="mt-3 inline-flex w-full items-center justify-center rounded-2xl bg-blue-700 px-4 py-2 text-sm font-extrabold text-white hover:bg-blue-800">
            Être conseillé
          </a>
        </div>
      </div>
    </aside>

    <!-- Grille -->
    <div class="lg:col-span-8">
      <div class="grid gap-5 md:grid-cols-2">
        <?php foreach ($products as $p): 
            // Catégories + usages pour le système de filtres.
            $catClass = 'cat-packs';
            $useClasses = ['use-bureautique', 'use-visioconference'];
            
            $name = strtolower($p['nom']);
            if (str_contains($name, 'ordinateur') || str_contains($name, 'pc')) {
                $catClass = 'cat-ordinateurs';
                $useClasses = ['use-migration', 'use-simplicite'];
            } elseif (str_contains($name, 'clavier') || str_contains($name, 'souris') || str_contains($name, 'casque')) {
                $catClass = 'cat-accessoires';
                if (str_contains($name, 'clavier') || str_contains($name, 'souris')) {
                    $useClasses = ['use-ergonomie', 'use-confort'];
                } else {
                    $useClasses = ['use-visioconference', 'use-productivite'];
                }
            } elseif (str_contains($name, 'performance') || str_contains($name, 'pro')) {
                $catClass = 'cat-packs';
                $useClasses = ['use-petite-entreprise', 'use-productivite'];
            } elseif (str_contains($name, 'confort')) {
                $catClass = 'cat-packs';
                $useClasses = ['use-teletravail', 'use-confort'];
            }
            
            $imagePath = '/' . ltrim((string) $p['image'], '/');
        ?>
          <article id="product-<?php echo (int) $p['id']; ?>"
              class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm product <?php echo $catClass; ?> <?php echo implode(' ', $useClasses); ?> flex flex-col h-full">
          
              <div class="aspect-[16/9] w-full overflow-hidden rounded-2xl mb-4">
                  <img src="<?php echo htmlspecialchars($imagePath); ?>" class="w-full h-full object-cover"
                      alt="<?php echo htmlspecialchars($p['nom']); ?>">
              </div>
          
              <div class="flex items-start justify-between gap-3 mb-4">
                  <div class="flex-1 min-w-0">
                      <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">Produit</div>
                      <h3 class="mt-1 text-lg font-extrabold text-slate-900 truncate">
                          <?php echo htmlspecialchars($p['nom']); ?>
                      </h3>
                  </div>
          
                  <?php if ((int) $p['stock'] > 0): ?>
                      <span
                          class="shrink-0 rounded-full bg-emerald-50 px-3 py-1 text-xs font-extrabold text-emerald-800 ring-1 ring-emerald-100">En
                          stock (<?php echo (int) $p['stock']; ?>)</span>
                  <?php else: ?>
                      <span
                          class="shrink-0 rounded-full bg-slate-200 px-3 py-1 text-xs font-extrabold text-black ring-1 ring-slate-300">Rupture</span>
                  <?php endif; ?>
              </div>
          
              <p class="text-sm text-slate-600 line-clamp-3 mb-6 flex-1">
                  <?php echo htmlspecialchars($p['descriptif']); ?>
              </p>
          
              <div class="mt-auto pt-5 border-t border-slate-100 flex items-center justify-between gap-4">
                  <div class="shrink-0">
                      <div class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Prix TTC</div>
                      <div class="text-lg font-extrabold text-slate-900">
                          <?php echo format_price($p['prix']); ?>
                      </div>
                  </div>
          
                  <div class="flex items-center gap-2">
                      <a href="#modal-<?php echo (int) $p['id']; ?>"
                          class="rounded-2xl border border-slate-300 bg-white px-3 py-2 text-xs font-bold text-slate-900 hover:bg-slate-50">
                          Détails
                      </a>
          
                      <?php if ((int) $p['stock'] > 0): ?>
                          <form method="post" action="/cart.php" class="flex items-center gap-2">
                              <input type="hidden" name="action" value="add">
                              <input type="hidden" name="id" value="<?php echo (int) $p['id']; ?>">
                              <input type="hidden" name="return_to" value="/index.php#product-<?php echo (int) $p['id']; ?>">
                              <button type="submit"
                                  class="rounded-2xl bg-blue-700 px-3 py-2 text-xs font-extrabold text-white shadow hover:bg-blue-800">
                                  Ajouter
                              </button>
                          </form>
                      <?php endif; ?>
                  </div>
              </div>
          </article>
        <?php endforeach; ?>
      </div>

      <p class="mt-4 text-center text-sm text-slate-500">
        Assistance gratuite sous 24–48h ouvrées.
      </p>
    </div>
  </div>
</section>
