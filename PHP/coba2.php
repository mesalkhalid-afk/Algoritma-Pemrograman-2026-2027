<?php
// coba2.php (variasi tambah tunjangan + format rupiah)
$gaji = 8_000_000; // numeric separator, PHP 7.4+
$tunjangan = 1_000_000;
$pajak = 0.1;

$bruto = $gaji + $tunjangan;
$thp = $bruto - ($bruto * $pajak);

echo "Gaji sebelum pajak = Rp" . number_format($bruto) . "\n";
echo "Gaji bersih = Rp " . number_format($thp);