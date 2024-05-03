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

$dataSiswa = [
    ["No Urut" => 1, "Poin" => 75, "Siswa" => "Adi"],
    ["No Urut" => 2, "Poin" => 80, "Siswa" => "Joni"],
    ["No Urut" => 3, "Poin" => 65, "Siswa" => "Jihan"],
    ["No Urut" => 4, "Poin" => 70, "Siswa" => "Aya"],
    ["No Urut" => 5, "Poin" => 85, "Siswa" => "Ita"],
    ["No Urut" => 6, "Poin" => 90, "Siswa" => "Budi"],
    ["No Urut" => 7, "Poin" => 95, "Siswa" => "Tini"],
    ["No Urut" => 8, "Poin" => 65, "Siswa" => "Sari"],
];

// a) Tampilkan poin siswa dengan nomor urut 5
echo "Poin siswa dengan nomor urut 5: ";
foreach ($dataSiswa as $siswa) {
    if ($siswa["No Urut"] == 5) {
        echo $siswa["Poin"] . "<br>";
        break;
    }
}

// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "Nama siswa dengan poin 90: ";
foreach ($dataSiswa as $siswa) {
    if ($siswa["Poin"] == 90) {
        echo $siswa["Siswa"] . ", ";
    }
}
echo "<br>";

// c) Tampilkan semua nama siswa yang memiliki poin 100 (hasil: tidak ada)
echo "Nama siswa dengan poin 100: ";
$adaSiswaPoin100 = false;
foreach ($dataSiswa as $siswa) {
    if ($siswa["Poin"] == 100) {
        echo $siswa["Siswa"] . ", ";
        $adaSiswaPoin100 = true;
    }
}

if (!$adaSiswaPoin100) {
    echo "(tidak ada)";
}
echo "<br>";
?>
</body>
</html>
