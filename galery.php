<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Gambar</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 800px;
        }
        .gallery img {
            width: 150px;
            margin: 5px;
            transition: transform 0.2s;
        }
        .gallery img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="gallery">
        <?php
        $folder = 'gambar/'; // Direktori folder gambar
        $filetype = '*.jpg'; // Jenis file gambar (dalam contoh ini hanya jpg)

        // Mengambil list file gambar dalam folder sesuai jenis file yang ditentukan
        $files = glob($folder.$filetype);

        // Menampilkan semua file gambar dalam folder tersebut
        $count = 0;
        foreach($files as $file) {
            // Menampilkan gambar dengan tag <img>
            echo '<img src="'.$file.'" alt="Gambar">';

            // Menghitung jumlah gambar yang ditampilkan
            $count++;

            // Setiap lima gambar, tambahkan baris baru
            if ($count % 5 === 0) {
                echo '<br>';
            }
        }
        ?>
    </div>
</body>
</html>
