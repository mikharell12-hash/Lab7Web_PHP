<?php
require_once __DIR__ . '/includes/functions.php';
$pageTitle = 'Beranda | Lab 7 PHP';
$activePage = 'home';
require __DIR__ . '/includes/header.php';
?>
<section class="hero">
    <div class="eyebrow">Modul Praktikum 07</div>
    <h1>Pemrograman Server-Side dengan PHP</h1>
    <p>Proyek latihan untuk memahami sintaks PHP, variabel, percabangan, perulangan, function, pemrosesan form GET dan POST, validasi input, serta pengolahan data sederhana.</p>
    <div class="hero-meta"><span>Alleizandro Lim Hianto Prasetya</span><span>312510395</span><span>Kelas I252A</span></div>
</section>
<h2 class="section-title">Daftar Praktikum</h2>
<div class="card-grid">
    <a class="nav-card" href="latihan1/"><span class="number">01</span><h3>Menjalankan PHP</h3><p>Menampilkan teks dan waktu server melalui localhost.</p></a>
    <a class="nav-card" href="latihan2/"><span class="number">02</span><h3>Variabel, Operator, dan Percabangan</h3><p>Menghitung nilai akhir berbobot dan menentukan predikat.</p></a>
    <a class="nav-card" href="latihan3/"><span class="number">03</span><h3>Perulangan dan Array</h3><p>Menampilkan daftar mahasiswa menggunakan foreach.</p></a>
    <a class="nav-card" href="latihan4/"><span class="number">04</span><h3>Membuat Function</h3><p>Menghitung diskon, luas persegi panjang, dan predikat.</p></a>
    <a class="nav-card" href="latihan5/"><span class="number">05</span><h3>Memproses Form GET</h3><p>Mencari nama pada array dan membaca parameter URL.</p></a>
    <a class="nav-card" href="latihan6/"><span class="number">06</span><h3>Memproses Form POST</h3><p>Menerima data nama dan program studi dengan validasi.</p></a>
    <a class="nav-card" href="latihan7/"><span class="number">07</span><h3>Pengolahan Data Sederhana</h3><p>Menghitung subtotal barang.</p></a>
    <a class="nav-card" href="mini_project/"><span class="number">MP</span><h3>Mini Project: Data Mahasiswa</h3><p>Formulir mahasiswa dengan validasi server-side.</p></a>
    <a class="nav-card" href="eksperimen/"><span class="number">EX</span><h3>Eksperimen Mandiri</h3><p>Rata-rata nilai, pencarian GET, format Rupiah, validasi NIM, dan reset form.</p></a>
</div>
<div class="notice">Jalankan proyek melalui web server lokal, misalnya http://localhost/Lab7Web_PHP/.</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
