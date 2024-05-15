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
    // Inisialisasi variabel
    $name = $password = "";
    $nameErr = $passwordErr = "";
    $loginSuccess = false;

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Login</h2>
    <?php if (!$loginSuccess) : ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Username: <input type="text" name="u">
            <span class="error"> <?php echo $nameErr; ?> </span>
            <br><br>
            Password: <input type="password" name="p">
            <span class="error"> <?php echo $passwordErr; ?> </span>
            <br><br>
            <input type="submit" value="Login">
        </form>
    <?php else : ?>
        <p>Login successful. Welcome, <?php echo $name; ?>!</p>
    <?php endif; ?>
</body>
</html>
