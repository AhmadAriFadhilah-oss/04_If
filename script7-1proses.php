<html>
<head>
    <title>Hasil - Bilangan Terbesar</title>
</head>
<body>
    <h1>Mencari Bilangan Terbesar dari 3 Bilangan</h1>

<?php
// PERBAIKAN UTAMA:
// Cek dulu apakah tombol 'submit' sudah ditekan.
// Jika file ini dibuka langsung, 'submit' tidak akan ada.
if (isset($_POST['submit'])) 
{
    // Ambil data (casting ke integer)
    $bilangan1 = (int)$_POST['bil1'];
    $bilangan2 = (int)$_POST['bil2'];
    $bilangan3 = (int)$_POST['bil3'];

    echo "Bilangan yang diinput: $bilangan1, $bilangan2, $bilangan3 <hr>";

    // --- cara ke 1 ---
    echo "<h3>Cara 1:</h3>";
    if ($bilangan1 > $bilangan2)
        $maxSementara = $bilangan1;
    else
        $maxSementara = $bilangan2;

    if ($maxSementara > $bilangan3)
        $bilanganTerbesar = $maxSementara;
    else
        $bilanganTerbesar = $bilangan3;
    echo "Bilangan terbesar adalah: $bilanganTerbesar";


    // --- Cara 1b (Perbaikan Blok Tengah) ---
    echo "<h3>Cara 1b (Perbaikan Blok Tengah):</h3>";
    $maxSementara = $bilangan1; // Tentukan nilai awal
    if ($bilangan2 > $maxSementara) {
        $maxSementara = $bilangan2;
    }
    if ($bilangan3 > $maxSementara) {
        $maxSementara = $bilangan3;
    }
    echo "<p>Nilai maksimum... adalah : $maxSementara.</p>";

    // --- cara ke - 2 (Perbaikan) ---
    echo "<h3>Cara 2 (Perbaikan):</h3>";
    if (($bilangan1 >= $bilangan2) && ($bilangan1 >= $bilangan3))
        $maxAkhir = $bilangan1;
    else if (($bilangan2 >= $bilangan1) && ($bilangan2 >= $bilangan3))
        $maxAkhir = $bilangan2;
    else
        $maxAkhir = $bilangan3;
    echo "<p>Nilai maksimum... adalah : $maxAkhir.</p>";

    // --- cara ke - 3 ---
    echo "<h3>Cara 3:</h3>";
    if ($bilangan1 > $bilangan2) {
        if ($bilangan1 > $bilangan3)
            $maxAkhir = $bilangan1;
        else
            $maxAkhir = $bilangan3;
    } else {
        if ($bilangan2 > $bilangan3)
            $maxAkhir = $bilangan2;
        else
            $maxAkhir = $bilangan3;
    }
    echo "<p>Nilai maksimum... adalah : ".$maxAkhir."</p>";

    // --- Cara Paling Simpel (Bawaan PHP) ---
    echo "<h3>Cara Paling Simpel (Bawaan PHP):</h3>";
    $terbesar = max($bilangan1, $bilangan2, $bilangan3);
    echo "<p>Nilai maksimumnya adalah: $terbesar</p>";

} 
else 
{
    // Jika file dibuka langsung tanpa submit, tampilkan pesan ini
    echo "<h2>Error: Data tidak ditemukan.</h2>";
    echo "<p>Harap isi form terlebih dahulu di file <strong>script7-1.php</strong>.</p>";
    // (Ganti 'script7-1.php' jika nama file form kamu berbeda)
}
?>

</body>
</html>