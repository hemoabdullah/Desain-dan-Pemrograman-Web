<?php
$totalKursi = 45;
$kursiDitempati = 28;
$kursiKosong = $totalKursi - $kursiDitempati;
$presentasiKursiKosong = ($kursiDitempati / $totalKursi) * 100;

echo "Jumlah kursi yang masih kosong: ($kursiKosong) <br>";
echo "Presentasi kursi yang masih kosong: ($presentasiKursiKosong) <br>";
?>