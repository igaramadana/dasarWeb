<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Pertambahan: {$hasilTambah}<br>";
echo "Pengurangan: {$hasilKurang}<br>";
echo "Perkalian: {$hasilKali}<br>";
echo "Pembagian: {$hasilBagi}<br>";
echo "Sisa bagi: {$sisaBagi}<br>";
echo "Perpangkatan: {$pangkat}<br>";
echo "<br>";
// -----------------------------------------------------------
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil sama: {$hasilSama}<br>";
echo "Hasil Tidak Sama: {$hasilTidakSama}<br>";
echo "Hasil Lebih Kecil: {$hasilLebihKecil}<br>";
echo "Hasil Lebih Besar: {$hasilLebihBesar}<br>";
echo "Hasil Lebih Kecil Sama: {$hasilLebihKecilSama}<br>";
echo "Hasil Lebih Besar Sama: {$hasilLebihBesarSama}<br>";
echo "<br>";
// -----------------------------------------------------------

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil and: {$hasilAnd}<br>";
echo "Hasil Or: {$hasilOr}<br>";
echo "Hasil Not A: {$hasilNotA}<br>";
echo "Hasil Not B: {$hasilNotB}<br>";
echo "<br>";
// -----------------------------------------------------------

$a += $b;
echo "$a<br>";
$a -= $b;
echo "$a<br>";
$a *= $b;
echo "$a<br>";
$a /= $b;
echo "$a<br>";
$a %= $b;
echo "$a<br>";
echo "<br>";
// -----------------------------------------------------------

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik: {$hasilIdentik}<br>";
echo "Hasil Tidak Identik: {$hasilTidakIdentik}<br>";
// -----------------------------------------------------------

$totalKursi = 45;
$kursiDitempati = 28;
$kursiKosong = $totalKursi - $kursiDitempati;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Persentase kursi kosong = {$persentaseKosong}%<br>";
echo "<br>";
// -----------------------------------------------------------



?>