<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>People Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 40%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Membuat array dengan index nama dan umur
$people = array(
    array("Name" => "John Doe", "Age" => 25),
    array("Name" => "Jane Smith", "Age" => 30),
    array("Name" => "Alice Johnson", "Age" => 22),
    array("Name" => "Chris Lee", "Age" => 28),
    array("Name" => "Emily Davis", "Age" => 35),
    array("Name" => "Michael Brown", "Age" => 40),
    array("Name" => "Linda Wilson", "Age" => 27),
    array("Name" => "David Martinez", "Age" => 33),
    array("Name" => "Sarah Taylor", "Age" => 29),
    array("Name" => "James Anderson", "Age" => 31),
    array("Name" => "Patricia Thomas", "Age" => 45),
    array("Name" => "Robert Jackson", "Age" => 50),
    array("Name" => "Jennifer White", "Age" => 26),
    array("Name" => "Charles Harris", "Age" => 37),
    array("Name" => "Jessica Clark", "Age" => 24)
);

// Konversi array ke JSON
$jsonData = json_encode($people);

// Dekode JSON menjadi array PHP
$peopleArray = json_decode($jsonData, true);

// Membangun tabel HTML dari array
echo "<table>";
echo "<tr><th>Nama</th><th>Umur</th></tr>";
foreach ($peopleArray as $person) {
    echo "<tr>";
    echo "<td>" . $person['Name'] . "</td>";
    echo "<td>" . $person['Age'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>
