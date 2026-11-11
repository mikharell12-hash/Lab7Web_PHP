<?php
require_once __DIR__ . '/../includes/functions.php';
$pageTitle = 'Latihan 5 | Form GET'; $activePage = 'l5';
$daftarNama = ['Alya','Bima','Citra','Doni','Eko','Fani','Gita'];
$kata = trim((string)($_GET['kata'] ?? ''));
$hasilCari = [];
if ($kata !== '') { foreach ($daftarNama as $nama) if (stripos($nama, $kata) !== false) $hasilCari[] = $nama; }
require __DIR__ . '/../includes/header.php';
?>
<div class="page-heading"><div class="eyebrow">Latihan 5</div><h1>Memproses Form dengan GET</h1><p>Form pencarian mengirim kata kunci melalui parameter URL.</p></div>
<section class="panel"><h2>Cari Nama Mahasiswa</h2>
<form method="GET" action="" class="form-grid"><div class="field"><label for="kata">Kata kunci</label><input id="kata" name="kata" type="text" value="<?= e($kata) ?>" placeholder="Contoh: Alya"></div><div class="field" style="justify-content:end"><div class="actions"><button class="btn" type="submit">Cari</button><a class="btn secondary" href="/Lab7Web_PHP/latihan5/">Bersihkan</a></div></div></form>
<?php if ($kata !== ''): ?><div class="result"><h3>Hasil Pencarian</h3><?php if ($hasilCari): ?><p>Kata kunci <strong><?= e($kata) ?></strong> ditemukan pada:</p><ul class="list-clean"><?php foreach($hasilCari as $nama): ?><li><?= e($nama) ?></li><?php endforeach; ?></ul><?php else: ?><p>Tidak ada nama yang cocok dengan kata kunci <strong><?= e($kata) ?></strong>.</p><?php endif; ?><p class="help">Nilai GET terbaca dari URL: <span class="code-note">?kata=<?= e(rawurlencode($kata)) ?></span></p></div><?php else: ?><p class="muted">Data tersedia: <?= e(implode(', ', $daftarNama)) ?>.</p><?php endif; ?>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
