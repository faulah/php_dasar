<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Gambar</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307053">
    <meta name="author" content="Khoirul Faulah">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <p><label>Pilih gambar yang akan diupload: </label><br>
        <input type="file" name="gambar" id="gambar1"></p>
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <?php
    $target_dir = "gambar/";
    $uploadOk = 1;

    // Cek apakah form sudah di-submit
    if (isset($_POST["submit"])) {
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Periksa apakah file merupakan gambar
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if ($check !== false) {
            echo "File berupa citra/gambar dengan tipe: " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }

        // Periksa apakah file sudah ada
        if (file_exists($target_file)) {
            echo "Maaf, file sudah ada.";
            $uploadOk = 0;
        }

        // Batasi ukuran file
        if ($_FILES["gambar"]["size"] > 500000) {
            echo "Maaf, file terlalu besar.";
            $uploadOk = 0;
        }

        // Jika semua kondisi terpenuhi, lakukan proses upload
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "File " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " berhasil diupload.";
            } else {
                echo "Maaf, terjadi kesalahan saat mengupload file.";
            }
        }
    }
    ?>

</body>
</html>
