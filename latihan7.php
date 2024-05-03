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
        // Array namaBuah
        $namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");

        // Menampilkan beberapa buah dari array
        echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . ", dan " . $namaBuah[2] . ".";

        // Menampilkan buah-buahan tertentu dari array
        echo "Saya suka " . $namaBuah[1] . ".";
        echo "Saya suka " . $namaBuah[2] . ".";
        echo "Saya suka " . $namaBuah[3] . ".";
        echo "Saya suka " . $namaBuah[4] . ".";

        // Array umur dengan asosiasi
        $umur = array("Andy" => "35 tahun", "Ben" => "37 tahun", "Joe" => "tahun");

        // Menambahkan data umur baru ke dalam array
        $umur['Ahmad'] = "50 tahun";
    ?>

    <ul>
        <?php
            // Loop untuk menampilkan nama dan umur dalam bentuk daftar
            foreach ($umur as $nama => $usia) {
                echo "<li>Umur $nama adalah $usia.</li>";
            }
        ?>
    </ul>
</body>
</html>
