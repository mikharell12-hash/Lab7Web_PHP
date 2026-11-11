<?php
require_once __DIR__ . '/../includes/functions.php';
$pageTitle = 'Mini Project | Form Data Mahasiswa'; $activePage = 'mini';
$fields = ['nama'=>'','nim'=>'','prodi'=>'','semester'=>'','email'=>''];
$error = []; $data = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($fields as $key => $_) $fields[$key] = trim((string)($_POST[$key] ?? ''));
    if ($fields['nama'] === '') $error[] = 'Nama wajib diisi.';
    if ($fields['nim'] === '') $error[] = 'NIM wajib diisi.';
    elseif (!nimValid($fields['nim'])) $error[] = 'NIM harus terdiri dari tepat 9 digit angka.';
    if ($fields['prodi'] === '') $error[] = 'Program studi wajib diisi.';
    if (!filter_var($fields['email'], FILTER_VALIDATE_EMAIL)) $error[] = 'Format email tidak valid.';
    if (!ctype_digit($fields['semester']) || (int)$fields['semester'] < 1 || (int)$fields['semester'] > 14) $error[] = 'Semester harus berupa bilangan bulat 1-14.';
    if (!$error) { $data = $fields; $data['semester'] = (int)$fields['semester']; }
}
require __DIR__ . '/../includes/header.php';
?>
<div class="page-heading"><div class="eyebrow">Mini Project</div><h1>Aplikasi Formulir Data Mahasiswa</h1><p>Mengirim data dengan POST, memvalidasi input di server, dan menampilkan ringkasan menggunakan htmlspecialchars().</p></div>
<section class="panel"><h2>Input Data Mahasiswa</h2>
<form method="POST" class="form-grid" novalidate>
    <div class="field full"><label for="nama">Nama lengkap</label><input id="nama" name="nama" value="<?= e($fields['nama']) ?>" required></div>
    <div class="field"><label for="nim">NIM</label><input id="nim" name="nim" inputmode="numeric" value="<?= e($fields['nim']) ?>" required><span class="help">Ketentuan proyek: tepat 9 digit angka.</span></div>
    <div class="field"><label for="prodi">Program studi</label><input id="prodi" name="prodi" value="<?= e($fields['prodi']) ?>" required></div>
    <div class="field"><label for="semester">Semester</label><input id="semester" name="semester" type="number" min="1" max="14" step="1" value="<?= e($fields['semester']) ?>" required></div>
    <div class="field"><label for="email">Email</label><input id="email" name="email" type="email" value="<?= e($fields['email']) ?>" required></div>
    <div class="field full"><div class="actions"><button class="btn teal" type="submit">Kirim Data</button><button class="btn secondary" type="reset">Reset Form</button></div></div>
</form>
<?php if ($error): ?><div class="error"><h3>Validasi gagal - perbaiki data berikut</h3><ul><?php foreach($error as $msg): ?><li><?= e($msg) ?></li><?php endforeach; ?></ul></div><?php endif; ?>
<?php if ($data): ?><div class="result"><h3>Data Mahasiswa Berhasil Diterima</h3><table class="data-table"><tr><th>Nama</th><td><?= e($data['nama']) ?></td></tr><tr><th>NIM</th><td><?= e($data['nim']) ?></td></tr><tr><th>Program Studi</th><td><?= e($data['prodi']) ?></td></tr><tr><th>Semester</th><td><?= e((string)$data['semester']) ?></td></tr><tr><th>Email</th><td><?= e($data['email']) ?></td></tr></table></div><?php endif; ?>
</section>
<div class="notice">Validasi tetap dilakukan di sisi server. Tombol reset hanya mengembalikan nilai form di browser.</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
