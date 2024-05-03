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
    <h1> Waktu </h1>
    <?php
    $t = date("H");
    echo "if <br>";
    if ($t < 16) {
        echo "Selamat Siang!";
    }

    $t = date("H"); // Reset variabel $t dengan waktu saat ini
    echo "<br> If dan Else <br>";
    if ($t < 20) {
        echo "Selamat Siang!";
    } else {
        echo "Selamat Malam!";
    }

    echo "<br> Nested If <br>";
    if ($t < 11) {
        echo "Selamat Pagi!";
    } elseif ($t < 16) {
        echo "Selamat Sore!";
    } else {
        echo "Selamat Malam!";
    }
    ?>

</body>
</html>
