<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $operasi = $_POST['operasi'];
    $hasil = 0;

    switch ($operasi) {
        case 'tambah':
            $hasil = $bil1 + $bil2;
            break;
        case 'kurang':
            $hasil = $bil1 - $bil2;
            break;
        case 'kali':
            $hasil = $bil1 * $bil2;
            break;
        case 'bagi':
            $hasil = $bil1 / $bil2;
            break;
    }
    echo "<h1>Hasil Perhitungan</h1>";
    echo "<p>$bil1 $operasi $bil2 = $hasil</p>";
} else {
    echo "<p>Data tidak valid</p>";
}
?>