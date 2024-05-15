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
    <?php
    $name = $email = "";
    $nameErr = $emailErr = "";

    // Fungsi untuk membersihkan data input
    function cleanInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Penanganan form saat metode POST digunakan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["u"])) {
            $nameErr = "Masukkan username";
        } else {
            $name = cleanInput($_POST["u"]); // Membersihkan dan menyimpan username
        }

        if (empty($_POST["p"])) {
            $emailErr = "Masukkan password";
        } else {
            $email = cleanInput($_POST["p"]); // Membersihkan dan menyimpan password
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="u">
        <span class="error"> <?php echo $nameErr; ?> </span>
        <br><br>
        Password: <input type="password" name="p">
        <span class="error"> <?php echo $emailErr; ?> </span>
        <br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
