<li>
    <a class="rounded-2xl btn-gold px-3 py-2 text-sm font-extrabold shadow" href="/cart.php">
        Panier (<?php echo isset($_SESSION['cart']) ? array_sum($_SESSION['cart']) : 0; ?>)
    </a>
</li>