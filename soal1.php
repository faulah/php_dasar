<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Div dan Span</title>
    <link rel="icon" href="gambar/icon.png" type="image/png" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307053">
    <meta name="author" content="Khoirul Faulah Nr">
</head>
<body>
    <?php
    $gajiPokok = 3250000; 
    $tunjanganJabatan = 1200000; 
    $gajiKotor = $gajiPokok + $tunjanganJabatan;
    $pajak = 0.1 * $gajiKotor;
    $gajiBersih = $gajiKotor - $pajak;
    echo "Gaji Pokok: Rp. " . number_format($gajiPokok, 0, ',', '.') . "<br>";
    echo "Tunjangan Jabatan: Rp. " . number_format($tunjanganJabatan, 0, ',', '.') . "<br>";
    echo "Gaji Kotor: Rp. " . number_format($gajiKotor, 0, ',', '.') . "<br>";
    echo "Pajak Penghasilan (10% dari gaji kotor): Rp. " . number_format($pajak, 0, ',', '.') . "<br>";
    echo "Gaji Bersih Yang Diterima Obi Setiap Bulan: Rp. " . number_format($gajiBersih, 0, ',', '.') . "<br>";
    ?>
</body>
</html>