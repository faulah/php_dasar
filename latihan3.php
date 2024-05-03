<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Div dan Span</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307053">
    <meta name="author" content="Khoirul Faulah Nr">
</head>
<body>
    <h1>Halaman PHP Saya</h1>
    <?php
    $x = 5;
    $y = 10;

    echo "Penambahan ".$x + $y."<br>";
    echo "Pengurangan ".$x - $y."<br>";
    echo "Perkalian ".$x * $y."<br>";
    echo "Pembagian ".$x / $y."<br>";
    echo "Modulus ".$x % $y."<br>";
    echo "Exponensial ".$x ** $y."<br>";
    echo("<br>");

    $x += 2;
    $y *= 2;
    echo "penambahan x ".$x."<br>";
    echo "perkalian y ".$y."<br>";
    echo("<br>");

    echo "isi ++x = ".++$x."<br>";
    echo "isi x++ = ".$x++."<br>";
    echo "isi x = ".$x."<br>";
    echo ("<br>");
    echo "isi --y =".--$y."<br>";
    echo "isi y-- = ".$y--."<br>";
    echo "isi y = ".$y."<br>";
    echo ("<br>");

    $user = "Faulah";
    $status = (empty($user)) ? "kosong" : "ada isi";
    echo $status."<br>";
    echo $color = $color ?? "red";
    
    ?>
</body>
</html>