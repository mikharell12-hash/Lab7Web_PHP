<?php
$pageTitle = $pageTitle ?? 'Praktikum PHP';
$activePage = $activePage ?? '';
$navItems = [
    ['label' => 'Beranda', 'url' => '/Lab7Web_PHP/', 'key' => 'home'],
    ['label' => 'Latihan 1', 'url' => '/Lab7Web_PHP/latihan1/', 'key' => 'l1'],
    ['label' => 'Latihan 2', 'url' => '/Lab7Web_PHP/latihan2/', 'key' => 'l2'],
    ['label' => 'Latihan 3', 'url' => '/Lab7Web_PHP/latihan3/', 'key' => 'l3'],
    ['label' => 'Latihan 4', 'url' => '/Lab7Web_PHP/latihan4/', 'key' => 'l4'],
    ['label' => 'Latihan 5', 'url' => '/Lab7Web_PHP/latihan5/', 'key' => 'l5'],
    ['label' => 'Latihan 6', 'url' => '/Lab7Web_PHP/latihan6/', 'key' => 'l6'],
    ['label' => 'Latihan 7', 'url' => '/Lab7Web_PHP/latihan7/', 'key' => 'l7'],
    ['label' => 'Mini Project', 'url' => '/Lab7Web_PHP/mini_project/', 'key' => 'mini'],
    ['label' => 'Eksperimen', 'url' => '/Lab7Web_PHP/eksperimen/', 'key' => 'eks'],
];
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="/Lab7Web_PHP/assets/style.css">
</head>
<body>
<header class="site-header">
    <div class="header-inner">
        <a class="brand" href="/Lab7Web_PHP/"><span class="brand-mark">PHP</span><span><strong>Lab 7 Web</strong><small>Server-side programming</small></span></a>
        <span class="header-tag">Pemrograman Web</span>
    </div>
</header>
<nav class="nav-wrap" aria-label="Navigasi praktikum">
    <div class="nav-inner">
        <?php foreach ($navItems as $item): ?>
            <a class="nav-link <?= $activePage === $item['key'] ? 'active' : '' ?>" href="<?= $item['url'] ?>"><?= $item['label'] ?></a>
        <?php endforeach; ?>
    </div>
</nav>
<main class="container">
