<?php
// Atur zona waktu
date_default_timezone_set("Asia/Makassar"); // Boleh diganti sesuai lokasimu

// 'n' -> ambil bulan dalam angka (1-12)
// 'F' -> ambil nama bulan (e.g., November)
// 'Y' -> ambil tahun (e.g., 2025)
$bulanAngka = date('n');
$bulanNama = date('F');
$tahun = (int)date('Y');

$jumlahHari = 0;

switch ($bulanAngka) {
    case 1: // Januari
    case 3: // Maret
    case 5: // Mei
    case 7: // Juli
    case 8: // Agustus
    case 10: // Oktober
    case 12: // Desember
        $jumlahHari = 31;
        break;
        
    case 4: // April
    case 6: // Juni
    case 9: // September
    case 11: // November
        $jumlahHari = 30;
        break;
        
    case 2: // Februari
        // Cek tahun kabisat untuk Februari
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
            $jumlahHari = 29; // Kabisat
        } else {
            $jumlahHari = 28; // Bukan Kabisat
        }
        break;
        
    default:
        $jumlahHari = "Tidak diketahui";
        break;
}
?>

<html>
<head>
    <title>Soal 4 - SWITCH Bulan</title>
</head>
<body>
    <h2>Soal 4: Menampilkan Jumlah Hari (Konsep SWITCH)</h2>
    
    <p>Bulan saat ini adalah: <strong><?php echo "$bulanNama $tahun"; ?></strong></p>
    <p>Jumlah hari dalam bulan ini: <strong><?php echo $jumlahHari; ?> hari</strong></p>
    
</body>
</html>