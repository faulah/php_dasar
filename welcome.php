<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
<?php
session_start(); // Mulai session

// Cek jika pengguna belum login (tidak ada sesi user_id)
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php"); // Redirect ke halaman login jika belum login
    exit();
}
?>
    <h2>Welcome</h2>
    <?php
    // Ambil username dari sesi user_id
    $username = "Admin"; // Contoh penggunaan, seharusnya diambil dari database atau sumber data lainnya
    echo "<p>Welcome, $username! You are now logged in.</p>";
    ?>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>