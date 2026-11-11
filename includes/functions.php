<?php
/** Fungsi bantu yang digunakan pada beberapa halaman praktikum. */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function formatRupiah(float|int $nilai): string
{
    return 'Rp' . number_format((float) $nilai, 0, ',', '.');
}

function predikatNilai(float $nilai): string
{
    if ($nilai >= 85) return 'A';
    if ($nilai >= 75) return 'B';
    if ($nilai >= 60) return 'C';
    return 'D';
}

function hitungRataRata(float $a, float $b, float $c): float
{
    return ($a + $b + $c) / 3;
}

function nimValid(string $nim): bool
{
    // Ketentuan eksperimen pada proyek ini: NIM harus tepat 9 digit angka.
    return preg_match('/^[0-9]{9}$/', $nim) === 1;
}
