<?php
session_start(); // Mulai sesi
$_SESSION = array(); // Mengosongkan semua variabel sesi
session_destroy(); // Menghancurkan sesi
header("Location: login.php"); // Redirect ke halaman login
exit;
?>
