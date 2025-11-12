<?php
$hasilGaji3 = "";
if (isset($_POST['submit'])) {
    $totalJam = (int)$_POST['jam'];
    $golongan = $_POST['golongan'];
    
    $batasJam = 48;
    $upahLembur = 3000;
    $upahReguler = 0;

    // Tentukan upah reguler berdasarkan golongan
    switch ($golongan) {
        case 'A': $upahReguler = 4000; break;
        case 'B': $upahReguler = 5000; break;
        case 'C': $upahReguler = 6000; break;
        case 'D': $upahReguler = 7500; break;
    }
    
    $gajiTotal = 0;

    if ($totalJam <= $batasJam) {
        // Tidak ada lembur
        $gajiTotal = $totalJam * $upahReguler;
    } else {
        // Ada lembur
        $jamReguler = $batasJam;
        $jamLembur = $totalJam - $batasJam;
        
        $gajiReguler = $jamReguler * $upahReguler;
        $gajiLembur = $jamLembur * $upahLembur;
        
        $gajiTotal = $gajiReguler + $gajiLembur;
    }
    
    $hasilGaji3 = "Golongan: <strong>$golongan</strong><br>";
    $hasilGaji3 .= "Total Jam: <strong>$totalJam jam</strong><br>";
    $hasilGaji3 .= "Upah per Jam: Rp " . number_format($upahReguler) . "<br>";
    $hasilGaji3 .= "<strong>Total Upah Diterima: Rp " . number_format($gajiTotal) . ",-</strong>";
}
?>

<html>
<head>
    <title>Soal 3 - Gaji Golongan</title>
</head>
<body>
    <h2>Hitung Gaji Mingguan (Golongan)</h2>
    
    <form method="post" action="soal3.php">
        <p>
            Pilih Golongan:
            <select name="golongan">
                <option value="A">Golongan A (Rp 4.000/jam)</option>
                <option value="B">Golongan B (Rp 5.000/jam)</option>
                <option value="C">Golongan C (Rp 6.000/jam)</option>
                <option value="D">Golongan D (Rp 7.500/jam)</option>
            </select>
        </p>
        <p>
            Masukkan Jumlah Jam Kerja:
            <input type="number" name="jam" required>
        </p>
        <input type="submit" name="submit" value="Hitung Gaji">
    </form>
    
    <hr>
    
    <h3><?php echo $hasilGaji3; ?></h3>
</body>
</html>