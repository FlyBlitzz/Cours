<?php
require_once __DIR__ . '/includes/functions.php';

$orderId = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$order = $orderId ? find_order($pdo, $orderId) : null;
$items = $order ? find_order_items($pdo, $orderId) : [];

include __DIR__ . '/includes/header.php';
?>

<main class="mx-auto max-w-6xl px-4">
    <section class="mt-12">
        <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 underline-gold">Confirmation de commande</h1>

        <?php if (!$order): ?>
            <p class="mt-6 text-slate-600">Commande introuvable. Veuillez retourner au panier.</p>
            <a href="/cart.php"
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
                            <?php echo htmlspecialchars($order['customer_name']); ?></div>
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
                            <?php foreach ($items as $it): ?>
                                <tr class="border-t border-slate-200">
                                    <td class="p-4 font-bold"><?php echo htmlspecialchars($it['product_name']); ?></td>
                                    <td class="p-4"><?php echo format_price($it['unit_price']); ?></td>
                                    <td class="p-4"><?php echo (int) $it['quantity']; ?></td>
                                    <td class="p-4 font-bold"><?php echo format_price($it['total']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="mt-6 flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
                    <div class="text-sm text-slate-600">Nous avons bien enregistré votre commande. Vous recevrez un e-mail
                        de confirmation sous peu.</div>
                    <div class="text-2xl font-extrabold text-slate-900">Total : <?php echo format_price($order['total']); ?>
                    </div>
                </div>

            </div>
        <?php endif; ?>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>