<?php
require_once __DIR__ . '/../includes/functions.php';
$pageTitle = 'Latihan 6 | Form POST'; $activePage = 'l6';
$nama = ''; $prodi = ''; $error = []; $terkirim = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim((string)($_POST['nama'] ?? ''));
    $prodi = trim((string)($_POST['prodi'] ?? ''));
    if ($nama === '') $error[] = 'Nama wajib diisi.';
    if ($prodi === '') $error[] = 'Program studi wajib diisi.';
    $terkirim = !$error;
}
require __DIR__ . '/../includes/header.php';
?>
<div class="page-heading"><div class="eyebrow">Latihan 6</div><h1>Memproses Form dengan POST</h1><p>Form menerima nama dan program studi serta memvalidasi data pada sisi server.</p></div>
<section class="panel"><h2>Form Data Pengguna</h2>
<form method="POST" class="form-grid"><div class="field"><label for="nama">Nama</label><input id="nama" name="nama" value="<?= e($nama) ?>" required></div><div class="field"><label for="prodi">Program Studi</label><input id="prodi" name="prodi" value="<?= e($prodi) ?>" required></div><div class="field full"><div class="actions"><button class="btn" type="submit" name="kirim">Kirim Data</button><button class="btn secondary" type="reset">Reset</button></div></div></form>
<?php if ($error): ?><div class="error"><h3>Data belum lengkap</h3><ul><?php foreach($error as $msg): ?><li><?= e($msg) ?></li><?php endforeach; ?></ul></div><?php endif; ?>
<?php if ($terkirim): ?><div class="result"><h3>Data diterima</h3><p><strong>Nama:</strong> <?= e($nama) ?></p><p><strong>Program Studi:</strong> <?= e($prodi) ?></p></div><?php endif; ?>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
