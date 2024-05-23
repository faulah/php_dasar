<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang</title>
</head>
<body>
<?php
session_start(); // Mulai sesi


// Cek apakah user sudah login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php"); // Redirect ke halaman login jika belum login
    exit;
}
?>


    <h1>Selamat Datang, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>
    <h2>Anda berhasil login, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
