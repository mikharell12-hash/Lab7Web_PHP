<?php
require_once __DIR__ . '/../includes/functions.php';
$pageTitle = 'Latihan 4 | Function'; $activePage = 'l4';
function hitungDiskon(float $harga, float $persen): float { $potongan = $harga * ($persen / 100); return $harga - $potongan; }
function hitungLuasPersegiPanjang(float $panjang, float $lebar): float { return $panjang * $lebar; }
function statusKelulusan(float $nilai): string { return $nilai >= 60 ? 'Lulus' : 'Tidak lulus'; }
$hargaAwal = 150000; $diskon = 10; $hargaAkhir = hitungDiskon($hargaAwal, $diskon);
$luas = hitungLuasPersegiPanjang(8,4); $nilaiUji = 78;
require __DIR__ . '/../includes/header.php';
?>
<div class="page-heading"><div class="eyebrow">Latihan 4</div><h1>Membuat Function</h1><p>Function memisahkan proses tertentu agar dapat digunakan kembali.</p></div>
<div class="two-col">
<section class="panel"><h2>Function Hitung Diskon</h2><table class="data-table"><tr><th>Harga awal</th><td><?= formatRupiah($hargaAwal) ?></td></tr><tr><th>Diskon</th><td><?= $diskon ?>%</td></tr><tr><th>Harga akhir</th><td><strong><?= formatRupiah($hargaAkhir) ?></strong></td></tr></table></section>
<section class="panel"><h2>Function Tambahan</h2><table class="data-table"><tr><th>Luas (8 x 4)</th><td><?= number_format($luas,0,',','.') ?> satuan²</td></tr><tr><th>Nilai uji</th><td><?= $nilaiUji ?></td></tr><tr><th>Kelulusan</th><td><span class="pill"><?= statusKelulusan($nilaiUji) ?></span></td></tr></table></section>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
