<?php
require_once __DIR__ . '/../includes/functions.php';
$pageTitle = 'Latihan 7 | Pengolahan Data'; $activePage = 'l7';
$barang = ''; $hargaInput = ''; $jumlahInput = ''; $error = []; $subtotal = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $barang = trim((string)($_POST['barang'] ?? ''));
    $hargaInput = trim((string)($_POST['harga'] ?? ''));
    $jumlahInput = trim((string)($_POST['jumlah'] ?? ''));
    if ($barang === '') $error[] = 'Nama barang wajib diisi.';
    if ($hargaInput === '' || !is_numeric($hargaInput) || (float)$hargaInput < 0) $error[] = 'Harga harus berupa angka nol atau lebih.';
    if (!ctype_digit($jumlahInput) || (int)$jumlahInput < 1) $error[] = 'Jumlah harus berupa bilangan bulat minimal 1.';
    if (!$error) $subtotal = (float)$hargaInput * (int)$jumlahInput;
}
require __DIR__ . '/../includes/header.php';
?>
<div class="page-heading"><div class="eyebrow">Latihan 7</div><h1>Pengolahan Data Sederhana</h1><p>Menghitung subtotal transaksi dari nama barang, harga satuan, dan jumlah barang.</p></div>
<section class="panel"><h2>Form Transaksi</h2>
<form method="POST" class="form-grid"><div class="field full"><label for="barang">Nama barang</label><input id="barang" name="barang" value="<?= e($barang) ?>" required></div><div class="field"><label for="harga">Harga (Rp)</label><input id="harga" name="harga" type="number" min="0" step="0.01" value="<?= e($hargaInput) ?>" required></div><div class="field"><label for="jumlah">Jumlah</label><input id="jumlah" name="jumlah" type="number" min="1" step="1" value="<?= e($jumlahInput) ?>" required></div><div class="field full"><div class="actions"><button class="btn teal" type="submit">Hitung Subtotal</button><button class="btn secondary" type="reset">Reset</button></div></div></form>
<?php if ($error): ?><div class="error"><h3>Periksa kembali input</h3><ul><?php foreach($error as $msg): ?><li><?= e($msg) ?></li><?php endforeach; ?></ul></div><?php endif; ?>
<?php if ($subtotal !== null): ?><div class="result"><h3>Ringkasan Transaksi</h3><table class="data-table"><tr><th>Barang</th><td><?= e($barang) ?></td></tr><tr><th>Harga satuan</th><td><?= formatRupiah((float)$hargaInput) ?></td></tr><tr><th>Jumlah</th><td><?= (int)$jumlahInput ?></td></tr><tr><th>Subtotal</th><td><strong><?= formatRupiah($subtotal) ?></strong></td></tr></table></div><?php endif; ?>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
