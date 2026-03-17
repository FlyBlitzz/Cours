<?php
require_once __DIR__ . '/includes/functions.php';

$action = $_POST['action'] ?? $_GET['action'] ?? null;

if ($action === 'add') {
  cart_add($pdo, (int) $_POST['id'], (int) $_POST['qty']);

  $redirect = '/cart.php';
  if (!empty($_POST['return_to']) && str_starts_with($_POST['return_to'], '/')) {
    $redirect = $_POST['return_to'];
  }

  header('Location: ' . $redirect);
  exit;
}
if ($action === 'update') {
  foreach ($_POST['qty'] as $id => $qty) {
    cart_update($pdo, (int) $id, (int) $qty);
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

if ($action === 'checkout') {
  $name = trim($_POST['customer_name'] ?? '');
  $email = trim($_POST['customer_email'] ?? '');

  $items = cart_items($pdo);
  if (empty($items)) {
    header('Location: /cart.php');
    exit;
  }

  if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['flash'] = [
      'type' => 'error',
      'message' => 'Merci de fournir un nom et une adresse e-mail valides pour valider la commande.',
    ];
    header('Location: /cart.php');
    exit;
  }

  $total = cart_total($pdo);
  $orderId = create_order($pdo, $name, $email, $items, $total);

  cart_clear();
  header('Location: /order-confirmation.php?id=' . $orderId);
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

    <?php if (isset($_SESSION['flash'])): ?>
      <div
        class="mt-6 rounded-2xl p-4 text-sm shadow-sm <?php echo $_SESSION['flash']['type'] === 'error' ? 'bg-rose-50 text-rose-700 ring-rose-100' : 'bg-emerald-50 text-emerald-700 ring-emerald-100'; ?> ring-1">
        <?php echo htmlspecialchars($_SESSION['flash']['message']); ?>
      </div>
      <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>

    <?php if (!$items): ?>

      <p class="mt-6 text-slate-600">Votre panier est vide.</p>
      <a href="/index.php#produits"
        class="mt-4 mb-16 inline-block rounded-2xl bg-blue-700 px-5 py-3 text-sm font-extrabold text-white hover:bg-blue-800">
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
                      <img src="/<?php echo ltrim(htmlspecialchars($it['image']), '/'); ?>"
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

          </div>

        </div>

      </form>

      <div class="mt-8 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <h2 class="text-xl font-extrabold">Valider la commande</h2>
        <p class="mt-2 text-sm text-slate-600">Renseignez vos coordonnées pour enregistrer la commande en base.</p>

        <form class="mt-5 grid gap-4 md:grid-cols-2" method="post" action="/cart.php">
          <input type="hidden" name="action" value="checkout">

          <label class="block">
            <span class="text-sm font-semibold text-slate-700">Nom</span>
            <input type="text" name="customer_name" required
              class="mt-1 w-full rounded-xl border border-slate-300 px-3 py-2 focus:border-blue-500 focus:ring-blue-500" />
          </label>

          <label class="block">
            <span class="text-sm font-semibold text-slate-700">E-mail</span>
            <input type="email" name="customer_email" required
              class="mt-1 w-full rounded-xl border border-slate-300 px-3 py-2 focus:border-blue-500 focus:ring-blue-500" />
          </label>

          <div class="md:col-span-2 flex flex-col gap-3">
            <div class="text-sm text-slate-600">Montant total de la commande : <span
                class="font-bold text-slate-900"><?php echo format_price($total); ?></span></div>
            <button type="submit"
              class="w-full rounded-2xl bg-emerald-700 px-4 py-3 text-sm font-extrabold text-white hover:bg-emerald-800">
              Valider la commande
            </button>
          </div>
        </form>
      </div>

    <?php endif; ?>

  </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>