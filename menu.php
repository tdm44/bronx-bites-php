<?php
$pageTitle = 'Our Menu';
$currentPage = 'menu';
// Store menu data in an array so each card uses the same markup.
$menuItems = [
    ['name' => 'Bronx Classic Burger', 'description' => 'Beef patty, cheddar, fresh vegetables, house sauce, and fries.', 'price' => 12.50, 'category' => 'House favorite'],
    ['name' => 'Garden Bowl', 'description' => 'Seasonal vegetables, brown rice, chickpeas, and lemon dressing.', 'price' => 10.00, 'category' => 'Vegetarian'],
    ['name' => 'Crispy Chicken Sandwich', 'description' => 'Crispy chicken, crunchy slaw, and pickles on a toasted bun.', 'price' => 11.50, 'category' => 'Comfort classic'],
    ['name' => 'Loaded Fries', 'description' => 'Golden fries topped with melted cheddar and scallions.', 'price' => 6.00, 'category' => 'On the side'],
    ['name' => 'Chocolate Brownie', 'description' => 'A rich chocolate brownie served warm.', 'price' => 4.50, 'category' => 'Sweet finish'],
    ['name' => 'House Lemonade', 'description' => 'Fresh lemon juice with just the right amount of sweetness.', 'price' => 3.00, 'category' => 'Refreshment'],
];
include __DIR__ . '/header.php';
?>
<main id="main" class="container menu-main">
    <p class="eyebrow">FRESHLY PREPARED, HAPPILY SHARED</p>
    <h1>Find your next favorite.</h1>
    <p class="intro">Comfort food for your lunch break, dinner plans, and everything in between.</p>
    <div class="menu-grid">
        <?php foreach ($menuItems as $item): ?>
            <article class="menu-card">
                <p class="eyebrow"><?= htmlspecialchars($item['category'], ENT_QUOTES, 'UTF-8') ?></p>
                <h2><?= htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8') ?></h2>
                <p><?= htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8') ?></p>
                <p class="price">$<?= number_format($item['price'], 2) ?></p>
            </article>
        <?php endforeach; ?>
    </div>
    <p class="menu-note">Please tell our staff about any food allergies before ordering. Prices exclude tax.</p>
</main>
<?php include __DIR__ . '/footer.php'; ?>
