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
    <h1> Keliling Lingkaran </h1>
    <?php
    $jari_jari = 15; 
    $pi = 3.14159; 
    $keliling = 2 * $pi * $jari_jari;
    echo "Keliling lingkaran dengan jari-jari $jari_jari cm adalah: " . number_format($keliling, 2) . " cm";
    ?>
</body>
</html>
