<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> proses pendaftaran </title>
</head>
<body>
    <?php
    if (isset($_POST['nama']) && isset ($_POST['nim']) && isset ($_POST['email']) && isset ($_POST['tempat']) && isset ($_POST['tanggal']) && isset ($_POST['alamat']) && ($_POST['gender']));
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $email = $_POST['email'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
    ?>

    Selamat Datang <b> <?php echo $nama; ?></b>
    Nim: <?php echo $nim; ?> <br>
    Email: <?php echo $email; ?> <br>
    Tempat, Tanggal Lahir: <?php echo $tempat; ?> , <?php echo $tanggal; ?> <br>
    Alamat: <?php echo $alamat; ?> <br>
    Gender: <?php echo $gender; ?> <br>
</body>
</html> 