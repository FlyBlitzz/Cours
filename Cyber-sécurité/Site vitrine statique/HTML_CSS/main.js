// ---------- Data ----------
const PRODUCTS = [
  {
    id: 'pack-bureau-essentiel',
    name: 'Pack Bureau Essentiel',
    category: 'Packs',
    usecases: ['Bureautique', 'Visioconférence'],
    price: 799,
    priceLabel: 'à partir de 799 € TTC',
    badge: 'Prêt à l’emploi',
    short: 'Un pack simple pour travailler immédiatement : PC + accessoires indispensables.',
    features: [
      'PC (SSD) configuré + mises à jour appliquées',
      'Clavier & souris ergonomiques',
      'Casque confort',
      'Sauvegarde / restauration (image système)'
    ],
    notes: "Idéal pour la bureautique, la navigation, la visio. Nous adaptons la puissance selon vos logiciels.",
    tags: ['pack', 'tout-en-un', 'installation']
  },
  {
    id: 'pack-teletravail-confort',
    name: 'Pack Télétravail Confort',
    category: 'Packs',
    usecases: ['Télétravail', 'Confort'],
    price: 999,
    priceLabel: 'à partir de 999 € TTC',
    badge: 'Ergonomie +',
    short: 'Pour les journées longues : ergonomie renforcée et configuration soignée.',
    features: [
      'PC configuré (SSD) + sécurisation de base',
      'Souris verticale + clavier confort',
      'Casque à réduction de bruit (selon stock)',
      'Checklist posture & réglages'
    ],
    notes: "Recommandé si vous passez 6h+ par jour au poste. L’objectif : réduire fatigue et tensions. ",
    tags: ['pack', 'ergonomie', 'tms']
  },
  {
    id: 'pack-pro-performance',
    name: 'Pack Pro Performance',
    category: 'Packs',
    usecases: ['Petite entreprise', 'Productivité'],
    price: 1290,
    priceLabel: 'à partir de 1290 € TTC',
    badge: 'Pro',
    short: 'Performance + accompagnement : pour outils pros, multi-tâches et TPE.',
    features: [
      'PC plus puissant (selon besoin)',
      'Suite bureautique installée (si fournie)',
      'Pack accessoires complet',
      'Assistance prise en main (1h)'
    ],
    notes: "Pensé pour les indépendants et TPE : plus de marge, plus de confort, et une prise en main pour partir vite.",
    tags: ['pack', 'pro', 'assistance']
  },
  {
    id: 'pc-pret-a-lemploi',
    name: 'Ordinateur prêt à l’emploi (config)',
    category: 'Ordinateurs',
    usecases: ['Migration', 'Simplicité'],
    price: 590,
    priceLabel: 'à partir de 590 € TTC',
    badge: 'Configuré',
    short: 'Configuration complète sur une machine sélectionnée selon votre usage.',
    features: [
      'Mises à jour + optimisation',
      'Comptes utilisateurs',
      'Antivirus / sécurité (selon OS)',
      'Transfert de données possible (option)'
    ],
    notes: "Nous vous orientons vers un modèle adapté (fixe ou portable). L’important : simplicité et stabilité.",
    tags: ['ordinateur', 'configuration', 'installation']
  },
  {
    id: 'clavier-ergonomique-split',
    name: 'Clavier ergonomique split',
    category: 'Accessoires',
    usecases: ['Ergonomie', 'Confort'],
    price: 119,
    priceLabel: 'à partir de 119 € TTC',
    badge: 'Ergo',
    short: 'Réduit la tension des poignets grâce à une position plus naturelle.',
    features: [
      'Disposition séparée (split)',
      'Repose-poignets (selon modèle)',
      'Réglages inclinaison (selon modèle)',
      'Conseils d’adaptation'
    ],
    notes: "Il faut parfois 2–5 jours d’adaptation. Nous recommandons selon votre façon de taper.",
    tags: ['clavier', 'ergonomique', 'tms']
  },
  {
    id: 'souris-verticale',
    name: 'Souris verticale',
    category: 'Accessoires',
    usecases: ['Ergonomie', 'Télétravail'],
    price: 69,
    priceLabel: 'à partir de 69 € TTC',
    badge: 'Confort',
    short: 'Une prise plus neutre pour limiter la pronation de l’avant-bras.',
    features: [
      'Prise en main naturelle',
      'DPI réglable (selon modèle)',
      'Version filaire ou sans fil',
      'Recommandation taille main'
    ],
    notes: "Très apprécié en télétravail : simple à adopter, impact rapide sur le confort.",
    tags: ['souris', 'ergonomie', 'tms']
  },
  {
    id: 'casque-confort',
    name: 'Casque confort (visio)',
    category: 'Accessoires',
    usecases: ['Visioconférence', 'Productivité'],
    price: 89,
    priceLabel: 'à partir de 89 € TTC',
    badge: 'Audio clair',
    short: 'Micro lisible et port confortable pour les réunions et appels.',
    features: [
      'Micro optimisé voix',
      'Arceau confortable',
      'Compatibilité PC',
      'Conseil selon environnement (bruit)'
    ],
    notes: "On privilégie la lisibilité micro : c’est souvent le point le plus critique en visio.",
    tags: ['casque', 'visio', 'confort']
  }
];

const TEAM = [
  {
    name: 'François Mercer',
    role: 'PDG',
    summary: 'Vision produit, stratégie, partenariats.',
    missions: [
      'Définir la vision : “technologie simplifiée”',
      'Arbitrer la gamme (packs, accessoires, services)',
      'Piloter la qualité et la satisfaction client'
    ],
    skills: ['Gestion', 'Relation client', 'Pilotage qualité'],
    tools: ['CRM', 'Tableaux de bord', 'Process internes'],
    kpis: ['Satisfaction', 'Taux de retour', 'Temps moyen de livraison']
  },
  {
    name: 'Estelle Martin',
    role: 'Responsable Marketing',
    summary: 'Positionnement, acquisition, contenu, offres.',
    missions: [
      'Présenter une offre lisible (packs, comparatifs)',
      'Créer des contenus (FAQ, conseils ergonomie)',
      'Optimiser conversion (CTA, formulaires, landing)'
    ],
    skills: ['Copywriting', 'SEO', 'Analyse'],
    tools: ['Analytics', 'CMS', 'Emailing'],
    kpis: ['Leads', 'Taux de conversion', 'Trafic organique']
  },
  {
    name: 'Richard Bernard',
    role: 'Responsable Production',
    summary: 'Assemblage, configuration, tests.',
    missions: [
      'Standardiser la préparation des PC',
      'Tester stabilité et performances',
      'Documenter la configuration / restauration'
    ],
    skills: ['Systèmes', 'Procédures', 'Qualité'],
    tools: ['Images système', 'Checklists', 'Outils de diagnostic'],
    kpis: ['Taux incident', 'Temps de préparation', 'Conformité checklists']
  },
  {
    name: 'Donna Thomas',
    role: 'Support administratif',
    summary: 'Devis, factures, suivi.',
    missions: [
      'Éditer devis et factures',
      'Suivre commandes et livraisons',
      'Assurer conformité RGPD (consentement, durée)'
    ],
    skills: ['Organisation', 'Rigueur', 'Relation client'],
    tools: ['Suite bureautique', 'ERP / facturation'],
    kpis: ['Délai devis', 'Taux d’erreur', 'Satisfaction']
  },
  {
    name: 'Olivia Petit',
    role: 'Technicienne IT',
    summary: 'Support, conseil, prise en main.',
    missions: [
      'Recommander configurations selon usage',
      'Accompagner migration et prise en main',
      'Rédiger guides (posture, réglages, bonnes pratiques)'
    ],
    skills: ['Support', 'Pédagogie', 'Diagnostic'],
    tools: ['Outils remote', 'Base de connaissances'],
    kpis: ['Temps résolution', 'CSAT', 'Taux réouverture tickets']
  }
];

const FAQ = [
  {
    q: "Qu’est-ce qu’un ordinateur “prêt à l’emploi” ?",
    a: "Un PC que nous préparons avant livraison : mises à jour, réglages essentiels, tests, et une configuration stable. L’objectif : brancher et utiliser."
  },
  {
    q: "Est-ce adapté à une petite entreprise (TPE) ?",
    a: "Oui. Nous proposons des packs pros, une préparation homogène, et un accompagnement de prise en main."
  },
  {
    q: "Puis-je acheter uniquement des accessoires ?",
    a: "Bien sûr : claviers, souris, casques, recommandations ergonomiques selon votre usage."
  },
  {
    q: "Les prix affichés sont-ils définitifs ?",
    a: "Ils sont indicatifs. Le devis final dépend du stock, de la configuration et de vos besoins (quantité, logiciels, migration, etc.)."
  }
];

// ---------- Helpers ----------
const euro = (n) => new Intl.NumberFormat('fr-FR', { style: 'currency', currency: 'EUR', maximumFractionDigits: 0 }).format(n);

const uniq = (arr) => Array.from(new Set(arr));

// ---------- UI State ----------
const state = {
  search: '',
  category: 'Tous',
  usecase: 'Tous',
  modalId: null,
  devis: {}
};

// ---------- DOM ----------
const $ = (sel) => document.querySelector(sel);
const $$ = (sel) => Array.from(document.querySelectorAll(sel));

const productsGrid = $('#productsGrid');
const categoryChips = $('#categoryChips');
const usecaseChips = $('#usecaseChips');
const resultCount = $('#resultCount');

const searchInput = $('#searchInput');
const resetFiltersBtn = $('#resetFiltersBtn');

const modal = $('#modal');
const modalBackdrop = $('#modalBackdrop');
const closeModalBtn = $('#closeModalBtn');
const modalTitle = $('#modalTitle');
const modalDesc = $('#modalDesc');
const modalKicker = $('#modalKicker');
const modalPrice = $('#modalPrice');
const modalBadge = $('#modalBadge');
const modalFeatures = $('#modalFeatures');
const modalUse = $('#modalUse');
const modalNotes = $('#modalNotes');
const modalAddBtn = $('#modalAddBtn');

const devisItems = $('#devisItems');
const devisEmpty = $('#devisEmpty');
const devisTotal = $('#devisTotal');
const clearDevisBtn = $('#clearDevisBtn');
const printDevisBtn = $('#printDevisBtn');
const printDate = $('#printDate');
const printItems = $('#printItems');
const printTotal = $('#printTotal');

const devisForm = $('#devisForm');
const devisToast = $('#devisToast');

const contactForm = $('#contactForm');
const contactToast = $('#contactToast');

// Document modal DOM
const docModal = $('#docModal');
const docModalBackdrop = $('#docModalBackdrop');
const docModalClose = $('#docModalClose');
const docModalTitle = $('#docModalTitle');
const docModalMeta = $('#docModalMeta');
const docModalOpenNew = $('#docModalOpenNew');
const docModalFrame = $('#docModalFrame');
const docModalError = $('#docModalError');

// ---------- LocalStorage ----------
const LS_KEY = 'salapex_devis_v1';
function loadDevis(){
  try {
    const raw = localStorage.getItem(LS_KEY);
    if (!raw) return;
    const data = JSON.parse(raw);
    if (data && typeof data === 'object') state.devis = data;
  } catch (_) {}
}
function saveDevis(){
  try { localStorage.setItem(LS_KEY, JSON.stringify(state.devis)); } catch (_) {}
}

// ---------- Chips rendering ----------
function chip(label, active, onClick){
  const btn = document.createElement('button');
  btn.type = 'button';
  btn.textContent = label;
  btn.className = [
    'rounded-full px-3 py-1 text-xs font-extrabold ring-1 transition',
    active ? 'bg-blue-700 text-white ring-blue-700' : 'bg-white text-slate-700 ring-slate-200 hover:bg-slate-50'
  ].join(' ');
  btn.addEventListener('click', onClick);
  return btn;
}

function renderChips(){
  categoryChips.innerHTML = '';
  usecaseChips.innerHTML = '';

  const categories = ['Tous', ...uniq(PRODUCTS.map(p => p.category))];
  const usecases = ['Tous', ...uniq(PRODUCTS.flatMap(p => p.usecases))];

  categories.forEach(c => {
    categoryChips.appendChild(chip(c, state.category === c, () => { state.category = c; render(); }));
  });

  usecases.forEach(u => {
    usecaseChips.appendChild(chip(u, state.usecase === u, () => { state.usecase = u; render(); }));
  });
}

// ---------- Products rendering ----------
function matches(p){
  const q = state.search.trim().toLowerCase();
  const hay = [p.name, p.category, p.short, p.badge, p.notes, ...(p.features||[]), ...(p.tags||[]), ...(p.usecases||[])].join(' ').toLowerCase();
  const okSearch = !q || hay.includes(q);
  const okCat = state.category === 'Tous' || p.category === state.category;
  const okUse = state.usecase === 'Tous' || (p.usecases || []).includes(state.usecase);
  return okSearch && okCat && okUse;
}

function productCard(p){
  const el = document.createElement('article');
  el.className = 'rounded-3xl border border-slate-200 bg-white p-5 shadow-sm hover:shadow-md transition';
  el.innerHTML = `
    <div class="flex items-start justify-between gap-3">
      <div>
        <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">${p.category}</div>
        <h3 class="mt-1 text-lg font-extrabold text-slate-900">${p.name}</h3>
        <p class="mt-2 text-sm text-slate-600">${p.short}</p>
      </div>
      <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-extrabold text-emerald-800 ring-1 ring-emerald-100">${p.badge}</span>
    </div>

    <div class="mt-4 flex flex-wrap gap-2">
      ${(p.usecases||[]).slice(0, 3).map(u => `<span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-700">${u}</span>`).join('')}
    </div>

    <div class="mt-5 flex items-center justify-between gap-3">
      <div>
        <div class="text-xs font-bold text-slate-500">Prix indicatif</div>
        <div class="text-lg font-extrabold text-slate-900">${p.priceLabel}</div>
      </div>
      <div class="no-print flex gap-2">
        <button data-open="${p.id}" class="rounded-2xl border border-slate-300 bg-white px-4 py-2 text-sm font-bold hover:bg-slate-50">Détails</button>
        <button data-add="${p.id}" class="rounded-2xl bg-blue-700 px-4 py-2 text-sm font-extrabold text-white hover:bg-blue-800">Ajouter</button>
      </div>
    </div>
  `;
  return el;
}

function renderProducts(){
  const filtered = PRODUCTS.filter(matches);
  productsGrid.innerHTML = '';
  filtered.forEach(p => productsGrid.appendChild(productCard(p)));
  resultCount.textContent = `${filtered.length} résultat${filtered.length>1?'s':''}`;

  // bind buttons
  productsGrid.querySelectorAll('[data-open]').forEach(btn => btn.addEventListener('click', () => openModal(btn.getAttribute('data-open'))));
  productsGrid.querySelectorAll('[data-add]').forEach(btn => btn.addEventListener('click', () => addToDevis(btn.getAttribute('data-add'), 1)));
}

// ---------- Modal ----------
function openModal(id){
  const p = PRODUCTS.find(x => x.id === id);
  if (!p) return;
  state.modalId = id;

  modalKicker.textContent = p.category;
  modalTitle.textContent = p.name;
  modalDesc.textContent = p.short;
  modalPrice.textContent = p.priceLabel;
  modalBadge.textContent = p.badge;
  modalNotes.textContent = p.notes;

  modalFeatures.innerHTML = '';
  (p.features || []).forEach(f => {
    const li = document.createElement('li');
    li.textContent = '• ' + f;
    modalFeatures.appendChild(li);
  });

  modalUse.innerHTML = '';
  (p.usecases || []).forEach(u => {
    const span = document.createElement('span');
    span.className = 'rounded-full bg-white px-3 py-1 text-xs font-bold text-slate-700 ring-1 ring-slate-200';
    span.textContent = u;
    modalUse.appendChild(span);
  });

  modalAddBtn.onclick = () => addToDevis(p.id, 1);

  modal.classList.remove('hidden');
  document.body.style.overflow = 'hidden';

  // Focus management
  closeModalBtn.focus();
}

function closeModal(){
  state.modalId = null;
  modal.classList.add('hidden');
  document.body.style.overflow = '';
}

closeModalBtn.addEventListener('click', closeModal);
modalBackdrop.addEventListener('click', closeModal);
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape' && !modal.classList.contains('hidden')) closeModal();
});

// ---------- Devis ----------
function addToDevis(id, qty){
  if (!PRODUCTS.some(p => p.id === id)) return;
  state.devis[id] = (state.devis[id] || 0) + (qty || 1);
  saveDevis();
  renderDevis();

  // Provide immediate feedback
  const p = PRODUCTS.find(x => x.id === id);
  toast(devisToast, `Ajouté au devis : <strong>${escapeHtml(p.name)}</strong>.`, 2600);
}

function removeFromDevis(id){
  delete state.devis[id];
  saveDevis();
  renderDevis();
}

function setQty(id, qty){
  const q = Math.max(1, Math.min(99, Number(qty)||1));
  state.devis[id] = q;
  saveDevis();
  renderDevis();
}

function computeTotal(){
  let total = 0;
  for (const [id, q] of Object.entries(state.devis)){
    const p = PRODUCTS.find(x => x.id === id);
    if (!p) continue;
    total += (p.price || 0) * (q || 0);
  }
  return total;
}

function devisRow(p, qty){
  const el = document.createElement('div');
  el.className = 'rounded-2xl border border-slate-200 bg-white p-4';
  el.innerHTML = `
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
      <div>
        <div class="text-xs font-extrabold uppercase tracking-wide text-blue-700">${p.category}</div>
        <div class="mt-1 font-extrabold text-slate-900">${p.name}</div>
        <div class="mt-1 text-sm text-slate-600">${p.priceLabel}</div>
      </div>
      <div class="no-print flex flex-wrap items-center gap-2">
        <label class="text-xs font-bold text-slate-600" for="qty-${p.id}">Qté</label>
        <input id="qty-${p.id}" class="w-20 rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm" type="number" min="1" max="99" value="${qty}">
        <button data-open="${p.id}" class="rounded-2xl border border-slate-300 bg-white px-3 py-2 text-sm font-bold hover:bg-slate-50">Détails</button>
        <button data-remove="${p.id}" class="rounded-2xl bg-slate-900 px-3 py-2 text-sm font-extrabold text-white hover:bg-slate-800">Retirer</button>
      </div>
    </div>
  `;

  el.querySelector(`#qty-${CSS.escape(p.id)}`).addEventListener('change', (e) => setQty(p.id, e.target.value));
  el.querySelector('[data-open]').addEventListener('click', () => openModal(p.id));
  el.querySelector('[data-remove]').addEventListener('click', () => removeFromDevis(p.id));
  return el;
}

function renderDevis(){
  devisItems.innerHTML = '';
  const entries = Object.entries(state.devis);
  if (entries.length === 0){
    devisEmpty.classList.remove('hidden');
  } else {
    devisEmpty.classList.add('hidden');
  }

  for (const [id, qty] of entries){
    const p = PRODUCTS.find(x => x.id === id);
    if (!p) continue;
    devisItems.appendChild(devisRow(p, qty));
  }

  const total = computeTotal();
  devisTotal.textContent = euro(total);

  // Print area
  const now = new Date();
  printDate.textContent = now.toLocaleDateString('fr-FR', { year:'numeric', month:'long', day:'numeric' });
  printItems.innerHTML = '';
  for (const [id, qty] of entries){
    const p = PRODUCTS.find(x => x.id === id);
    if (!p) continue;
    const row = document.createElement('div');
    row.className = 'mt-2';
    row.innerHTML = `<div><strong>${escapeHtml(p.name)}</strong> — Qté: ${qty} — ${escapeHtml(p.priceLabel)}</div>`;
    printItems.appendChild(row);
  }
  printTotal.textContent = euro(total);
}

clearDevisBtn.addEventListener('click', () => {
  state.devis = {};
  saveDevis();
  renderDevis();
  toast(devisToast, 'Devis vidé.', 2000);
});

printDevisBtn.addEventListener('click', () => {
  renderDevis();
  window.print();
});

// ---------- Forms (mailto demo) ----------
function buildDevisEmail(){
  const entries = Object.entries(state.devis);
  const items = entries.map(([id, qty]) => {
    const p = PRODUCTS.find(x => x.id === id);
    if (!p) return null;
    return `- ${p.name} (x${qty}) — ${p.priceLabel}`;
  }).filter(Boolean).join('\n');

  const total = euro(computeTotal());

  const name = $('#clientName').value.trim();
  const email = $('#clientEmail').value.trim();
  const type = $('#clientType').value;
  const need = $('#needText').value.trim();

  const subject = `Demande de devis — ${name}`;
  const body = [
    `Bonjour Salapex,`,
    ``,
    `Je souhaite un devis.`,
    ``,
    `Profil : ${type}`,
    `Nom : ${name}`,
    `Email : ${email}`,
    ``,
    `Produits sélectionnés :`,
    items || '(aucun produit sélectionné)',
    ``,
    `Total indicatif : ${total}`,
    ``,
    need ? `Besoin / contexte :\n${need}` : 'Besoin / contexte : (non précisé)',
    ``,
    `Merci,`,
    name
  ].join('\n');

  return { subject, body };
}

devisForm.addEventListener('submit', (e) => {
  e.preventDefault();
  const consent = $('#consentDevis').checked;
  if (!consent) return;

  const { subject, body } = buildDevisEmail();
  const mailto = `mailto:contact@salapex.fr?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
  window.location.href = mailto;
  toast(devisToast, 'Votre messagerie va s’ouvrir avec le devis prérempli.', 5000);
});

contactForm.addEventListener('submit', (e) => {
  e.preventDefault();
  const name = $('#cName').value.trim();
  const email = $('#cEmail').value.trim();
  const subject = $('#cSubject').value.trim();
  const msg = $('#cMessage').value.trim();
  const consent = $('#cConsent').checked;
  if (!consent) return;

  const fullSubject = `Contact — ${subject}`;
  const body = [
    `Bonjour Salapex,`,
    ``,
    `Nom : ${name}`,
    `Email : ${email}`,
    ``,
    `Message :`,
    msg
  ].join('\n');

  const mailto = `mailto:contact@salapex.fr?subject=${encodeURIComponent(fullSubject)}&body=${encodeURIComponent(body)}`;
  window.location.href = mailto;
  toast(contactToast, 'Votre messagerie va s’ouvrir avec le message prérempli.', 5000);
});

// ---------- Team / FAQ rendering ----------
function renderTeam(){
  const grid = $('#teamGrid');
  grid.innerHTML = '';
  TEAM.forEach((m, idx) => {
    const card = document.createElement('article');
    card.className = 'rounded-3xl border border-slate-200 bg-white p-5 shadow-sm';

    const id = `team-${idx}`;
    card.innerHTML = `
      <div class="flex items-start justify-between gap-3">
        <div>
          <h4 class="text-base font-extrabold text-slate-900">${escapeHtml(m.name)}</h4>
          <p class="mt-1 text-sm font-semibold text-blue-700">${escapeHtml(m.role)}</p>
          <p class="mt-2 text-sm text-slate-600">${escapeHtml(m.summary)}</p>
        </div>
        <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-700">Fiche de poste</span>
      </div>

      <details class="mt-4 rounded-2xl bg-slate-50 p-4 ring-1 ring-slate-100">
        <summary class="cursor-pointer text-sm font-extrabold text-slate-900">Voir les détails</summary>
        <div class="mt-3 grid gap-3">
          <div>
            <div class="text-xs font-extrabold uppercase tracking-wide text-slate-500">Missions</div>
            <ul class="mt-2 list-disc pl-5 text-sm text-slate-700">
              ${m.missions.map(x => `<li>${escapeHtml(x)}</li>`).join('')}
            </ul>
          </div>
          <div class="grid gap-3 sm:grid-cols-3">
            <div>
              <div class="text-xs font-extrabold uppercase tracking-wide text-slate-500">Compétences</div>
              <ul class="mt-2 space-y-1 text-sm text-slate-700">
                ${m.skills.map(x => `<li>• ${escapeHtml(x)}</li>`).join('')}
              </ul>
            </div>
            <div>
              <div class="text-xs font-extrabold uppercase tracking-wide text-slate-500">Outils</div>
              <ul class="mt-2 space-y-1 text-sm text-slate-700">
                ${m.tools.map(x => `<li>• ${escapeHtml(x)}</li>`).join('')}
              </ul>
            </div>
            <div>
              <div class="text-xs font-extrabold uppercase tracking-wide text-slate-500">Indicateurs</div>
              <ul class="mt-2 space-y-1 text-sm text-slate-700">
                ${m.kpis.map(x => `<li>• ${escapeHtml(x)}</li>`).join('')}
              </ul>
            </div>
          </div>
        </div>
      </details>
    `;

    grid.appendChild(card);
  });
}

function renderFAQ(){
  const wrap = $('#faq');
  wrap.innerHTML = '';
  FAQ.forEach((item) => {
    const el = document.createElement('details');
    el.className = 'rounded-2xl border border-slate-200 bg-white p-4';
    el.innerHTML = `
      <summary class="cursor-pointer text-sm font-extrabold text-slate-900">${escapeHtml(item.q)}</summary>
      <p class="mt-2 text-sm text-slate-600">${escapeHtml(item.a)}</p>
    `;
    wrap.appendChild(el);
  });
}

// ---------- Toast ----------
let toastTimer = null;
function toast(node, html, ms){
  node.innerHTML = html;
  node.classList.remove('hidden');
  if (toastTimer) clearTimeout(toastTimer);
  toastTimer = setTimeout(() => node.classList.add('hidden'), ms || 2500);
}

// Basic HTML escaping for dynamic injected strings
function escapeHtml(str){
  return String(str)
    .replaceAll('&','&amp;')
    .replaceAll('<','&lt;')
    .replaceAll('>','&gt;')
    .replaceAll('"','&quot;')
    .replaceAll("'",'&#039;');
}

// ---------- Navigation (mobile + back to top) ----------
const menuBtn = $('#menuBtn');
const mobileNav = $('#mobileNav');
menuBtn?.addEventListener('click', () => {
  const open = !mobileNav.classList.contains('hidden');
  mobileNav.classList.toggle('hidden');
  menuBtn.setAttribute('aria-expanded', String(!open));
});

// Close mobile nav after click
mobileNav?.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
  mobileNav.classList.add('hidden');
  menuBtn.setAttribute('aria-expanded', 'false');
}));

$('#backToTop').addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

// Active nav links
const sections = ['accueil','activite','produits','entreprise','contact','devis']
  .map(id => document.getElementById(id))
  .filter(Boolean);

const links = $$('.navlink');
const linkByHash = new Map(links.map(a => [a.getAttribute('href'), a]));

const io = new IntersectionObserver((entries) => {
  const visible = entries
    .filter(e => e.isIntersecting)
    .sort((a,b) => b.intersectionRatio - a.intersectionRatio)[0];
  if (!visible) return;
  const hash = '#' + visible.target.id;
  links.forEach(a => a.classList.remove('bg-white/10'));
  const current = linkByHash.get(hash);
  if (current) current.classList.add('bg-white/10');
}, { rootMargin: '-35% 0px -55% 0px', threshold: [0.05, 0.1, 0.2] });

sections.forEach(s => io.observe(s));

// ---------- Filters binding ----------
searchInput.addEventListener('input', (e) => {
  state.search = e.target.value;
  renderProducts();
});

resetFiltersBtn.addEventListener('click', () => {
  state.search = '';
  state.category = 'Tous';
  state.usecase = 'Tous';
  searchInput.value = '';
  render();
});

// ---------- Init ----------
function render(){
  renderChips();
  renderProducts();
  renderDevis();
}

document.getElementById('year').textContent = new Date().getFullYear();

loadDevis();
renderTeam();
renderFAQ();
render();

// Improve UX: open modal from URL hash ?product=
const params = new URLSearchParams(location.search);
const openId = params.get('product');
if (openId && PRODUCTS.some(p => p.id === openId)) openModal(openId);

// Document modal functionality
document.querySelectorAll("[data-doc-open]").forEach(button => {
  button.addEventListener("click", () => {
    const url = button.getAttribute("data-doc-open");
    const title = button.getAttribute("data-doc-title") || "Document";
    
    // Update modal content
    docModalTitle.textContent = title;
    docModalMeta.textContent = url.split('.').pop().toUpperCase() + ' • Cliquez "Ouvrir" pour voir en grand';
    docModalOpenNew.href = url;
    
    // Try to load in iframe (works for PDF in most browsers, JPG always works)
    docModalFrame.src = url;
    docModalError.classList.add('hidden');
    
    // Handle iframe load error (mainly for PDF on some browsers)
    docModalFrame.onload = () => {
      // Simple check: if it's a PDF and the iframe is empty, show error
      if (url.endsWith('.pdf') && docModalFrame.contentDocument?.body?.children?.length === 0) {
        docModalError.textContent = "L’aperçu PDF n’est pas pris en charge par votre navigateur. Cliquez sur « Ouvrir » pour le consulter.";
        docModalError.classList.remove('hidden');
      } else {
        docModalError.classList.add('hidden');
      }
    };
    
    docModal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  });
});

docModalClose.addEventListener('click', () => {
  docModal.classList.add('hidden');
  document.body.style.overflow = '';
  docModalFrame.src = ''; // Stop loading
});

docModalBackdrop.addEventListener('click', () => {
  docModal.classList.add('hidden');
  document.body.style.overflow = '';
  docModalFrame.src = '';
});

document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape' && !docModal.classList.contains('hidden')) {
    docModal.classList.add('hidden');
    document.body.style.overflow = '';
    docModalFrame.src = '';
  }
});

// ----------- Carte OpenStreetMap (Leaflet) -------------
function initMap() {
  const lat = 47.2380;
  const lon = 6.0243;

  const map = L.map('map').setView([lat, lon], 15);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
  }).addTo(map);

  const marker = L.marker([lat, lon])
    .addTo(map)
    .bindPopup("<b>Salapex</b><br>1 Rue Mégevand<br>25000 Besançon")
    .openPopup();

  // Animation au clic
  marker.on('click', () => {
    marker._icon.classList.add('jump');
    setTimeout(() => marker._icon.classList.remove('jump'), 600);
  });

  // Bouton Google Maps – en haut à droite
  L.Control.Itineraire = L.Control.extend({
    onAdd: function () {
      const btn = L.DomUtil.create('a', 'leaflet-bar');
      btn.innerHTML = '📍';
      btn.href = `https://www.google.com/maps/dir/?api=1&destination=${lat},${lon}`;
      btn.target = "_blank";
      btn.title = "Ouvrir dans Google Maps";
      btn.style.textDecoration = "none";
      btn.style.fontSize = "24px";
      btn.style.padding = "4px 8px";
      return btn;
    }
  });

  L.control.itineraire = function(opts){ return new L.Control.Itineraire(opts); }
  L.control.itineraire({ position: 'topright' }).addTo(map);

  // Géolocalisation utilisateur
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
      (pos) => {
        const userLat = pos.coords.latitude;
        const userLon = pos.coords.longitude;

        // Marker utilisateur
        L.marker([userLat, userLon], {
          title: "Vous êtes ici"
        })
        .addTo(map)
        .bindPopup("📍 Vous êtes ici")
        .openPopup();

        // Zoom automatique
        map.flyTo([userLat, userLon], 15, { duration: 1.2 });
      },
      () => {
        console.warn("Localisation refusée");
      }
    );
  }
}

document.addEventListener("DOMContentLoaded", initMap);

// ====================
// Theme (clair / sombre)
// ====================
(function() {
  const toggle = document.getElementById('themeToggle');

  // état initial depuis localStorage
  const saved = localStorage.getItem('theme');
  if (saved === 'dark') {
    document.body.classList.add('dark');
    if (toggle) toggle.textContent = '☀️';
  } else {
    if (toggle) toggle.textContent = '🌙';
  }

  // clic
  toggle?.addEventListener('click', () => {
    document.body.classList.toggle('dark');
    const isDark = document.body.classList.contains('dark');
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
    toggle.textContent = isDark ? '☀️' : '🌙';
  });
})();