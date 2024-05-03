<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Div dan Span</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307053">
    <meta name="author" content="Khoirul Faulah Nr">
</head>
<body>
    <?php
    
    $uangTabungan = 1387500;  
    $pecahanUang = array(100000, 50000, 20000, 10000, 5000, 2000, 500);
    $banyakPecahan = array();

    foreach ($pecahanUang as $pecahan) {
        $jumlahPecahan = intval($uangTabungan / $pecahan);
        
        if ($jumlahPecahan > 0) {
            $banyakPecahan[$pecahan] = $jumlahPecahan;
        }
        
        $uangTabungan -= $jumlahPecahan * $pecahan;
    }

    echo "<h2>Banyaknya masing-masing pecahan uang yang diperoleh Ani:</h2>";
    echo "<ul>";
    foreach ($banyakPecahan as $pecahan => $jumlah) {
        echo "<li>Rp. " . number_format($pecahan, 0, ',', '.') . " = " . $jumlah . " lembar</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
