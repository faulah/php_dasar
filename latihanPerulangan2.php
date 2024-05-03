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
    <h1> Perulangan </h1>
<?php

// Define the lower and upper bounds of the number range
$lowerBound = 12;
$upperBound = 3251;

// Define a function to check whether a number is odd or even
function oddEven($number) {
  if ($number % 2 == 0) {
    return "Genap";
  } else {
    return "Ganjil";
  }
}

// Iterate through each number in the range
for ($number = $lowerBound; $number <= $upperBound; $number++) {
  // Display the number and its odd/even status
  echo "Nomor: {$number} " . oddEven($number) . "\n";
}

?>
</body>
</html>
