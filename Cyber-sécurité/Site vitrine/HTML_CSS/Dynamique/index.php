<?php
require_once __DIR__ . '/includes/functions.php';
$products = all_products($pdo);

include __DIR__ . "/includes/header.php";
?>

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
          <?php foreach ($products as $p): ?>
            <?php include __DIR__ . '/templates/product-card.php'; ?>
          <?php endforeach; ?>
        </div>

        <p class="mt-4 text-center text-sm text-slate-500">
          Prix indicatifs. Assistance gratuite sous 24–48h ouvrées.
        </p>
      </div>
    </div>

    <!-- Entreprise : histoire + équipe + architecture -->
    <section id="entreprise" class="mt-12">
      <div class="flex flex-col gap-2">
        <h2 class="text-2xl font-extrabold tracking-tight text-slate-900 md:text-3xl underline-gold">Entreprise</h2>
        <p class="max-w-3xl text-slate-600">Découvrez l’histoire, l’équipe, et l’architecture du site.</p>
      </div>

      <!-- Histoire -->
      <div class="mt-6 grid gap-6 lg:grid-cols-12">
        <article class="lg:col-span-12 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
          <h3 class="text-lg font-extrabold">Notre histoire</h3>
          <p class="mt-2 text-sm text-slate-600">Une entreprise née d’une frustration simple : perdre du temps sur la
            configuration.</p>

          <div class="mt-5 grid gap-6 lg:grid-cols-12">
            <div class="lg:col-span-5">
              <ol class="grid gap-3">
                <li class="rounded-2xl bg-slate-50 p-4 ring-1 ring-slate-100">
                  <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">2022</div>
                  <div class="mt-1 text-sm font-semibold text-slate-900">Création de Salapex</div>
                  <div class="mt-1 text-sm text-slate-600">Objectif : rendre l’achat d’un PC aussi simple que le
                    brancher.
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
                  <div class="mt-1 text-sm text-slate-600">Sélection d’accessoires orientée confort et prévention des
                    TMS.
                  </div>
                </li>
                <li class="rounded-2xl bg-slate-50 p-4 ring-1 ring-slate-100">
                  <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">2025</div>
                  <div class="mt-1 text-sm font-semibold text-slate-900">Accompagnement “prise en main”</div>
                  <div class="mt-1 text-sm text-slate-600">Aide à la migration et paramétrage pour petites structures.
                  </div>
                </li>
                <li class="rounded-2xl bg-slate-50 p-4 ring-1 ring-slate-100">
                  <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">2026</div>
                  <div class="mt-1 text-sm font-semibold text-slate-900">Extension du catalogue pro</div>
                  <div class="mt-1 text-sm text-slate-600">Packs plus performants + services complémentaires.</div>
                </li>
              </ol>
            </div>

            <div class="lg:col-span-7">
              <div class="grid gap-4">
                <div class="rounded-3xl bg-white p-6 flex items-center justify-center">
                  <img src="assets/img/logo-salapex.jpg" alt="Logo Salapex" class="max-h-40 w-auto object-contain">
                </div>

                <div class="rounded-3xl bg-white overflow-hidden">
                  <div class="aspect-[16/9] w-full">
                    <img src="assets/img/organigramme.jpg" alt="Organigramme" class="h-full w-full object-cover">
                  </div>
                  <div class="p-5">
                    <div class="text-sm font-extrabold text-slate-900">Organigramme</div>
                    <p class="mt-1 text-sm text-slate-600">Visualisez la structure de l’équipe et les responsabilités.
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </article>

      </div>

      <!-- Équipe + fiches de postes -->
      <div class="mt-6 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
          <div>
            <h3 class="text-lg font-extrabold">Notre équipe (fiches de postes)</h3>
            <p class="mt-1 text-sm text-slate-600">Cliquez sur un rôle pour consulter les missions et compétences, ou
              ouvrir la fiche PDF.</p>
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
            <p class="mt-2 max-w-2xl text-slate-600">Une question ou une demande de recommandation ?
              Écrivez-nous.</p>

            <div class="mt-6 rounded-3xl bg-blue-50 p-6 ring-1 ring-blue-100">
              <div class="flex flex-col gap-4 md:flex-row md:items-start md:justify-between">
                <div class="flex items-start gap-4">
                  <span class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-700 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M4 4h16v16H4z" />
                      <path d="M22 6l-10 7L2 6" />
                    </svg>
                  </span>
                  <div>
                    <div class="text-sm font-extrabold text-slate-900">Réponse sous 24h</div>
                    <p class="mt-1 text-sm text-slate-600">Posez votre question et nous revenons vers vous rapidement.
                    </p>
                  </div>
                </div>
                <a href="mailto:contact@salapex.fr?subject=Demande%20de%20contact%20Salapex&body=Bonjour,%0D%0A%0D%0AJe%20souhaite%20obtenir%20des%20informations.%0D%0A%0D%0ANom%20:%0D%0AObjet%20:%0D%0AMessage%20:%0D%0A"
                  class="inline-flex w-full items-center justify-center rounded-2xl bg-blue-700 px-5 py-3 text-sm font-extrabold text-white hover:bg-blue-800 md:w-auto">
                  Envoyer un email
                </a>
              </div>
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
            au panier</button>
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
            <a href="/cart.php"
              class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm font-bold hover:bg-slate-50">Voir
              le panier</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

<?php include "includes/footer.php"; ?>