<?php
require_once __DIR__ . '/../includes/functions.php';
$pageTitle = 'Latihan 1 | Menjalankan PHP'; $activePage = 'l1';
require __DIR__ . '/../includes/header.php';
?>
<div class="page-heading"><div class="eyebrow">Latihan 1</div><h1>Menjalankan PHP</h1><p>Menguji bahwa kode PHP diproses oleh server dan hasilnya ditampilkan pada browser.</p></div>
<section class="panel">
    <h2>Hasil Program</h2>
    <div class="result"><h3>Belajar PHP</h3><p>PHP berhasil dijalankan.</p><p>Waktu server: <strong><?= date('d-m-Y H:i:s') ?></strong></p></div>
    <p class="muted">Output ini dihasilkan oleh fungsi echo dan date(). Browser menerima HTML hasil pemrosesan, bukan kode PHP mentah.</p>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
