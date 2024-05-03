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
    <h1> Perulangan </h1>
    <?php
    // Array nilai yang diberikan
    $nilai_list = [12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256];

    // Looping melalui setiap nilai dan menampilkan apakah ganjil atau genap
    echo "<ul>";
    foreach ($nilai_list as $nilai) {
        echo "<li>Nilai $nilai adalah ";
        if ($nilai % 2 == 0) {
            echo "genap</li>";
        } else {
            echo "ganjil</li>";
        }
    }
    echo "</ul>";
    ?>

</body>
</html>
