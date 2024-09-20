<?php 

$daftarNilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0;
foreach ($daftarNilaiSiswa as $data) {
    $totalNilai += $data[1]; 
}
$rataRataKelas = $totalNilai / count($daftarNilaiSiswa);

echo "Daftar nilai siswa di atas rata-rata kelas ($rataRataKelas): <br>";
foreach ($daftarNilaiSiswa as $data) {
    if ($data[1] > $rataRataKelas) { 
        echo "{$data[0]} : {$data[1]} <br>"; 
    }
}

?>