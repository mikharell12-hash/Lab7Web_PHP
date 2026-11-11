<?php
require_once __DIR__ . '/../includes/functions.php';
$pageTitle = 'Latihan 2 | Nilai Akhir'; $activePage = 'l2';
$nilai = ['tugas' => '85', 'uts' => '78', 'uas' => '90'];
$error = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach (['tugas','uts','uas'] as $field) $nilai[$field] = trim((string)($_POST[$field] ?? ''));
    foreach ($nilai as $field => $value) {
        if ($value === '' || !is_numeric($value) || (float)$value < 0 || (float)$value > 100) {
            $error[] = strtoupper($field) . ' harus berupa angka antara 0 sampai 100.';
        }
    }
}
$hasil = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !$error) {
    $akhir = (float)$nilai['tugas'] * .30 + (float)$nilai['uts'] * .30 + (float)$nilai['uas'] * .40;
    $hasil = ['akhir' => $akhir, 'predikat' => predikatNilai($akhir)];
}
require __DIR__ . '/../includes/header.php';
?>
<div class="page-heading"><div class="eyebrow">Latihan 2</div><h1>Variabel, Operator, dan Percabangan</h1><p>Nilai akhir dihitung dari tugas 30%, UTS 30%, dan UAS 40%.</p></div>
<section class="panel"><h2>Form Perhitungan Nilai</h2>
<form method="POST" class="form-grid">
    <?php foreach (['tugas'=>'Nilai Tugas','uts'=>'Nilai UTS','uas'=>'Nilai UAS'] as $key=>$label): ?>
    <div class="field"><label for="<?= $key ?>"><?= $label ?></label><input type="number" id="<?= $key ?>" name="<?= $key ?>" min="0" max="100" step="0.01" value="<?= e($nilai[$key]) ?>" required></div>
    <?php endforeach; ?>
    <div class="field full"><div class="actions"><button class="btn" type="submit">Hitung Nilai</button><button class="btn secondary" type="reset">Reset</button></div></div>
</form>
<?php if ($error): ?><div class="error"><h3>Input tidak valid</h3><ul><?php foreach($error as $msg): ?><li><?= e($msg) ?></li><?php endforeach; ?></ul></div><?php endif; ?>
<?php if ($hasil): ?><div class="result"><h3>Hasil Perhitungan</h3><div class="stat-row"><div class="stat"><small>Nilai akhir</small><strong><?= number_format($hasil['akhir'],2,',','.') ?></strong></div><div class="stat"><small>Predikat</small><strong><?= e($hasil['predikat']) ?></strong></div><div class="stat"><small>Status contoh</small><strong><?= $hasil['akhir'] >= 60 ? 'Lulus' : 'Belum' ?></strong></div></div><p class="muted">Rumus: (Tugas x 30%) + (UTS x 30%) + (UAS x 40%).</p></div><?php endif; ?>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
