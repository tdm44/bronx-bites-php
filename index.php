<?php
// Set page-specific values before loading the common header.
$pageTitle = 'Home';
$currentPage = 'home';
include __DIR__ . '/header.php';
?>
<main id="main" class="container">
    <section class="hero">
        <div>
            <p class="eyebrow">FRESH FLAVORS • LOCAL FAVORITE</p>
            <h1>A little comfort.<br>A lot of flavor.</h1>
            <p class="intro">Take a break, pull up a chair, and enjoy freshly prepared comfort food with a Bronx twist.</p>
            <a class="button" href="menu.php">Explore our menu &rarr;</a>
        </div>
        <aside class="special" aria-labelledby="special-title">
            <p class="eyebrow">THE HOUSE FAVORITE</p>
            <div class="food-icon" aria-hidden="true">🍔</div>
            <h2 id="special-title">Bronx Classic Burger</h2>
            <p>Grilled beef, cheddar, lettuce, tomato, and our signature house sauce.</p>
            <p class="price">$12.50 <span>served with fries</span></p>
        </aside>
    </section>
    <section class="features" aria-label="Why visit us">
        <article><span class="number">01</span><h2>Made fresh</h2><p>Simple ingredients, prepared with care and cooked to order.</p></article>
        <article><span class="number">02</span><h2>Something for everyone</h2><p>From hearty burgers to colorful vegetarian bowls.</p></article>
        <article><span class="number">03</span><h2>Come hungry</h2><p>Open daily, 11 a.m.–9 p.m. Bring a friend and stay a while.</p></article>
    </section>
</main>
<?php include __DIR__ . '/footer.php'; ?>
