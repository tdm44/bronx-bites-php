<?php
// Shared header: each content page sets its own title and navigation state.
$pageTitle = $pageTitle ?? 'Welcome';
$currentPage = $currentPage ?? 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?> | Bronx Bites</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="index.php">Bronx Bites<span>NEIGHBORHOOD KITCHEN</span></a>
        <nav aria-label="Main navigation">
            <a href="index.php" <?= $currentPage === 'home' ? 'aria-current="page"' : '' ?>>Home</a>
            <a href="menu.php" <?= $currentPage === 'menu' ? 'aria-current="page"' : '' ?>>Our menu</a>
        </nav>
    </div>
</header>
