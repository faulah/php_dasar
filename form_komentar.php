<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulir Komentar</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="name"> <br>
        E-mail: <input type="text" name="email"> <br>
        Komentar: <textarea name="comment" rows="5" cols="40"></textarea> <br>
        <input type="submit" value="Simpan">
        <input type="reset" value="Bersihkan">
    </form>

    <?php
    // Inisialisasi variabel
    $name = $email = $comment = "";

    // Cek apakah form sudah di-submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari form
        $name = $_POST["name"];
        $email = $_POST["email"];
        $comment = $_POST["comment"];

        // Tampilkan nilai yang diambil dari form
        echo "Nama: " . $name . "<br>";
        echo "E-mail: " . $email . "<br>";
        echo "Komentar: " . $comment . "<br>";
        echo "<hr>";
    }
    ?>
</body>
</html>
