<?php
require_once __DIR__ . '/includes/functions.php';

$operationPanier = $_POST['action'] ?? $_GET['action'] ?? null;

if ($operationPanier === 'add') {
  panier_ajouter($pdo, (int) $_POST['id'], (int) $_POST['qty']);

  $redirect = '/panier.php';
  if (!empty($_POST['return_to']) && str_starts_with($_POST['return_to'], '/')) {
    $redirect = $_POST['return_to'];
  }

  header('Location: ' . $redirect);
  exit;
}
if ($operationPanier === 'update') {
  foreach ($_POST['qty'] as $id => $qty) {
    panier_modifier($pdo, (int) $id, (int) $qty);
  }
  header('Location: /panier.php');
  exit;
}
if ($operationPanier === 'remove') {
  panier_supprimer((int) $_GET['id']);
  header('Location: /panier.php');
  exit;
}
if ($operationPanier === 'clear') {
  panier_effacer();
  header('Location: /panier.php');
  exit;
}

if ($operationPanier === 'checkout') {
  $nom = trim($_POST['customer_name'] ?? '');
  $email = trim($_POST['customer_email'] ?? '');

  $articles = panier_articles($pdo);
  if (empty($articles)) {
    header('Location: /panier.php');
    exit;
  }

  if ($nom === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['flash'] = [
      'type' => 'error',
      'message' => 'Merci de fournir un nom et une adresse e-mail valides pour valider la commande.',
    ];
    header('Location: /panier.php');
    exit;
  }

  $totalPanier = panier_total($pdo);
  $idCommande = creer_commande($pdo, $nom, $email, $articles, $totalPanier);

  panier_effacer();
  header('Location: /confirmation-commande.php?id=' . $idCommande);
  exit;
}

$articles = panier_articles($pdo);
$totalPanier = panier_total($pdo);

include __DIR__ . '/includes/header.php';
?>

<main class="mx-auto max-w-6xl px-4 pb-16">

  <section class="mt-12 mb-10">

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

    <?php if (!$articles): ?>

      <p class="mt-6 text-slate-600">Votre panier est vide.</p>
      <a href="/index.php#produits"
        class="mt-4 mb-16 inline-block rounded-2xl bg-blue-700 px-5 py-3 text-sm font-extrabold text-white hover:bg-blue-800">
        Voir les produits
      </a>

    <?php else: ?>

      <form method="post" action="/panier.php">
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
              <?php foreach ($articles as $article): ?>
                <tr class="border-t border-slate-200">
                  <td class="p-4">
                    <div class="flex items-center gap-3">
                      <img src="/<?php echo ltrim(htmlspecialchars($article['image']), '/'); ?>"
                        class="h-12 w-12 rounded-xl object-cover">
                      <div>
                        <div class="font-bold text-slate-900"><?php echo htmlspecialchars($article['nom']); ?></div>
                      </div>
                    </div>
                  </td>

                  <td class="p-4 font-semibold"><?php echo format_prix($article['prix']); ?></td>

                  <td class="p-4">
                    <input type="number" name="qty[<?php echo (int) $article['id']; ?>]" min="0"
                      value="<?php echo (int) $article['qty']; ?>" max="<?php echo (int) $article['stock']; ?>"
                      oninput="this.form.submit()" class="w-20 rounded-xl border border-slate-300 px-3 py-2">
                  </td>

                  <td class="p-4 font-bold"><?php echo format_prix($article['total']); ?></td>

                  <td class="p-4 text-right">
                    <a href="/panier.php?action=remove&id=<?php echo (int) $article['id']; ?>"
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

          <a href="/panier.php?action=clear" class="text-slate-500 hover:text-slate-700 text-sm">
            Vider le panier
          </a>

          <div class="flex items-center gap-4">
            <div class="text-xl font-extrabold">
              Total : <?php echo format_prix($totalPanier); ?>
            </div>
          </div>

        </div>

      </form>

      <div class="mt-8 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <h2 class="text-xl font-extrabold">Valider la commande</h2>
        <p class="mt-2 text-sm text-slate-600">Renseignez vos coordonnées pour enregistrer la commande en base.</p>

        <form class="mt-5 grid gap-4 md:grid-cols-2" method="post" action="/panier.php">
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
