<?php
require_once __DIR__ . '/includes/functions.php';

$action = $_POST['action'] ?? $_GET['action'] ?? null;

if ($action === 'add') {
  cart_add((int) $_POST['id'], (int) $_POST['qty']);
  header('Location: /cart.php');
  exit;
}
if ($action === 'update') {
  foreach ($_POST['qty'] as $id => $qty) {
    cart_update((int) $id, (int) $qty);
  }
  header('Location: /cart.php');
  exit;
}
if ($action === 'remove') {
  cart_remove((int) $_GET['id']);
  header('Location: /cart.php');
  exit;
}
if ($action === 'clear') {
  cart_clear();
  header('Location: /cart.php');
  exit;
}

$items = cart_items($pdo);
$total = cart_total($pdo);

include __DIR__ . '/includes/header.php';
?>

<main class="mx-auto max-w-6xl px-4">

  <section class="mt-12">

    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 underline-gold">
      Votre panier
    </h1>

    <?php if (!$items): ?>

      <p class="mt-6 text-slate-600">Votre panier est vide.</p>
      <a href="/index.php#produits"
        class="mt-4 inline-block rounded-2xl bg-blue-700 px-5 py-3 text-sm font-extrabold text-white hover:bg-blue-800">
        Voir les produits
      </a>

    <?php else: ?>

      <form method="post" action="/cart.php">
        <input type="hidden" name="action" value="update">

        <div class="mt-6 overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

          <table class="w-full text-sm">
            <thead class="bg-slate-50 text-slate-700 text-xs uppercase tracking-wide">
              <tr>
                <th class="p-4 text-left">Produit</th>
                <th class="p-4 text-left">Prix</th>
                <th class="p-4 text-left">Quantité</th>
                <th class="p-4 text-left">Total</th>
                <th class="p-4"></th>
              </tr>
            </thead>

            <tbody>
              <?php foreach ($items as $it): ?>
                <tr class="border-t border-slate-200">
                  <td class="p-4">
                    <div class="flex items-center gap-3">
                      <img src="/assets/img/produits/<?php echo htmlspecialchars($it['image']); ?>"
                        class="h-12 w-12 rounded-xl object-cover">
                      <div>
                        <div class="font-bold text-slate-900"><?php echo htmlspecialchars($it['nom']); ?></div>
                      </div>
                    </div>
                  </td>

                  <td class="p-4 font-semibold"><?php echo format_price($it['prix']); ?></td>

                  <td class="p-4">
                    <input type="number" name="qty[<?php echo (int) $it['id']; ?>]" min="0"
                      value="<?php echo (int) $it['qty']; ?>" max="<?php echo (int) $it['stock']; ?>"
                      class="w-20 rounded-xl border border-slate-300 px-3 py-2">
                  </td>

                  <td class="p-4 font-bold"><?php echo format_price($it['total']); ?></td>

                  <td class="p-4 text-right">
                    <a href="/cart.php?action=remove&id=<?php echo (int) $it['id']; ?>"
                      class="text-red-600 hover:text-red-800 font-bold">
                      Retirer
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

        </div>

        <div class="mt-6 flex justify-between items-center">

          <a href="/cart.php?action=clear" class="text-slate-500 hover:text-slate-700 text-sm">
            Vider le panier
          </a>

          <div class="flex items-center gap-4">
            <div class="text-xl font-extrabold">
              Total : <?php echo format_price($total); ?>
            </div>

            <button type="submit"
              class="rounded-2xl bg-blue-700 px-4 py-2 text-sm font-extrabold text-white hover:bg-blue-800">
              Mettre à jour
            </button>

            <a href="mailto:contact@salapex.fr?subject=Demande%20de%20devis%20—%20Panier"
              class="rounded-2xl bg-gold px-4 py-2 text-sm font-extrabold text-white hover:bg-gold-600">
              Demander un devis
            </a>

          </div>

        </div>

      </form>

    <?php endif; ?>

  </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>