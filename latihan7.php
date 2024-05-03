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
    $namaBuah = array ("Nanas", "Mangga", "Jeruk","Apel", "Melon", "Manggis");
    echo "saya suka" . $namaBuah[0].",".$namaBuah[1]."dan". $namaBuah[2].",";

    echo "saya suka" . $namaBuah[Mangga];
    echo "saya suka" . $namaBuah[Jeruk];
    echo "saya suka" . $namaBuah[Apel];
    echo "saya suka" . $namaBuah[Melon];

    $umur = array("Andy"=>"20 tahun", "Dina"=>"19 tahun");
    echo "umur faulah adalah".$umur["faulah"];
    echo "umur dina adalah".$umur["dina"];
    ?>
</body>
</html>