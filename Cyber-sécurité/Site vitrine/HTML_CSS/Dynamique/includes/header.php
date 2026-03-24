<?php
require_once __DIR__ . '/functions.php';
?>

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
    <link rel="icon" href="/assets/img/logo-salapex.jpg" />
</head>

<body
    class="min-h-screen bg-slate-50 text-slate-900 selection:bg-blue-200/80 selection:text-slate-900 overflow-x-hidden">
    <a href="#contenu"
        class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[999] focus:bg-white focus:text-slate-900 focus:px-4 focus:py-2 focus:rounded-xl focus:shadow">Aller
        au contenu</a>
    <header
        class="relative sticky top-0 z-50 border-b border-white/10 bg-gradient-to-r from-emerald-900 via-emerald-800 to-emerald-700 text-white">
        <div class="relative">
            <div class="mx-auto max-w-6xl px-4">
                <input type="checkbox" id="mobile-menu-toggle" class="peer hidden" />
                <div class="flex items-center justify-between py-4">
                    <div class="flex items-center gap-3">
                        <a href="/" class="flex items-center gap-3" aria-label="Aller à l’accueil Salapex">
                            <span
                                class="grid h-11 w-11 place-items-center overflow-hidden rounded-2xl bg-white/10 ring-1 ring-white/15 backdrop-blur">
                                <img src="/assets/img/logo-salapex.jpg" alt="Logo Salapex"
                                    class="h-full w-full object-cover"
                                    onerror="this.style.display='none'; this.parentElement.insertAdjacentHTML('beforeend', '<span class=\'text-sm font-extrabold\'>S</span>')" />
                            </span>
                            <div class="leading-tight flex-1 min-w-0">
                                <div class="text-lg font-extrabold tracking-tight">Salapex</div>
                                <div class="text-sm text-white/90 italic">La technologie simplifiée</div>
                            </div>
                        </a>

                    </div>

                    <div class="flex items-center gap-2">
                        <label for="mobile-menu-toggle" id="menuBtn"
                            class="md:hidden inline-flex cursor-pointer items-center gap-2 rounded-xl bg-white/10 px-3 py-2 ring-1 ring-white/15 backdrop-blur hover:bg-white/15"
                            aria-label="Ouvrir le menu">
                            <span class="text-sm font-semibold">Menu</span>
                            <svg id="menuIcon" class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </label>

                        <nav class="hidden md:block" aria-label="Navigation principale">
                            <ul class="flex flex-wrap items-center gap-2">
                                <li><a class="navlink rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10"
                                        href="/#accueil">Accueil</a></li>
                                <li><a class="navlink rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10"
                                        href="/#activite">Activité</a></li>
                                <li><a class="navlink rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10"
                                        href="/#produits">Produits</a></li>
                                <li><a class="navlink rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10"
                                        href="/#entreprise">Entreprise</a></li>
                                <li><a class="navlink rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10"
                                        href="/#contact">Contact</a></li>
                                <li><a class="rounded-2xl btn-gold px-3 py-2 text-sm font-extrabold shadow"
                                        href="/cart.php">Panier
                                        (<?php echo isset($_SESSION['cart']) ? array_sum($_SESSION['cart']) : 0; ?>)</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <nav id="mobileNav" class="md:hidden hidden peer-checked:block pb-4" aria-label="Navigation mobile">
                    <div class="grid gap-2 rounded-2xl bg-white/10 p-3 ring-1 ring-white/15 backdrop-blur">
                        <a class="rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10"
                            href="/#accueil">Accueil</a>
                        <a class="rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10"
                            href="/#activite">Activité</a>
                        <a class="rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10"
                            href="/#produits">Produits</a>
                        <a class="rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10"
                            href="/#entreprise">Entreprise</a>
                        <a class="rounded-xl px-3 py-2 text-sm font-semibold hover:bg-white/10"
                            href="/#contact">Contact</a>
                        <a class="rounded-xl bg-white px-3 py-2 text-sm font-extrabold text-blue-700 shadow hover:bg-slate-50"
                            href="/cart.php">Panier</a>
                    </div>
                </nav>
            </div>
    </header>