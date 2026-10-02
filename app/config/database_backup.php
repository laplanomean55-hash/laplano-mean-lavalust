<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($title ?? APP_NAME, ENT_QUOTES, 'UTF-8') ?> | <?= APP_NAME ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= app_url('/assets/css/app.css') ?>">
</head>
<body>
<header class="topbar">
    <div class="topbar-left">
        <a class="brand" href="<?= app_url('/products') ?>">
            <span class="brand-mark">L</span><?= APP_NAME ?>
        </a>
        <?php if (Auth::check()): ?>
            <nav class="nav-links">
                <a href="<?= app_url('/products') ?>" class="nav-link">Products</a>
                <!-- Maaari kang magdagdag ng iba pang navigation links dito -->
            </nav>
        <?php endif; ?>
    </div>

    <?php if (Auth::check()): ?>
        <div class="user-menu">
            <span class="user-email"><?= htmlspecialchars(Auth::user()['email'], ENT_QUOTES, 'UTF-8') ?></span>
            <form method="post" action="<?= app_url('/logout') ?>" style="margin: 0;">
                <button class="button button-ghost" type="submit">Sign out</button>
            </form>
        </div>
    <?php endif; ?>
</header>

<main class="page-shell">
<?php if ($message = flash('success')): ?>
    <div class="notice notice-success"><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></div>
<?php endif; ?>
<?php if ($message = flash('error')): ?>
    <div class="notice notice-error"><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></div>
<?php endif; ?>