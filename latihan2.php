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
    $txt = "Selamat Datang!";
    $txt2 = "Politeknik Negeri Madiun";
    $x = 5;
    $y = 10.5;
    
    echo "<p>isi variabel txt adalah: $txt</p>";
    echo "<p>isi variabel x adalah: $x</p>";
    echo "<p>isi variabel y adalah: $y</P>";
    echo "Belajar PHP di".$txt2."<br>";
    echo $x + $y;

    define("nama_konstanta", "{Khoirul Faulah Nr}");
    echo "<br>".nama_konstanta;

    ?>
</body>
</html>