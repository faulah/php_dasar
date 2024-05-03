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
    <h1> Hari-Hari </h1>
    <?php
    $daysOfWeek = array(
    'Senin',   // Index 0
    'Selasa',    // Index 1
    'Rabu',   // Index 2
    'Kamis',     // Index 3
    'Jumat',    // Index 4
    'Sabtu',    // Index 5
    'Minggu'     // Index 6
    );
    for ($i = 0; $i < 7; $i++) {
    echo "Hari ke-" . ($i + 1) . ": " . $daysOfWeek[$i] . "<br>";
    }
    ?>
</body>
</html>
