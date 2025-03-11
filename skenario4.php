<html>
<head>
<title class='nrma'>skenario 4</title>
<h2>Nama kelompok: Fadhilla & Norma</h2>
<style>
    .nrma {
        color: blue;
        font: bold;
    }
    </style>
</head>
<h2>kasus1</h2>
<?php
$hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
$tanggal = range(1, 31);
$bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agst", "Sep", "Okt", "Nov", "Des"];
$tahun = [2024, 2025, 2026];

// Menampilkan hari menggunakan for
echo "Hari: ";
for ($i = 0; $i < count($hari); $i++) {
    echo $hari[$i] . " ";
}
echo "<br>";

// Menampilkan tanggal menggunakan foreach
echo "Tanggal: ";
foreach ($tanggal as $tgl) {
    echo $tgl . " ";
}
echo "<br>";

// Menampilkan bulan menggunakan while
echo "Bulan: ";
$i = 0;
while ($i < count($bulan)) {
    echo $bulan[$i] . " ";
    $i++;
}
echo "<br>";

// Menampilkan tahun menggunakan do while
echo "Tahun: ";
$i = 0;
do {
    echo $tahun[$i] . " ";
    $i++;
} while ($i < count($tahun));
echo "<br>";

?>

<h2>kasus 2</h2>
<?php
$anak_ayam = range(30, 1); // Array dari 30 hingga 1

foreach ($anak_ayam as $jumlah) {
    echo "Anak ayam turun $jumlah, mati satu tinggal " . ($jumlah - 1) . "<br>";
}
?>

<h2>kasus 3</h2>
<?php
$mawar_sholeh = range(21, 10);
$mawar_ibu = [];

for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
    $mawar_ibu[] = $mawar;
}

echo "Mawar yang dimiliki Sholeh: " . implode(", ", $mawar_sholeh) . "<br>";
echo "Jumlah Mawar Sholeh: " . count($mawar_sholeh) . "<br>";

echo "Mawar yang diberikan ke ibunya: " . implode(", ", $mawar_ibu) . "<br>";
echo "Jumlah Mawar untuk Ibu: " . count($mawar_ibu) . "<br>";
?>

<h2>kasus 4</h2>
<?php
$musik = [
    ["suasana" => "galau", "lagu" => "Mesin Waktu - Budi Doremi"],
    ["suasana" => "bersemangat", "lagu" => "Selamat Pagi - Ran"],
    ["suasana" => "marah", "lagu" => "Yang Patah Tumbuh, Yang Hilang Berganti - Banda Neira"]
];

foreach ($musik as $m) {
    echo "Jika Ambyar sedang {$m['suasana']}, dia mendengarkan lagu {$m['lagu']} <br>";
}
?>
</html>