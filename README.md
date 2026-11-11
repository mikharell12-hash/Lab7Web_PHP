# Lab7Web_PHP - Praktikum 7 Pemrograman Server-Side dengan PHP

## Identitas
- Nama: Alleizandro Lim Hianto Prasetya
- NIM: 312510395
- Program Studi: Teknik Informatika
- Kelas: I252A
- Mata Kuliah: Pemrograman Web

## Tujuan
1. Memahami client-side dan server-side.
2. Menjalankan PHP melalui server lokal.
3. Menggunakan variabel, tipe data, operator, percabangan, perulangan, array, dan function.
4. Memproses form dengan GET dan POST.
5. Memvalidasi dan menyaring input pengguna di sisi server.
6. Membuat aplikasi sederhana untuk menerima dan menampilkan data mahasiswa.

## Perangkat
Laptop/PC, Visual Studio Code, PHP 8.x, XAMPP atau Laragon, serta browser.

## Cara Menjalankan
1. Salin folder proyek ke direktori htdocs XAMPP atau web root Laragon.
2. Jalankan Apache.
3. Buka http://localhost/Lab7Web_PHP/ melalui browser.
4. Pilih latihan melalui navigasi halaman beranda.

File PHP harus dijalankan melalui web server, bukan dibuka dengan klik ganda.

## Struktur Proyek
- index.php: beranda dan navigasi praktikum.
- assets/style.css: stylesheet.
- includes/functions.php: fungsi bantu, sanitasi, dan validasi.
- includes/header.php dan includes/footer.php: kerangka halaman.
- latihan1 sampai latihan7: seluruh latihan modul.
- mini_project: formulir data mahasiswa.
- eksperimen: lima eksperimen mandiri.

## Ringkasan Hasil
1. Latihan 1 menampilkan pesan PHP berhasil dijalankan dan waktu server.
2. Latihan 2 menghitung nilai akhir dengan bobot tugas 30%, UTS 30%, dan UAS 40%.
3. Latihan 3 menampilkan tujuh nama mahasiswa dengan foreach.
4. Latihan 4 menggunakan function untuk diskon, luas persegi panjang, dan kelulusan.
5. Latihan 5 menerima kata kunci GET dan mencari nama dari array.
6. Latihan 6 memproses nama dan program studi melalui POST dengan validasi server-side.
7. Latihan 7 memvalidasi nama barang, harga, dan jumlah lalu menghitung subtotal.
8. Mini project menerima nama, NIM, program studi, semester, dan email serta memvalidasi seluruh data di server.
9. Eksperimen mandiri memuat rata-rata nilai, pencarian GET, format Rupiah, validasi NIM, dan tombol reset.

## Pengujian Input
### Kasus valid
- Latihan 6: nama Alleizandro Lim Hianto Prasetya dan program studi Teknik Informatika. Data diterima.
- Latihan 7: Keyboard mekanik, harga 125000, jumlah 2. Subtotal Rp250.000.
- Mini project: NIM 312510395, semester 3, email mahasiswa@example.com, dan semua kolom lain terisi. Ringkasan data ditampilkan.

### Kasus tidak valid
- Latihan 6: program studi kosong. Server menampilkan pesan bahwa program studi wajib diisi.
- Latihan 7: jumlah barang 0. Server menolak jumlah karena minimal 1.
- Mini project: NIM 12345, semester 15, dan email email-salah. Server menampilkan pesan validasi yang sesuai.

## Jawaban Pertanyaan Evaluasi
1. Client-side diproses di browser pengguna, misalnya HTML, CSS, dan JavaScript. Server-side dijalankan di server untuk menerima permintaan, memproses input dan aturan aplikasi, lalu mengirim respons ke browser.
2. PHP harus dijalankan melalui web server karena PHP merupakan bahasa server-side. Server memproses kode PHP dan mengirim hasil seperti HTML kepada browser.
3. Tanda $ merupakan awalan nama variabel PHP, misalnya $nama dan $umur.
4. GET mengirim data melalui parameter URL dan sesuai untuk permintaan yang tidak mengubah data. POST mengirim data di body permintaan dan lazim digunakan untuk pengiriman form. POST bukan enkripsi; HTTPS tetap diperlukan.
5. Validasi server-side memastikan data yang diproses memenuhi aturan aplikasi, meskipun validasi browser dilewati atau tidak tersedia.
6. htmlspecialchars() mengubah karakter khusus menjadi representasi HTML sehingga input pengguna tidak langsung ditafsirkan sebagai markup atau script.
7. Function mengelompokkan instruksi untuk tugas tertentu agar dapat digunakan kembali, mengurangi pengulangan, dan memudahkan pemeliharaan kode.

## Catatan
- Fungsi e() menggunakan htmlspecialchars dengan ENT_QUOTES dan UTF-8.
- Ketentuan NIM pada proyek ini adalah tepat 9 digit angka; ini merupakan aturan implementasi proyek.
- Validasi PHP tetap dilakukan meskipun form memiliki atribut HTML required, min, atau max.
- Tombol reset hanya mengembalikan nilai form di browser dan tidak mengirim request ke server.
- Laporan PDF dan screenshot pengujian tersedia pada paket ZIP proyek yang diserahkan terpisah; berkas biner tersebut belum dapat ditambahkan melalui koneksi GitHub ini.
