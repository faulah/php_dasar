<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Konversi Angka ke Terbilang</title>
</head>
<body>
    <h1>Konversi Terbilang</h1>

    <?php
    if (isset($_GET['angka'])) {
        $angka = $_GET['angka'];

        // Mengonversi angka menjadi terbilang
        switch ($angka) {
            case 1:
                $terbilang = "satu";
                break;
            case 2:
                $terbilang = "dua";
                break;
            case 3:
                $terbilang = "tiga";
                break;
            case 4:
                $terbilang = "empat";
                break;
            case 5:
                $terbilang = "lima";
                break;
            case 6:
                $terbilang = "enam";
                break;
            case 7:
                $terbilang = "tujuh";
                break;
            case 8:
                $terbilang = "delapan";
                break;
            case 9:
                $terbilang = "sembilan";
                break;
            default:
                $terbilang = "Angka diluar rentang 1-9";
                break;
        }

        // Menampilkan hasil konversi
        echo "<p>Angka $angka dalam terbilang adalah \"$terbilang\"</p>";
    }
    ?>

    <form method="GET" action="">
        <label for="angka">Masukkan Angka (1-9):</label>
        <input type="number" name="angka" id="angka" min="1" max="9" required>
        <button type="submit">Konversi</button>
    </form>
</body>
</html>
