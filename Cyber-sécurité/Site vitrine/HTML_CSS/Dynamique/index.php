<?php
require_once __DIR__ . '/includes/functions.php';
include __DIR__ . "/includes/header.php";
$produits = tous_produits($pdo);
?>

<!-- Accueil -->
<main id="contenu" class="mx-auto max-w-6xl px-4">
  <section id="accueil" data-animate="fade-up" data-anim-delay="0.2s" data-anim-duration="0.8s"
    class="relative mt-8 overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
    <div class="absolute inset-0 bg-grid opacity-[.35]" aria-hidden="true"></div>
    <div class="relative grid gap-8 p-7 md:grid-cols-2 md:p-10">
      <div class="flex flex-col justify-center">
        <p
          class="inline-flex w-fit items-center gap-2 rounded-full bg-blue-50 px-4 py-2 text-sm font-semibold text-blue-700 ring-1 ring-blue-100">
          <span class="h-2 w-2 rounded-full bg-gold"></span>
          Ordinateurs prêts à l’emploi • Ergonomie • Packs tout-en-un
        </p>
        <h1 class="mt-4 text-3xl font-extrabold tracking-tight text-slate-900 md:text-5xl">
          Salapex<br>
          <span class="text-blue-700">La technologie simplifiée</span>
        </h1>
        <p class="mt-4 max-w-prose text-base leading-relaxed text-slate-600 md:text-lg">
          Chez Salapex, tout est pensé pour gagner du temps : des ordinateurs <strong>déjà configurés</strong>, des
          accessoires <strong>ergonomiques</strong>, et des packs <strong>prêts à brancher</strong> pour particuliers
          et petites entreprises.
        </p>

        <div class="no-print mt-6 flex flex-wrap gap-3">
          <a href="#produits"
            class="rounded-2xl bg-blue-700 px-5 py-3 text-sm font-extrabold text-white shadow hover:bg-blue-800">Découvrir
            les produits</a>
          <a href="#entreprise"
            class="rounded-2xl bg-slate-900 px-5 py-3 text-sm font-extrabold text-white shadow hover:bg-slate-800">Notre
            histoire & équipe</a>
          <a href="#contact"
            class="rounded-2xl border border-slate-300 bg-white px-5 py-3 text-sm font-extrabold text-slate-900 shadow-sm hover:bg-slate-50">Nous
            contacter</a>
        </div>

        <dl class="mt-8 grid grid-cols-2 gap-4 rounded-2xl bg-slate-50 p-4 ring-1 ring-slate-100">
          <div>
            <dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Délai</dt>
            <dd class="mt-1 text-sm font-bold text-slate-900">Réponse sous 24 – 48 h ouvrées</dd>
          </div>
          <div>
            <dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Service</dt>
            <dd class="mt-1 text-sm font-bold text-slate-900">Configuration & prise en main</dd>
          </div>
        </dl>
      </div>

      <div
        class="rounded-3xl border border-slate-200 bg-gradient-to-br from-slate-900 via-slate-900 to-slate-900 p-6 text-white shadow-sm">
        <div class="flex items-start justify-between gap-3">
          <div>
            <h2 class="text-xl font-extrabold">Ce que vous recevez</h2>
            <p class="mt-1 text-sm text-white/80">Un poste de travail prêt à produire dès le premier jour.</p>
          </div>
          <span class="badge-gold">Pack</span>
        </div>

        <ul class="mt-5 grid gap-3">
          <li class="rounded-2xl bg-white/10 p-4 ring-1 ring-white/15">
            <div class="text-sm font-extrabold">Ordinateur configuré</div>
            <div class="mt-1 text-sm text-white/80">Mises à jour, comptes, sauvegarde, logiciels essentiels.</div>
          </li>
          <li class="rounded-2xl bg-white/10 p-4 ring-1 ring-white/15">
            <div class="text-sm font-extrabold">Accessoires ergonomiques</div>
            <div class="mt-1 text-sm text-white/80">Claviers, souris, casques sélectionnés pour le confort.</div>
          </li>
          <li class="rounded-2xl bg-white/10 p-4 ring-1 ring-white/15">
            <div class="text-sm font-extrabold">Assistance</div>
            <div class="mt-1 text-sm text-white/80">Conseil, recommandation, et prise en main (selon offre).</div>
          </li>
        </ul>

        <div class="mt-6 rounded-2xl bg-gradient-to-r from-emerald-400/15 to-cyan-400/10 p-4 ring-1 ring-white/15">
          <p class="text-sm">
            <span class="font-extrabold">Promesse Salapex :</span>
            pas de jargon inutile, pas de friction — <span class="font-semibold">juste un poste fiable</span>.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Activité -->
  <section id="activite" data-animate="fade-up" data-anim-delay="0.35s" data-anim-duration="0.75s" class="mt-12">
    <div class="flex items-end justify-between gap-4">
      <div>
        <h2 class="text-2xl font-extrabold tracking-tight text-slate-900 md:text-3xl underline-gold">Notre activité
        </h2>
        <p class="mt-2 max-w-3xl text-slate-600">
          Nous combinons matériel, configuration et ergonomie pour réduire les frictions au quotidien — à la maison
          comme au bureau.
        </p>
      </div>
    </div>

    <div class="mt-6 grid gap-5 md:grid-cols-3">
      <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <h3 class="text-lg font-extrabold">Ordinateurs prêts à l’emploi</h3>
        <p class="mt-2 text-slate-600">PC fixes / portables configurés pour être simples : mises à jour, sécurité,
          outils essentiels, optimisation.</p>
        <ul class="mt-4 space-y-2 text-sm text-slate-700">
          <li>• Installation et paramétrage</li>
          <li>• Sauvegarde / restauration</li>
          <li>• Comptes & prise en main</li>
        </ul>
      </article>

      <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <h3 class="text-lg font-extrabold">Accessoires ergonomiques</h3>
        <p class="mt-2 text-slate-600">Claviers, souris verticales, casques : sélection orientée confort et prévention
          des TMS.</p>
        <ul class="mt-4 space-y-2 text-sm text-slate-700">
          <li>• Recommandation selon usage</li>
          <li>• Options silencieuses / compactes</li>
          <li>• Conseils de posture</li>
        </ul>
      </article>

      <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <h3 class="text-lg font-extrabold">Packs « tout-en-un »</h3>
        <p class="mt-2 text-slate-600">Combinaisons prêtes à brancher pour particuliers et petites équipes :
          productivité immédiate.</p>
        <ul class="mt-4 space-y-2 text-sm text-slate-700">
          <li>• Pack Bureau (essentiel)</li>
          <li>• Pack Télétravail (confort)</li>
          <li>• Pack Pro (performance)</li>
        </ul>
      </article>
    </div>

    <div class="mt-6 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
      <div class="grid gap-6 md:grid-cols-3">
        <div class="md:col-span-2">
          <h3 class="text-lg font-extrabold">Pourquoi les clients choisissent Salapex</h3>
          <p class="mt-2 text-slate-600">Un parcours d’achat clair, une configuration sérieuse, et des conseils
            pragmatiques.</p>
          <div class="mt-4 grid gap-3 sm:grid-cols-2">
            <div class="rounded-2xl bg-slate-50 p-4 ring-1 ring-slate-100">
              <div class="text-sm font-extrabold">Simplicité</div>
              <div class="mt-1 text-sm text-slate-600">Tout fonctionne dès le branchement.</div>
            </div>
            <div class="rounded-2xl bg-slate-50 p-4 ring-1 ring-slate-100">
              <div class="text-sm font-extrabold">Confort</div>
              <div class="mt-1 text-sm text-slate-600">Ergonomie au centre du poste.</div>
            </div>
            <div class="rounded-2xl bg-slate-50 p-4 ring-1 ring-slate-100">
              <div class="text-sm font-extrabold">Fiabilité</div>
              <div class="mt-1 text-sm text-slate-600">Tests, contrôle qualité, support.</div>
            </div>
            <div class="rounded-2xl bg-slate-50 p-4 ring-1 ring-slate-100">
              <div class="text-sm font-extrabold">Transparence</div>
              <div class="mt-1 text-sm text-slate-600">Prix indicatifs + transparence.</div>
            </div>
          </div>
        </div>
        <aside class="rounded-3xl bg-gradient-to-br from-blue-50 to-indigo-50 p-6 ring-1 ring-blue-100">
          <h3 class="text-lg font-extrabold text-slate-900">Idéal pour</h3>
          <ul class="mt-3 space-y-2 text-sm text-slate-700">
            <li>• Télétravail et études</li>
            <li>• TPE / indépendants</li>
            <li>• Migration vers un nouveau PC</li>
            <li>• Prévention fatigue & douleurs</li>
          </ul>
          <a href="#produits"
            class="no-print mt-5 inline-flex w-full items-center justify-center rounded-2xl btn-gold px-5 py-3 text-sm font-extrabold shadow">Voir
            les packs</a>
        </aside>
      </div>
    </div>
  </section>


  <?php include __DIR__ . '/templates/produits-section.php'; ?>
  <?php include __DIR__ . '/templates/entreprise-section.php'; ?>
  <?php include __DIR__ . '/templates/contact-section.php'; ?>

  <?php foreach ($produits as $p): ?>
    <?php $produit = $p; include __DIR__ . '/templates/modale-produit.php'; ?>
  <?php endforeach; ?>

</main>

<?php include "includes/footer.php"; ?>