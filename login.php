<?php
session_start(); // Mulai sesi
$name = $password = "";
$nameErr = $passwordErr = "";
$errorMsg = ""; // Variabel untuk pesan kesalahan umum

// Fungsi untuk membersihkan data input
function cleanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Penanganan form saat metode POST digunakan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        if (empty($_POST["u"])) {
            $nameErr = "Masukkan username";
        } else {
            $name = cleanInput($_POST["u"]); // Membersihkan dan menyimpan username
        }

        if (empty($_POST["p"])) {
            $passwordErr = "Masukkan password";
        } else {
            $password = cleanInput($_POST["p"]); // Membersihkan dan menyimpan password
        }

        // Misalnya username dan password adalah 'admin' dan 'password'
        if ($name === 'faulah' && $password === '1') {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $name;
            header("Location: welcome.php"); // Redirect ke halaman selamat datang
            exit;
        } else {
            throw new Exception("Username atau password salah");
        }
    } catch (Exception $e) {
        $errorMsg = $e->getMessage(); // Menyimpan pesan kesalahan
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="u">
        <span class="error"> <?php echo $nameErr; ?> </span>
        <br><br>
        Password: <input type="password" name="p">
        <span class="error"> <?php echo $passwordErr; ?> </span>
        <br><br>
        <input type="submit" value="Login">
        <br><br>
        <span class="error"> <?php echo $errorMsg; ?> </span>
    </form>
</body>
</html>
