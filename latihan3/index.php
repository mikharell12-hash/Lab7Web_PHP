<?php
require_once __DIR__ . '/../includes/functions.php';
$pageTitle = 'Latihan 3 | Array dan Foreach'; $activePage = 'l3';
$mahasiswa = ['Alya','Bima','Citra','Doni','Eko','Fani','Gita'];
require __DIR__ . '/../includes/header.php';
?>
<div class="page-heading"><div class="eyebrow">Latihan 3</div><h1>Perulangan dan Array</h1><p>Array berisi tujuh nama mahasiswa dan ditampilkan menggunakan foreach.</p></div>
<section class="panel"><h2>Daftar Mahasiswa</h2><ol class="list-clean"><?php foreach($mahasiswa as $nama): ?><li><?= e($nama) ?></li><?php endforeach; ?></ol><div class="notice">Jumlah data yang ditampilkan: <strong><?= count($mahasiswa) ?> mahasiswa</strong>.</div></section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
