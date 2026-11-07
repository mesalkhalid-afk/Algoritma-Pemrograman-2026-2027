<?php
$nim = "1.110186";
$nama = "Muhammad Encep";
$umur = 35;
$nilai = 92.75;
$status = true;

echo "NIM : $nim \n";
echo "Nama : $nama\n";
echo "Umur : $umur\n";
printf("Nilai : %.3f\n", $nilai);
echo "Status : " . ($status ? "Aktif" : "Tidak Aktif");