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
    <h2>Hasil Konversi Nilai Angka ke Huruf</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Masukkan nilai angka (0-100): <input type="text" name="nilai">
        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari form
        $nilai = $_POST["nilai"];
        
        // Validasi nilai (pastikan nilai berada di rentang 0-100)
        if (is_numeric($nilai) && $nilai >= 0 && $nilai <= 100) {
            // Konversi nilai ke huruf berdasarkan aturan
            if ($nilai >= 90) {
                $grade = "A";
            } elseif ($nilai >= 80 && $nilai <= 89) {
                $grade = "AB";
            } elseif ($nilai >= 70 && $nilai <= 79) {
                $grade = "B";
            } elseif ($nilai >= 60 && $nilai <= 69) {
                $grade = "BC";
            } else {
                $grade = "C";
            }
            
            // Tampilkan hasil konversi
            echo "Nilai angka <strong>$nilai</strong> setara dengan nilai huruf <strong>$grade</strong>.";
        } else {
            echo "Masukkan nilai angka antara 0 sampai 100.";
        }
    }
    ?>
    
</body>
</html>
