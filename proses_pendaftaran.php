<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proses Pendaftaran</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['nama']) && isset($_GET['nim']) && isset($_GET['email']) && isset($_GET['tempat_lahir']) && isset($_GET['tanggal_lahir']) && isset($_GET['alamat']) && isset($_GET['gender'])) {
            $nama = $_GET['nama'];
            $nim = $_GET['nim'];
            $email = $_GET['email'];
            $tempat_lahir = $_GET['tempat_lahir'];
            $tanggal_lahir = $_GET['tanggal_lahir'];
            $alamat = $_GET['alamat'];
            $gender = $_GET['gender'];
        } else {
            echo "Ada kesalahan dalam pengiriman data formulir.";
            // Menambahkan kode untuk mengembalikan pengguna ke halaman formulir atau melakukan penanganan kesalahan lainnya jika diperlukan
        }
    } else {
        echo "Metode pengiriman form tidak valid.";
        // Menambahkan kode untuk mengembalikan pengguna ke halaman formulir atau melakukan penanganan kesalahan lainnya jika diperlukan
    }
    ?>

    Selamat Datang <b><?php echo $nama; ?></b><br>
    Nim: <?php echo $nim; ?><br>
    Email: <?php echo $email; ?><br>
    Tempat, Tanggal Lahir: <?php echo $tempat_lahir; ?>, <?php echo $tanggal_lahir; ?><br>
    Alamat: <?php echo $alamat; ?><br>
    Gender: <?php echo $gender; ?><br>
</body>
</html>
