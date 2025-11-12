<?php
$hasilGaji = "";
if (isset($_POST['submit'])) {
    $totalJam = (int)$_POST['jam'];
    $batasJam = 48;
    $upahReguler = 2000;
    $upahLembur = 3000;
    
    $gajiTotal = 0;

    if ($totalJam <= $batasJam) {
        // Jika tidak ada lembur
        $gajiTotal = $totalJam * $upahReguler;
    } else {
        // Jika ada lembur
        $jamReguler = $batasJam;
        $jamLembur = $totalJam - $batasJam;
        
        $gajiReguler = $jamReguler * $upahReguler;
        $gajiLembur = $jamLembur * $upahLembur;
        
        $gajiTotal = $gajiReguler + $gajiLembur;
        
        $hasilGaji .= "Gaji Reguler: $jamReguler jam * Rp 2.000 = Rp " . number_format($gajiReguler) . "<br>";
        $hasilGaji .= "Gaji Lembur: $jamLembur jam * Rp 3.000 = Rp " . number_format($gajiLembur) . "<br>";
    }
    
    $hasilGaji .= "<strong>Total Upah Diterima: Rp " . number_format($gajiTotal) . ",-</strong>";
}
?>

<html>
<head>
    <title>Soal 2 - Hitung Gaji</title>
</head>
<body>
    <h2>Hitung Gaji Mingguan Karyawan</h2>
    
    <form method="post" action="soal2.php">
        Masukkan Jumlah Jam Kerja: 
        <input type="number" name="jam" required>
        <input type="submit" name="submit" value="Hitung Gaji">
    </form>
    
    <hr>
    
    <h3><?php echo $hasilGaji; ?></h3>
</body>
</html>