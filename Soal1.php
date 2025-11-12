<?php
// Bagian PHP untuk memproses hasil
$hasil = ""; // Variabel untuk menyimpan hasil
if (isset($_POST['submit'])) {
    // Ambil tahun dari form
    $tahun = (int)$_POST['tahun'];

    // Logika cek tahun kabisat
    // (Tahun % 4 == 0) AND (Tahun % 100 != 0) ATAU (Tahun % 400 == 0)
    if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
        $hasil = "Tahun $tahun adalah <strong>Tahun Kabisat</strong>.";
    } else {
        $hasil = "Tahun $tahun <strong>BUKAN</strong> Tahun Kabisat.";
    }
}
?>

<html>
<head>
    <title>Soal 1 - Tahun Kabisat</title>
</head>
<body>
    <h2>Cek Tahun Kabisat</h2>
    
    <form method="post" action="soal1.php">
        Masukkan Tahun: 
        <input type="number" name="tahun" required>
        <input type="submit" name="submit" value="Cek">
    </form>
    
    <hr>
    
    <h3><?php echo $hasil; ?></h3>
    
</body>
</html>