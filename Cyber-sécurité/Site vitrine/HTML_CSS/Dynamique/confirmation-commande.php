<?php
require_once __DIR__ . '/includes/functions.php';

$idCommande = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$order = $idCommande ? trouver_commande($pdo, $idCommande) : null;
$articles = $order ? trouver_items_commande($pdo, $idCommande) : [];

include __DIR__ . '/includes/header.php';
?>

<main class="mx-auto max-w-6xl px-4 pb-16">
    <section class="mt-12 mb-10">
        <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 underline-gold">Confirmation de commande</h1>

        <?php if (!$order): ?>
            <p class="mt-6 text-slate-600">Commande introuvable. Veuillez retourner au panier.</p>
            <a href="/panier.php"
                class="mt-4 inline-block rounded-2xl bg-blue-700 px-5 py-3 text-sm font-extrabold text-white hover:bg-blue-800">Voir
                le panier</a>
        <?php else: ?>
            <div class="mt-6 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                <div class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
                    <div>
                        <div class="text-sm font-semibold text-slate-500">Numéro de commande</div>
                        <div class="text-2xl font-extrabold text-slate-900">#<?php echo htmlspecialchars($order['id']); ?>
                        </div>
                    </div>

                    <div>
                        <div class="text-sm font-semibold text-slate-500">Date</div>
                        <div class="text-sm font-bold text-slate-900">
                            <?php echo htmlspecialchars((new DateTime($order['created_at']))->format('d/m/Y \à H:i')); ?>
                        </div>
                    </div>

                    <div>
                        <div class="text-sm font-semibold text-slate-500">Client</div>
                        <div class="text-sm font-bold text-slate-900">
                            <?php echo htmlspecialchars($order['customer_name']); ?>
                        </div>
                        <div class="text-sm text-slate-600"><?php echo htmlspecialchars($order['customer_email']); ?></div>
                    </div>
                </div>

                <div class="mt-6 overflow-hidden rounded-2xl border border-slate-200">
                    <table class="w-full text-sm">
                        <thead class="bg-slate-50 text-slate-700 text-xs uppercase tracking-wide">
                            <tr>
                                <th class="p-4 text-left">Produit</th>
                                <th class="p-4 text-left">Prix unitaire</th>
                                <th class="p-4 text-left">Quantité</th>
                                <th class="p-4 text-left">Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($articles as $article): ?>
                                <tr class="border-t border-slate-200">
                                    <td class="p-4 font-bold"><?php echo htmlspecialchars($article['product_name']); ?></td>
                                    <td class="p-4"><?php echo format_prix($article['unit_price']); ?></td>
                                    <td class="p-4"><?php echo (int) $article['quantity']; ?></td>
                                    <td class="p-4 font-bold"><?php echo format_prix($article['total']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="mt-6 flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
                    <div class="text-sm text-slate-600">Nous avons bien enregistré votre commande. Vous recevrez un e-mail
                        de confirmation sous peu.</div>
                    <div class="text-2xl font-extrabold text-slate-900">Total : <?php echo format_prix($order['total']); ?>
                    </div>
                </div>

            </div>
        <?php endif; ?>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>