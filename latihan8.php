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
    <?php
    $array = array(
        "1C" => array("udin", "ismail", "adi"),
        "1D" => array("lukman", "fajri", "mahmud")
    );

    print_r($array);

    print_r($array['1D']);

    echo $array['1D'][0];

    echo $array['1D'][1];

    echo $array['1C'][2];
    ?>
</body>
</html>
