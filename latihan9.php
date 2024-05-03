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
    function writeMsg ($nama) {
        echo "Selamat Datang ". $nama."<br>";
    }
    writeMsg (nama: "Ahmad");

    function tambah(int $angka1, int $angka2) {
        $a = $angka1 + $angka2;
        return $a;
    }
    $hasil = tambah (angka1: 5, angka2: 5);
    echo ($hasil);
    ?>
</body>
</html>