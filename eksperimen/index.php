<?php
require_once __DIR__ . '/../includes/functions.php';
$pageTitle = 'Eksperimen Mandiri | Lab 7'; $activePage = 'eks';
$nilai = [80, 85, 90];
$rata = hitungRataRata($nilai[0], $nilai[1], $nilai[2]);
$namaCari = trim((string)($_GET['nama'] ?? ''));
$namaTersedia = ['Alya','Bima','Citra','Doni','Eko','Fani','Gita'];
$namaDitemukan = [];
if ($namaCari !== '') foreach ($namaTersedia as $nama) if (stripos($nama, $namaCari) !== false) $namaDitemukan[] = $nama;
$nimContoh = '312510395';
require __DIR__ . '/../includes/header.php';
?>
<div class="page-heading"><div class="eyebrow">Eksperimen Mandiri</div><h1>Pengembangan Praktikum</h1><p>Lima eksperimen diterapkan dan didokumentasikan pada proyek ini.</p></div>
<div class="two-col">
<section class="panel"><h2>1. Rata-rata Tiga Nilai</h2><p>Nilai: <?= implode(', ', $nilai) ?></p><div class="stat"><small>Rata-rata</small><strong><?= number_format($rata,2,',','.') ?></strong></div></section>
<section class="panel"><h2>3. Format Harga Rupiah</h2><p>Function formatRupiah() mengubah angka menjadi format mata uang.</p><div class="stat"><small>Contoh harga</small><strong><?= formatRupiah(275000) ?></strong></div></section>
<section class="panel"><h2>4. Validasi NIM</h2><p>Ketentuan yang digunakan adalah NIM tepat 9 digit numerik.</p><p><strong><?= e($nimContoh) ?></strong> <span class="pill"><?= nimValid($nimContoh) ? 'Valid' : 'Tidak valid' ?></span></p></section>
<section class="panel"><h2>5. Tombol Reset</h2><p>Reset mengembalikan nilai awal form tanpa mengirim request POST.</p><form><div class="field"><label for="contoh-reset">Contoh input</label><input id="contoh-reset" value="Teks dapat diubah"><span class="help">Ubah teks, lalu tekan Reset.</span></div><div class="actions"><button class="btn secondary" type="reset">Reset</button></div></form></section>
</div>
<section class="panel"><h2>2. Pencarian Nama dengan GET</h2><form method="GET" class="form-grid"><div class="field"><label for="nama">Nama yang dicari</label><input id="nama" name="nama" value="<?= e($namaCari) ?>" placeholder="Contoh: Bima"></div><div class="field" style="justify-content:end"><div class="actions"><button class="btn" type="submit">Cari Nama</button><a class="btn secondary" href="/Lab7Web_PHP/eksperimen/">Bersihkan</a></div></div></form>
<?php if ($namaCari !== ''): ?><div class="result"><h3>Hasil pencarian</h3><?php if ($namaDitemukan): ?><?= e(implode(', ', $namaDitemukan)) ?><?php else: ?>Nama tidak ditemukan.<?php endif; ?></div><?php endif; ?></section>
<section class="panel"><h2>Ringkasan Lima Eksperimen</h2><ol class="list-clean"><li>Menghitung rata-rata dari tiga komponen nilai.</li><li>Mengubah form GET untuk mencari nama dari array.</li><li>Membuat function untuk format harga Rupiah.</li><li>Memvalidasi NIM agar hanya berisi 9 digit angka.</li><li>Menambahkan tombol reset dan menjelaskan fungsinya.</li></ol></section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
