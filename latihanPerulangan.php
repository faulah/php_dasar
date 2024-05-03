<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Perulangan Bintang</title>
</head>
<body>
    <h1> Perulangan Bintang</h1>

    <?php
    // Menampilkan pola bintang segitiga
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }

    ?>

</body>
</html>
