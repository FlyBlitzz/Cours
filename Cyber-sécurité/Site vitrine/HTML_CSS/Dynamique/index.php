<?php include "includes/header.php"; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Salapex</title>
  <meta name="description"
    content="Salapex : ordinateurs prêts à l’emploi, accessoires ergonomiques et packs tout-en-un pour particuliers et petites entreprises." />
  <meta name="theme-color" content="#047857" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="style.css" />
</head>

<body class="min-h-screen bg-slate-50 text-slate-900 selection:bg-blue-200/80 selection:text-slate-900">
  <a href="#contenu"
    class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[999] focus:bg-white focus:text-slate-900 focus:px-4 focus:py-2 focus:rounded-xl focus:shadow">Aller
    au contenu</a>

  <!-- Header -->
  <header
    class="sticky top-0 z-50 border-b border-white/10 bg-gradient-to-r from-emerald-900 via-emerald-800 to-emerald-700 text-white">
    <div class="mx-auto max-w-6xl px-4">
      <div class="flex items-center justify-between py-4">
        <a href="#accueil" class="group flex items-center gap-3" aria-label="Aller à l’accueil Salapex">
          <span
            class="grid h-11 w-11 place-items-center overflow-hidden rounded-2xl bg-white/10 ring-1 ring-white/15 backdrop-blur">
            <img src="assets/img/logo-salapex.jpg" alt="Logo Salapex" class="h-full w-full object-cover"
              onerror="this.style.display='none'; this.parentElement.insertAdjacentHTML('beforeend', '<span class=\'text-sm font-extrabold\'>S</span>')" />
          </span>
          <div class="leading-tight">
            <div class="text-lg font-extrabold tracking-tight">Salapex</div>
            <div class="text-sm text-white/90 italic">La technologie simplifiée</div>
          </div>
        </a>

        <button id="menuBtn"
          class="md:hidden inline-flex items-center gap-2 rounded-xl bg-white/10 px-3 py-2 ring-1 ring-white/15 backdrop-blur hover:bg-white/15"
          aria-expanded="false" aria-controls="mobileNav">
          <span class="text-sm font-semibold">Menu</span>
          <svg id="menuIcon" class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
          </svg>
        </button>

        <nav class="hidden md:block" aria-label="Navigation principale">
          <ul class="flex flex-wrap items-center gap-2">
            <li><a class="navlink rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10"
                href="#accueil">Accueil</a></li>
            <li><a class="navlink rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10"
                href="#activite">Activité</a></li>
            <li><a class="navlink rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10"
                href="#produits">Produits</a></li>
            <li><a class="navlink rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10"
                href="#entreprise">Entreprise</a></li>
            <li><a class="navlink rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10"
                href="#contact">Contact</a></li>
            <li>
              <a class="rounded-2xl btn-gold px-3 py-2 text-sm font-extrabold shadow"
                href="mailto:contact@salapex.fr?subject=Demande%20de%20devis%20rapide%20—%20Salapex">Devis rapide</a>
            </li>
          </ul>
        </nav>
      </div>

      <nav id="mobileNav" class="md:hidden hidden pb-4" aria-label="Navigation mobile">
        <div class="grid gap-2 rounded-2xl bg-white/10 p-3 ring-1 ring-white/15 backdrop-blur">
          <a class="rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10" href="#accueil">Accueil</a>
          <a class="rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10" href="#activite">Activité</a>
          <a class="rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10" href="#produits">Produits</a>
          <a class="rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10" href="#entreprise">Entreprise</a>
          <a class="rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10" href="#contact">Contact</a>
          <a class="rounded-xl bg-white px-3 py-2 text-sm font-extrabold text-blue-700 shadow hover:bg-slate-50"
            href="#devis">Devis rapide</a>
        </div>
      </nav>
    </div>
  </header>

  <!-- Accueil -->
  <main id="contenu" class="mx-auto max-w-6xl px-4">
    <section id="accueil" class="relative mt-8 overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
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
              class="rounded-2xl border border-slate-300 bg-white px-5 py-3 text-sm font-extrabold text-slate-900 shadow-sm hover:bg-slate-50">Demander
              un devis</a>
          </div>

          <dl class="mt-8 grid grid-cols-2 gap-4 rounded-2xl bg-slate-50 p-4 ring-1 ring-slate-100">
            <div>
              <dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Délai</dt>
              <dd class="mt-1 text-sm font-bold text-slate-900">Devis sous 24 – 48h ouvrées</dd>
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
    <section id="activite" class="mt-12">
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
                <div class="mt-1 text-sm text-slate-600">Prix indicatifs + devis clair.</div>
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

    <!-- Produits -->
    <section id="produits" class="mt-12">
      <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
        <div>
          <h2 class="text-2xl font-extrabold tracking-tight text-slate-900 md:text-3xl underline-gold">
            Produits & packs
          </h2>
          <p class="mt-2 max-w-3xl text-slate-600">
            Filtrez par catégorie et par usage. Cliquez sur « Détails » pour voir le contenu, ou « Demande de devis »
            pour nous écrire.
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

                <input type="radio" name="use" id="use-migration">
                <label class="chip" for="use-migration">Migration</label>

                <input type="radio" name="use" id="use-simplicite">
                <label class="chip" for="use-simplicite">Simplicité</label>

                <input type="radio" name="use" id="use-ergonomie">
                <label class="chip" for="use-ergonomie">Ergonomie</label>
              </div>
            </div>

            <div class="mt-5 rounded-2xl bg-blue-50 p-4 ring-1 ring-blue-100">
              <div class="text-sm font-extrabold text-slate-900">Conseil express</div>
              <p class="mt-1 text-sm text-slate-600">
                Vous hésitez ? Cliquez sur « Demande de devis » sur 1–2 produits : on vous rappelle avec une
                recommandation.
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

            <!-- 1) Pack Bureau Essentiel -->
            <article
              class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm product cat-packs use-bureautique use-visioconference"
              id="card-pack-bureau-essentiel">
              <img src="assets/img/produits/pack-bureau-essentiel.jpg" class="w-full rounded-2xl mb-4"
                alt="Pack Bureau Essentiel">
              <div class="flex items-start justify-between gap-3">
                <div>
                  <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">Packs</div>
                  <h3 class="mt-1 text-lg font-extrabold text-slate-900">Pack Bureau Essentiel</h3>
                  <p class="mt-2 text-sm text-slate-600">Un pack simple pour travailler immédiatement : PC + accessoires
                    indispensables.</p>
                </div>
                <span
                  class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-extrabold text-emerald-800 ring-1 ring-emerald-100">Prêt
                  à l’emploi</span>
              </div>
              <div class="mt-4 flex flex-wrap gap-2">
                <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-700">Bureautique</span>
                <span
                  class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-700">Visioconférence</span>
              </div>
              <div class="mt-5 flex items-center justify-between gap-3">
                <div>
                  <div class="text-xs font-bold text-slate-500">Prix indicatif</div>
                  <div class="text-lg font-extrabold text-slate-900">à partir de 799 € TTC</div>
                </div>
                <div class="flex gap-2">
                  <a href="#p-pack-bureau-essentiel"
                    class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50">Détails</a>
                  <a href="mailto:contact@salapex.fr?subject=Demande%20de%20devis%20%E2%80%94%20Pack%20Bureau%20Essentiel"
                    class="rounded-2xl bg-blue-700 px-4 py-2 text-sm font-extrabold text-white hover:bg-blue-800">Demande
                    de devis</a>
                </div>
              </div>
            </article>

            <!-- 2) Pack Télétravail Confort -->
            <article
              class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm product cat-packs use-teletravail use-confort"
              id="card-pack-teletravail-confort">
              <img src="assets/img/produits/pack-teletravail-confort.jpg" class="w-full rounded-2xl mb-4"
                alt="Pack Télétravail Confort">
              <div class="flex items-start justify-between gap-3">
                <div>
                  <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">Packs</div>
                  <h3 class="mt-1 text-lg font-extrabold text-slate-900">Pack Télétravail Confort</h3>
                  <p class="mt-2 text-sm text-slate-600">Pour les journées longues : ergonomie renforcée et
                    configuration soignée.</p>
                </div>
                <span
                  class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-extrabold text-emerald-800 ring-1 ring-emerald-100">Ergonomie
                  +</span>
              </div>
              <div class="mt-4 flex flex-wrap gap-2">
                <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-700">Télétravail</span>
                <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-700">Confort</span>
              </div>
              <div class="mt-5 flex items-center justify-between gap-3">
                <div>
                  <div class="text-xs font-bold text-slate-500">Prix indicatif</div>
                  <div class="text-lg font-extrabold text-slate-900">à partir de 999 € TTC</div>
                </div>
                <div class="flex gap-2">
                  <a href="#p-pack-teletravail-confort"
                    class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50">Détails</a>
                  <a href="mailto:contact@salapex.fr?subject=Demande%20de%20devis%20%E2%80%94%20Pack%20T%C3%A9l%C3%A9travail%20Confort"
                    class="rounded-2xl bg-blue-700 px-4 py-2 text-sm font-extrabold text-white hover:bg-blue-800">Demande
                    de devis</a>
                </div>
              </div>
            </article>

            <!-- 3) Pack Pro Performance -->
            <article
              class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm product cat-packs use-petite-entreprise use-productivite"
              id="card-pack-pro-performance">
              <img src="assets/img/produits/pack-pro-performance.jpg" class="w-full rounded-2xl mb-4"
                alt="Pack Pro Performance">
              <div class="flex items-start justify-between gap-3">
                <div>
                  <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">Packs</div>
                  <h3 class="mt-1 text-lg font-extrabold text-slate-900">Pack Pro Performance</h3>
                  <p class="mt-2 text-sm text-slate-600">Performance + accompagnement : pour outils pros, multi‑tâches
                    et TPE.</p>
                </div>
                <span
                  class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-extrabold text-emerald-800 ring-1 ring-emerald-100">Pro</span>
              </div>
              <div class="mt-4 flex flex-wrap gap-2">
                <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-700">Petite
                  entreprise</span>
                <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-700">Productivité</span>
              </div>
              <div class="mt-5 flex items-center justify-between gap-3">
                <div>
                  <div class="text-xs font-bold text-slate-500">Prix indicatif</div>
                  <div class="text-lg font-extrabold text-slate-900">à partir de 1290 € TTC</div>
                </div>
                <div class="flex gap-2">
                  <a href="#p-pack-pro-performance"
                    class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50">Détails</a>
                  <a href="mailto:contact@salapex.fr?subject=Demande%20de%20devis%20%E2%80%94%20Pack%20Pro%20Performance"
                    class="rounded-2xl bg-blue-700 px-4 py-2 text-sm font-extrabold text-white hover:bg-blue-800">Demande
                    de devis</a>
                </div>
              </div>
            </article>

            <!-- 4) Ordinateur prêt à l’emploi -->
            <article
              class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm product cat-ordinateurs use-migration use-simplicite"
              id="card-pc-pret-a-lemploi">
              <img src="assets/img/produits/pc-pret-a-lemploi.jpg" class="w-full rounded-2xl mb-4"
                alt="Ordinateur prêt à l’emploi">
              <div class="flex items-start justify-between gap-3">
                <div>
                  <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">Ordinateurs</div>
                  <h3 class="mt-1 text-lg font-extrabold text-slate-900">Ordinateur prêt à l’emploi (config)</h3>
                  <p class="mt-2 text-sm text-slate-600">Configuration complète sur une machine sélectionnée selon votre
                    usage.</p>
                </div>
                <span
                  class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-extrabold text-emerald-800 ring-1 ring-emerald-100">Configuré</span>
              </div>
              <div class="mt-4 flex flex-wrap gap-2">
                <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-700">Migration</span>
                <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-700">Simplicité</span>
              </div>
              <div class="mt-5 flex items-center justify-between gap-3">
                <div>
                  <div class="text-xs font-bold text-slate-500">Prix indicatif</div>
                  <div class="text-lg font-extrabold text-slate-900">à partir de 590 € TTC</div>
                </div>
                <div class="flex gap-2">
                  <a href="#p-pc-pret-a-lemploi"
                    class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50">Détails</a>
                  <a href="mailto:contact@salapex.fr?subject=Demande%20de%20devis%20%E2%80%94%20Ordinateur%20pr%C3%AAt%20%C3%A0%20l%E2%80%99emploi%20(config)"
                    class="rounded-2xl bg-blue-700 px-4 py-2 text-sm font-extrabold text-white hover:bg-blue-800">Demande
                    de devis</a>
                </div>
              </div>
            </article>

            <!-- 5) Clavier ergonomique split -->
            <article
              class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm product cat-accessoires use-ergonomie use-confort"
              id="card-clavier-ergonomique-split">
              <img src="assets/img/produits/clavier-ergonomique-split.jpg" class="w-full rounded-2xl mb-4"
                alt="Clavier ergonomique split">
              <div class="flex items-start justify-between gap-3">
                <div>
                  <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">Accessoires</div>
                  <h3 class="mt-1 text-lg font-extrabold text-slate-900">Clavier ergonomique split</h3>
                  <p class="mt-2 text-sm text-slate-600">Réduit la tension des poignets grâce à une position plus
                    naturelle.</p>
                </div>
                <span
                  class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-extrabold text-emerald-800 ring-1 ring-emerald-100">Ergo</span>
              </div>
              <div class="mt-4 flex flex-wrap gap-2">
                <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-700">Ergonomie</span>
                <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-700">Confort</span>
              </div>
              <div class="mt-5 flex items-center justify-between gap-3">
                <div>
                  <div class="text-xs font-bold text-slate-500">Prix indicatif</div>
                  <div class="text-lg font-extrabold text-slate-900">à partir de 119 € TTC</div>
                </div>
                <div class="flex gap-2">
                  <a href="#p-clavier-ergonomique-split"
                    class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50">Détails</a>
                  <a href="mailto:contact@salapex.fr?subject=Demande%20de%20devis%20%E2%80%94%20Clavier%20ergonomique%20split"
                    class="rounded-2xl bg-blue-700 px-4 py-2 text-sm font-extrabold text-white hover:bg-blue-800">Demande
                    de devis</a>
                </div>
              </div>
            </article>

            <!-- 6) Souris verticale -->
            <article
              class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm product cat-accessoires use-ergonomie use-teletravail"
              id="card-souris-verticale">
              <img src="assets/img/produits/souris-verticale.jpg" class="w-full rounded-2xl mb-4"
                alt="Souris verticale">
              <div class="flex items-start justify-between gap-3">
                <div>
                  <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">Accessoires</div>
                  <h3 class="mt-1 text-lg font-extrabold text-slate-900">Souris verticale</h3>
                  <p class="mt-2 text-sm text-slate-600">Une prise plus neutre pour limiter la pronation de
                    l’avant‑bras.</p>
                </div>
                <span
                  class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-extrabold text-emerald-800 ring-1 ring-emerald-100">Confort</span>
              </div>
              <div class="mt-4 flex flex-wrap gap-2">
                <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-700">Ergonomie</span>
                <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-700">Télétravail</span>
              </div>
              <div class="mt-5 flex items-center justify-between gap-3">
                <div>
                  <div class="text-xs font-bold text-slate-500">Prix indicatif</div>
                  <div class="text-lg font-extrabold text-slate-900">à partir de 69 € TTC</div>
                </div>
                <div class="flex gap-2">
                  <a href="#p-souris-verticale"
                    class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50">Détails</a>
                  <a href="mailto:contact@salapex.fr?subject=Demande%20de%20devis%20%E2%80%94%20Souris%20verticale"
                    class="rounded-2xl bg-blue-700 px-4 py-2 text-sm font-extrabold text-white hover:bg-blue-800">Demande
                    de devis</a>
                </div>
              </div>
            </article>

            <!-- 7) Casque confort -->
            <article
              class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm product cat-accessoires use-visioconference use-productivite"
              id="card-casque-confort">
              <img src="assets/img/produits/casque-confort.jpg" class="w-full rounded-2xl mb-4" alt="Casque confort">
              <div class="flex items-start justify-between gap-3">
                <div>
                  <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">Accessoires</div>
                  <h3 class="mt-1 text-lg font-extrabold text-slate-900">Casque confort</h3>
                  <p class="mt-2 text-sm text-slate-600">Micro lisible et port confortable pour les réunions et appels.
                  </p>
                </div>
                <span
                  class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-extrabold text-emerald-800 ring-1 ring-emerald-100">Audio
                  clair</span>
              </div>
              <div class="mt-4 flex flex-wrap gap-2">
                <span
                  class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-700">Visioconférence</span>
                <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-700">Productivité</span>
              </div>
              <div class="mt-5 flex items-center justify-between gap-3">
                <div>
                  <div class="text-xs font-bold text-slate-500">Prix indicatif</div>
                  <div class="text-lg font-extrabold text-slate-900">à partir de 89 € TTC</div>
                </div>
                <div class="flex gap-2">
                  <a href="#p-casque-confort"
                    class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50">Détails</a>
                  <a href="mailto:contact@salapex.fr?subject=Demande%20de%20devis%20%E2%80%94%20Casque%20confort%20"
                    class="rounded-2xl bg-blue-700 px-4 py-2 text-sm font-extrabold text-white hover:bg-blue-800">Demande
                    de devis</a>
                </div>
              </div>
            </article>

          </div>

          <p class="mt-4 text-center text-sm text-slate-500">
            Prix indicatifs. Devis gratuit sous 24–48h ouvrées.
          </p>
        </div>
      </div>

      <!-- Pack Bureau Essentiel -->
      <div id="p-pack-bureau-essentiel" class="modal" aria-labelledby="p-pack-bureau-essentiel-title" role="dialog"
        aria-modal="true">
        <a href="#produits" class="modal-backdrop" aria-label="Fermer"></a>
        <div class="modal-card">
          <a href="#produits" class="modal-close">Fermer</a>
          <div class="grid gap-5 p-5 md:grid-cols-2">
            <div class="modal-side rounded-3xl">
              <div class="flex items-center justify-between">
                <div class="text-xs font-bold text-white/80">Prix indicatif</div>
                <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-extrabold ring-1 ring-white/15">Prêt à
                  l’emploi</span>
              </div>
              <div class="mt-2 text-3xl font-extrabold">à partir de 799 € TTC</div>
              <div class="mt-4 rounded-2xl bg-white/10 p-4 ring-1 ring-white/15">
                <div class="text-sm font-extrabold">Ce que ça inclut</div>
                <ul class="mt-2 space-y-2 text-sm text-white/85">
                  <li>PC (SSD) configuré + mises à jour appliquées</li>
                  <li>Clavier & souris ergonomiques</li>
                  <li>Casque confort</li>
                  <li>Sauvegarde / restauration (image système)</li>
                </ul>
              </div>
            </div>
            <div>
              <div class="rounded-3xl bg-slate-50 p-5 ring-1 ring-slate-100">
                <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">Packs</div>
                <h3 id="p-pack-bureau-essentiel-title" class="mt-1 text-lg font-extrabold text-slate-900">Pack Bureau
                  Essentiel</h3>
                <p class="mt-2 text-sm text-slate-600">Idéal pour la bureautique, la navigation, la visio. Nous adaptons
                  la puissance selon vos logiciels.</p>
                <div class="mt-3 flex flex-wrap gap-2">
                  <span
                    class="rounded-full bg-white px-3 py-1 text-xs font-bold text-slate-700 ring-1 ring-slate-200">Bureautique</span>
                  <span
                    class="rounded-full bg-white px-3 py-1 text-xs font-bold text-slate-700 ring-1 ring-slate-200">Visioconférence</span>
                </div>
              </div>
              <div class="mt-4 flex gap-2">
                <a href="mailto:contact@salapex.fr?subject=Demande%20de%20devis%20%E2%80%94%20Pack%20Bureau%20Essentiel"
                  class="inline-flex flex-1 items-center justify-center rounded-2xl bg-blue-700 px-4 py-3 text-sm font-extrabold text-white hover:bg-blue-800">Demande
                  de devis</a>
                <a href="#produits"
                  class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm font-bold hover:bg-slate-50">Fermer</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Pack Télétravail Confort -->
      <div id="p-pack-teletravail-confort" class="modal" aria-labelledby="p-pack-teletravail-confort-title"
        role="dialog" aria-modal="true">
        <a href="#produits" class="modal-backdrop" aria-label="Fermer"></a>
        <div class="modal-card">
          <a href="#produits" class="modal-close">Fermer</a>
          <div class="grid gap-5 p-5 md:grid-cols-2">
            <div class="modal-side rounded-3xl">
              <div class="flex items-center justify-between">
                <div class="text-xs font-bold text-white/80">Prix indicatif</div>
                <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-extrabold ring-1 ring-white/15">Ergonomie
                  +</span>
              </div>
              <div class="mt-2 text-3xl font-extrabold">à partir de 999 € TTC</div>
              <div class="mt-4 rounded-2xl bg-white/10 p-4 ring-1 ring-white/15">
                <div class="text-sm font-extrabold">Ce que ça inclut</div>
                <ul class="mt-2 space-y-2 text-sm text-white/85">
                  <li>PC configuré (SSD) + sécurisation de base</li>
                  <li>Souris verticale + clavier confort</li>
                  <li>Casque à réduction de bruit (selon stock)</li>
                  <li>Checklist posture & réglages</li>
                </ul>
              </div>
            </div>
            <div>
              <div class="rounded-3xl bg-slate-50 p-5 ring-1 ring-slate-100">
                <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">Packs</div>
                <h3 id="p-pack-teletravail-confort-title" class="mt-1 text-lg font-extrabold text-slate-900">Pack
                  Télétravail Confort</h3>
                <p class="mt-2 text-sm text-slate-600">Recommandé si vous passez 6h+ par jour au poste. L’objectif :
                  réduire fatigue et tensions.</p>
                <div class="mt-3 flex flex-wrap gap-2">
                  <span
                    class="rounded-full bg-white px-3 py-1 text-xs font-bold text-slate-700 ring-1 ring-slate-200">Télétravail</span>
                  <span
                    class="rounded-full bg-white px-3 py-1 text-xs font-bold text-slate-700 ring-1 ring-slate-200">Confort</span>
                </div>
              </div>
              <div class="mt-4 flex gap-2">
                <a href="mailto:contact@salapex.fr?subject=Demande%20de%20devis%20%E2%80%94%20Pack%20T%C3%A9l%C3%A9travail%20Confort"
                  class="inline-flex flex-1 items-center justify-center rounded-2xl bg-blue-700 px-4 py-3 text-sm font-extrabold text-white hover:bg-blue-800">Demande
                  de devis</a>
                <a href="#produits"
                  class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm font-bold hover:bg-slate-50">Fermer</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Pack Pro Performance -->
      <div id="p-pack-pro-performance" class="modal" aria-labelledby="p-pack-pro-performance-title" role="dialog"
        aria-modal="true">
        <a href="#produits" class="modal-backdrop" aria-label="Fermer"></a>
        <div class="modal-card">
          <a href="#produits" class="modal-close">Fermer</a>
          <div class="grid gap-5 p-5 md:grid-cols-2">
            <div class="modal-side rounded-3xl">
              <div class="flex items-center justify-between">
                <div class="text-xs font-bold text-white/80">Prix indicatif</div>
                <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-extrabold ring-1 ring-white/15">Pro</span>
              </div>
              <div class="mt-2 text-3xl font-extrabold">à partir de 1290 € TTC</div>
              <div class="mt-4 rounded-2xl bg-white/10 p-4 ring-1 ring-white/15">
                <div class="text-sm font-extrabold">Ce que ça inclut</div>
                <ul class="mt-2 space-y-2 text-sm text-white/85">
                  <li>PC plus puissant (selon besoin)</li>
                  <li>Suite bureautique installée (si fournie)</li>
                  <li>Pack accessoires complet</li>
                  <li>Assistance prise en main (1h)</li>
                </ul>
              </div>
            </div>
            <div>
              <div class="rounded-3xl bg-slate-50 p-5 ring-1 ring-slate-100">
                <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">Packs</div>
                <h3 id="p-pack-pro-performance-title" class="mt-1 text-lg font-extrabold text-slate-900">Pack Pro
                  Performance</h3>
                <p class="mt-2 text-sm text-slate-600">Pensé pour les indépendants et TPE : plus de marge, plus de
                  confort, et une prise en main pour partir vite.</p>
                <div class="mt-3 flex flex-wrap gap-2">
                  <span
                    class="rounded-full bg-white px-3 py-1 text-xs font-bold text-slate-700 ring-1 ring-slate-200">Petite
                    entreprise</span>
                  <span
                    class="rounded-full bg-white px-3 py-1 text-xs font-bold text-slate-700 ring-1 ring-slate-200">Productivité</span>
                </div>
              </div>
              <div class="mt-4 flex gap-2">
                <a href="mailto:contact@salapex.fr?subject=Demande%20de%20devis%20%E2%80%94%20Pack%20Pro%20Performance"
                  class="inline-flex flex-1 items-center justify-center rounded-2xl bg-blue-700 px-4 py-3 text-sm font-extrabold text-white hover:bg-blue-800">Demande
                  de devis</a>
                <a href="#produits"
                  class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm font-bold hover:bg-slate-50">Fermer</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Ordinateur prêt à l’emploi -->
      <div id="p-pc-pret-a-lemploi" class="modal" role="dialog" aria-modal="true" aria-labelledby="p-pc-pret-title">
        <a href="#produits" class="modal-backdrop" aria-label="Fermer"></a>
        <div class="modal-card">
          <a href="#produits" class="modal-close">Fermer</a>
          <div class="grid gap-5 p-5 md:grid-cols-2">
            <div class="modal-side rounded-3xl">
              <div class="flex items-center justify-between">
                <div class="text-xs font-bold text-white/80">Prix indicatif</div>
                <span
                  class="rounded-full bg-white/10 px-3 py-1 text-xs font-extrabold ring-1 ring-white/15">Configuré</span>
              </div>
              <div class="mt-2 text-3xl font-extrabold">à partir de 590 € TTC</div>
              <div class="mt-4 rounded-2xl bg-white/10 p-4 ring-1 ring-white/15">
                <div class="text-sm font-extrabold">Ce que ça inclut</div>
                <ul class="mt-2 space-y-2 text-sm text-white/85">
                  <li>Mises à jour + optimisation</li>
                  <li>Comptes utilisateurs</li>
                  <li>Antivirus / sécurité (selon OS)</li>
                  <li>Transfert de données possible (option)</li>
                </ul>
              </div>
            </div>
            <div>
              <div class="rounded-3xl bg-slate-50 p-5 ring-1 ring-slate-100">
                <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">Ordinateurs</div>
                <h3 id="p-pc-pret-title" class="mt-1 text-lg font-extrabold text-slate-900">Ordinateur prêt à l’emploi
                  (config)</h3>
                <p class="mt-2 text-sm text-slate-600">Nous vous orientons vers un modèle adapté (fixe ou portable).
                  L’important : simplicité et stabilité.</p>
                <div class="mt-3 flex flex-wrap gap-2">
                  <span
                    class="rounded-full bg-white px-3 py-1 text-xs font-bold text-slate-700 ring-1 ring-slate-200">Migration</span>
                  <span
                    class="rounded-full bg-white px-3 py-1 text-xs font-bold text-slate-700 ring-1 ring-slate-200">Simplicité</span>
                </div>
              </div>
              <div class="mt-4 flex gap-2">
                <a href="mailto:contact@salapex.fr?subject=Demande%20de%20devis%20%E2%80%94%20Ordinateur%20pr%C3%AAt%20%C3%A0%20l%E2%80%99emploi%20(config)"
                  class="inline-flex flex-1 items-center justify-center rounded-2xl bg-blue-700 px-4 py-3 text-sm font-extrabold text-white hover:bg-blue-800">Demande
                  de devis</a>
                <a href="#produits"
                  class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm font-bold hover:bg-slate-50">Fermer</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Clavier ergonomique split -->
      <div id="p-clavier-ergonomique-split" class="modal" role="dialog" aria-modal="true"
        aria-labelledby="p-clavier-title">
        <a href="#produits" class="modal-backdrop" aria-label="Fermer"></a>
        <div class="modal-card">
          <a href="#produits" class="modal-close">Fermer</a>
          <div class="grid gap-5 p-5 md:grid-cols-2">
            <div class="modal-side rounded-3xl">
              <div class="flex items-center justify-between">
                <div class="text-xs font-bold text-white/80">Prix indicatif</div>
                <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-extrabold ring-1 ring-white/15">Ergo</span>
              </div>
              <div class="mt-2 text-3xl font-extrabold">à partir de 119 € TTC</div>
              <div class="mt-4 rounded-2xl bg-white/10 p-4 ring-1 ring-white/15">
                <div class="text-sm font-extrabold">Ce que ça inclut</div>
                <ul class="mt-2 space-y-2 text-sm text-white/85">
                  <li>Disposition séparée (split)</li>
                  <li>Repose‑poignets (selon modèle)</li>
                  <li>Réglages inclinaison (selon modèle)</li>
                  <li>Conseils d’adaptation</li>
                </ul>
              </div>
            </div>
            <div>
              <div class="rounded-3xl bg-slate-50 p-5 ring-1 ring-slate-100">
                <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">Accessoires</div>
                <h3 id="p-clavier-title" class="mt-1 text-lg font-extrabold text-slate-900">Clavier ergonomique split
                </h3>
                <p class="mt-2 text-sm text-slate-600">Il faut parfois 2–5 jours d’adaptation. Nous recommandons selon
                  votre façon de taper.</p>
                <div class="mt-3 flex flex-wrap gap-2">
                  <span
                    class="rounded-full bg-white px-3 py-1 text-xs font-bold text-slate-700 ring-1 ring-slate-200">Ergonomie</span>
                  <span
                    class="rounded-full bg-white px-3 py-1 text-xs font-bold text-slate-700 ring-1 ring-slate-200">Confort</span>
                </div>
              </div>
              <div class="mt-4 flex gap-2">
                <a href="mailto:contact@salapex.fr?subject=Demande%20de%20devis%20%E2%80%94%20Clavier%20ergonomique%20split"
                  class="inline-flex flex-1 items-center justify-center rounded-2xl bg-blue-700 px-4 py-3 text-sm font-extrabold text-white hover:bg-blue-800">Demande
                  de devis</a>
                <a href="#produits"
                  class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm font-bold hover:bg-slate-50">Fermer</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Souris verticale -->
      <div id="p-souris-verticale" class="modal" role="dialog" aria-modal="true" aria-labelledby="p-souris-title">
        <a href="#produits" class="modal-backdrop" aria-label="Fermer"></a>
        <div class="modal-card">
          <a href="#produits" class="modal-close">Fermer</a>
          <div class="grid gap-5 p-5 md:grid-cols-2">
            <div class="modal-side rounded-3xl">
              <div class="flex items-center justify-between">
                <div class="text-xs font-bold text-white/80">Prix indicatif</div>
                <span
                  class="rounded-full bg-white/10 px-3 py-1 text-xs font-extrabold ring-1 ring-white/15">Confort</span>
              </div>
              <div class="mt-2 text-3xl font-extrabold">à partir de 69 € TTC</div>
              <div class="mt-4 rounded-2xl bg-white/10 p-4 ring-1 ring-white/15">
                <div class="text-sm font-extrabold">Ce que ça inclut</div>
                <ul class="mt-2 space-y-2 text-sm text-white/85">
                  <li>Prise en main naturelle</li>
                  <li>DPI réglable (selon modèle)</li>
                  <li>Version filaire ou sans fil</li>
                  <li>Recommandation taille main</li>
                </ul>
              </div>
            </div>
            <div>
              <div class="rounded-3xl bg-slate-50 p-5 ring-1 ring-slate-100">
                <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">Accessoires</div>
                <h3 id="p-souris-title" class="mt-1 text-lg font-extrabold text-slate-900">Souris verticale</h3>
                <p class="mt-2 text-sm text-slate-600">Très apprécié en télétravail : simple à adopter, impact rapide
                  sur le confort.</p>
                <div class="mt-3 flex flex-wrap gap-2">
                  <span
                    class="rounded-full bg-white px-3 py-1 text-xs font-bold text-slate-700 ring-1 ring-slate-200">Ergonomie</span>
                  <span
                    class="rounded-full bg-white px-3 py-1 text-xs font-bold text-slate-700 ring-1 ring-slate-200">Télétravail</span>
                </div>
              </div>
              <div class="mt-4 flex gap-2">
                <a href="mailto:contact@salapex.fr?subject=Demande%20de%20devis%20%E2%80%94%20Souris%20verticale"
                  class="inline-flex flex-1 items-center justify-center rounded-2xl bg-blue-700 px-4 py-3 text-sm font-extrabold text-white hover:bg-blue-800">Demande
                  de devis</a>
                <a href="#produits"
                  class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm font-bold hover:bg-slate-50">Fermer</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Casque confort -->
      <div id="p-casque-confort" class="modal" role="dialog" aria-modal="true" aria-labelledby="p-casque-title">
        <a href="#produits" class="modal-backdrop" aria-label="Fermer"></a>
        <div class="modal-card">
          <a href="#produits" class="modal-close">Fermer</a>
          <div class="grid gap-5 p-5 md:grid-cols-2">
            <div class="modal-side rounded-3xl">
              <div class="flex items-center justify-between">
                <div class="text-xs font-bold text-white/80">Prix indicatif</div>
                <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-extrabold ring-1 ring-white/15">Audio
                  clair</span>
              </div>
              <div class="mt-2 text-3xl font-extrabold">à partir de 89 € TTC</div>
              <div class="mt-4 rounded-2xl bg-white/10 p-4 ring-1 ring-white/15">
                <div class="text-sm font-extrabold">Ce que ça inclut</div>
                <ul class="mt-2 space-y-2 text-sm text-white/85">
                  <li>Micro optimisé voix</li>
                  <li>Arceau confortable</li>
                  <li>Compatibilité PC</li>
                  <li>Conseil selon environnement (bruit)</li>
                </ul>
              </div>
            </div>
            <div>
              <div class="rounded-3xl bg-slate-50 p-5 ring-1 ring-slate-100">
                <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">Accessoires</div>
                <h3 id="p-casque-title" class="mt-1 text-lg font-extrabold text-slate-900">Casque confort</h3>
                <p class="mt-2 text-sm text-slate-600">On privilégie la lisibilité micro : c’est souvent le point le
                  plus critique en visio.</p>
                <div class="mt-3 flex flex-wrap gap-2">
                  <span
                    class="rounded-full bg-white px-3 py-1 text-xs font-bold text-slate-700 ring-1 ring-slate-200">Visioconférence</span>
                  <span
                    class="rounded-full bg-white px-3 py-1 text-xs font-bold text-slate-700 ring-1 ring-slate-200">Productivité</span>
                </div>
              </div>
              <div class="mt-4 flex gap-2">
                <a href="mailto:contact@salapex.fr?subject=Demande%20de%20devis%20%E2%80%94%20Casque%20confort%20"
                  class="inline-flex flex-1 items-center justify-center rounded-2xl bg-blue-700 px-4 py-3 text-sm font-extrabold text-white hover:bg-blue-800">Demande
                  de devis</a>
                <a href="#produits"
                  class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm font-bold hover:bg-slate-50">Fermer</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Entreprise : histoire + équipe + architecture -->
    <section id="entreprise" class="mt-12">
      <div class="flex flex-col gap-2">
        <h2 class="text-2xl font-extrabold tracking-tight text-slate-900 md:text-3xl underline-gold">Entreprise</h2>
        <p class="max-w-3xl text-slate-600">Découvrez l’histoire, l’équipe, et l’architecture du site.</p>
      </div>

      <!-- Histoire -->
      <div class="mt-6 grid gap-6 lg:grid-cols-12">
        <article class="lg:col-span-7 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
          <h3 class="text-lg font-extrabold">Notre histoire</h3>
          <p class="mt-2 text-sm text-slate-600">Une entreprise née d’une frustration simple : perdre du temps sur la
            configuration.</p>

          <ol class="mt-5 grid gap-3">
            <li class="rounded-2xl bg-slate-50 p-4 ring-1 ring-slate-100">
              <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">2022</div>
              <div class="mt-1 text-sm font-semibold text-slate-900">Création de Salapex</div>
              <div class="mt-1 text-sm text-slate-600">Objectif : rendre l’achat d’un PC aussi simple que le brancher.
              </div>
            </li>
            <li class="rounded-2xl bg-slate-50 p-4 ring-1 ring-slate-100">
              <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">2023</div>
              <div class="mt-1 text-sm font-semibold text-slate-900">Premiers packs télétravail</div>
              <div class="mt-1 text-sm text-slate-600">PC + accessoires + checklist d’installation.</div>
            </li>
            <li class="rounded-2xl bg-slate-50 p-4 ring-1 ring-slate-100">
              <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">2024</div>
              <div class="mt-1 text-sm font-semibold text-slate-900">Virage ergonomie</div>
              <div class="mt-1 text-sm text-slate-600">Sélection d’accessoires orientée confort et prévention des TMS.
              </div>
            </li>
            <li class="rounded-2xl bg-slate-50 p-4 ring-1 ring-slate-100">
              <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">2025</div>
              <div class="mt-1 text-sm font-semibold text-slate-900">Accompagnement “prise en main”</div>
              <div class="mt-1 text-sm text-slate-600">Aide à la migration et paramétrage pour petites structures.</div>
            </li>
            <li class="rounded-2xl bg-slate-50 p-4 ring-1 ring-slate-100">
              <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">2026</div>
              <div class="mt-1 text-sm font-semibold text-slate-900">Extension du catalogue pro</div>
              <div class="mt-1 text-sm text-slate-600">Packs plus performants + services complémentaires.</div>
            </li>
          </ol>
        </article>

        <!-- Architecture -->
        <aside class="lg:col-span-5 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
          <h3 class="text-lg font-extrabold">Architecture du site</h3>
          <p class="mt-2 text-sm text-slate-600">Une structure claire, orientée produits, avec pages légales.</p>

          <div class="mt-5 rounded-2xl bg-slate-50 p-4 ring-1 ring-slate-100">
            <div class="text-sm font-extrabold text-slate-900">Plan</div>
            <ul class="mt-2 space-y-2 text-sm text-slate-700">
              <li>• Accueil (promesse + preuves + CTA)</li>
              <li>• Produits (Ordinateurs / Accessoires / Packs) + filtres</li>
              <li>• Packs (comparatif + cas d’usage)</li>
              <li>• Entreprise (Histoire, équipe, fiches de postes)</li>
              <li>• Contact (devis + coordonnées)</li>
              <li>• Mentions légales + Politique de confidentialité</li>
            </ul>
          </div>
        </aside>
      </div>

      <!-- Équipe + fiches de postes -->
      <div class="mt-6 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
          <div>
            <h3 class="text-lg font-extrabold">Notre équipe (fiches de postes)</h3>
            <p class="mt-1 text-sm text-slate-600">Cliquez sur un rôle pour consulter les missions et compétences, ou
              ouvrir la fiche PDF.</p>
          </div>
          <div class="no-print flex flex-wrap gap-2">
            <a href="assets/img/organigramme.jpg" target="_blank" rel="noopener"
              class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50">Organigramme
              (JPG)</a>
            <a href="assets/img/logo-salapex.jpg" target="_blank" rel="noopener"
              class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50">Voir le
              logo (JPG)</a>
          </div>
        </div>

        <div class="mt-6 rounded-3xl bg-slate-50 p-5 ring-1 ring-slate-100">
          <div class="text-sm font-extrabold text-slate-900">Documents (PDF)</div>
          <div class="no-print mt-4 flex flex-wrap gap-2" id="pdfLinks">
            <a href="assets/pdf/fiche-poste-pdg.pdf" target="_blank" rel="noopener"
              class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50">Fiche
              PDF — PDG</a>
            <a href="assets/pdf/fiche-poste-marketing.pdf" target="_blank" rel="noopener"
              class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50">Fiche
              PDF — Marketing</a>
            <a href="assets/pdf/fiche-poste-production.pdf" target="_blank" rel="noopener"
              class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50">Fiche
              PDF — Production</a>
            <a href="assets/pdf/fiche-poste-admin.pdf" target="_blank" rel="noopener"
              class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50">Fiche
              PDF — Administratif</a>
            <a href="assets/pdf/fiche-poste-technicien-it.pdf" target="_blank" rel="noopener"
              class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50">Fiche
              PDF — IT</a>
          </div>
        </div>

        <div id="teamGrid" class="mt-6 grid gap-4 md:grid-cols-2"></div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="mt-12 mb-16">
      <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="grid gap-6 lg:grid-cols-12">
          <div class="lg:col-span-7">
            <h2 class="text-2xl font-extrabold tracking-tight text-slate-900 md:text-3xl underline-gold">Contact</h2>
            <p class="mt-2 max-w-2xl text-slate-600">Une question, une demande de recommandation, ou un devis ?
              Écrivez-nous.</p>

            <div class="mt-6">
              <a href="mailto:contact@salapex.fr?subject=Demande%20de%20contact%20Salapex&body=Bonjour,%0D%0A%0D%0AJe%20souhaite%20obtenir%20un%20devis%20ou%20des%20informations.%0D%0A%0D%0ANom%20:%0D%0AObjet%20:%0D%0AMessage%20:%0D%0A"
                class="inline-flex items-center justify-center rounded-2xl bg-blue-700 px-5 py-3 text-sm font-extrabold text-white hover:bg-blue-800">
                Envoyer un email
              </a>
            </div>
          </div>

          <aside class="lg:col-span-5">
            <div class="rounded-3xl bg-slate-50 p-6 ring-1 ring-slate-100">
              <h3 class="text-base font-extrabold">Coordonnées</h3>
              <dl class="mt-4 grid gap-3 text-sm">
                <div class="rounded-2xl bg-white p-4 ring-1 ring-slate-200">
                  <dt class="text-xs font-extrabold uppercase tracking-wide text-slate-500">Email</dt>
                  <dd class="mt-1 font-bold text-slate-900"><a class="text-blue-700 hover:text-blue-800"
                      href="mailto:contact@salapex.fr">contact@salapex.fr</a></dd>
                </div>
                <div class="rounded-2xl bg-white p-4 ring-1 ring-slate-200">
                  <dt class="text-xs font-extrabold uppercase tracking-wide text-slate-500">Téléphone</dt>
                  <dd class="mt-1 font-bold text-slate-900"><a class="text-blue-700 hover:text-blue-800"
                      href="tel:+33123456789">01 23 45 67 89</a></dd>
                </div>
                <div class="rounded-2xl bg-white p-4 ring-1 ring-slate-200">
                  <dt class="text-xs font-extrabold uppercase tracking-wide text-slate-500">Horaires</dt>
                  <dd class="mt-1 text-slate-700">Lun–Ven : 9h–18h</dd>
                </div>
              </dl>

              <div class="mt-5 overflow-hidden rounded-3xl ring-1 ring-slate-200">
                <iframe title="Localisation Salapex" width="100%" height="224" style="border:0;" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                  src="https://www.google.com/maps?q=47.2380,6.0243&z=15&output=embed">
                </iframe>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="border-t border-slate-200 bg-white">
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
            href="#produits">Produits</a>
          <a class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50"
            href="#entreprise">Entreprise</a>
          <a class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50"
            href="#contact">Contact</a>
          <a class="no-print rounded-2xl bg-blue-700 px-4 py-2 text-sm font-extrabold text-white hover:bg-blue-800"
            href="#accueil">Haut de page</a>
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

  <!-- Product modal -->
  <div id="modal" class="fixed inset-0 z-[60] hidden" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div id="modalBackdrop" class="absolute inset-0 bg-slate-900/60"></div>
    <div class="relative mx-auto mt-10 w-[min(900px,92vw)]">
      <div class="modal-enter overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-xl">
        <div class="flex items-start justify-between gap-3 border-b border-slate-200 p-5">
          <div>
            <div id="modalKicker" class="text-xs font-extrabold uppercase tracking-wide text-blue-700">Produit</div>
            <h3 id="modalTitle" class="mt-1 text-lg font-extrabold text-slate-900">—</h3>
            <p id="modalDesc" class="mt-1 text-sm text-slate-600">—</p>
          </div>
          <button id="closeModalBtn"
            class="no-print rounded-2xl border border-slate-300 bg-white px-3 py-2 text-sm font-bold hover:bg-slate-50"
            aria-label="Fermer">Fermer</button>
        </div>
        <div class="grid gap-5 p-5 md:grid-cols-2">
          <div class="rounded-3xl bg-gradient-to-br from-slate-900 to-blue-900 p-5 text-white">
            <div class="flex items-center justify-between">
              <div class="text-xs font-bold text-white/80">Prix indicatif</div>
              <span id="modalBadge"
                class="rounded-full bg-white/10 px-3 py-1 text-xs font-extrabold ring-1 ring-white/15">—</span>
            </div>
            <div id="modalPrice" class="mt-2 text-3xl font-extrabold">—</div>
            <div class="mt-4 rounded-2xl bg-white/10 p-4 ring-1 ring-white/15">
              <div class="text-sm font-extrabold">Ce que ça inclut</div>
              <ul id="modalFeatures" class="mt-2 space-y-2 text-sm text-white/85"></ul>
            </div>
            <button id="modalAddBtn"
              class="no-print mt-5 inline-flex w-full items-center justify-center rounded-2xl bg-white px-4 py-3 text-sm font-extrabold text-blue-800 hover:bg-slate-50">Ajouter
              au devis</button>
          </div>
          <div>
            <div class="rounded-3xl bg-slate-50 p-5 ring-1 ring-slate-100">
              <div class="text-sm font-extrabold">Pour quel usage ?</div>
              <div id="modalUse" class="mt-2 flex flex-wrap gap-2"></div>
            </div>
            <div class="mt-4 rounded-3xl bg-slate-50 p-5 ring-1 ring-slate-100">
              <div class="text-sm font-extrabold">Notes Salapex</div>
              <p id="modalNotes" class="mt-2 text-sm text-slate-600">—</p>
            </div>
            <div class="no-print mt-4 flex gap-2">
              <a href="#contact" id="modalContactLink"
                class="inline-flex flex-1 items-center justify-center rounded-2xl bg-blue-700 px-4 py-3 text-sm font-extrabold text-white hover:bg-blue-800">Parler
                à un conseiller</a>
              <a href="#devis"
                class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm font-bold hover:bg-slate-50">Voir
                devis</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<?php include "includes/footer.php"; ?>