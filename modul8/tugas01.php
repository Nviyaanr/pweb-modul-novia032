<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];

            if (empty($name) || empty($email)) {
                header("Location: tugas02.php");
                exit;
            } else {
                $login_time = date("H:i:s");
                $login_date = date("Y-m-d");
                $login_day = date("l");

                echo "Selamat datang, " . $name . "!<br>";
                echo "Email: " . $email . "<br>";
                echo "Waktu login: " . $login_time . "<br>";
                echo "Tanggal login: " . $login_date . "<br>";
                echo "Hari login: " . $login_day . "<br>";
            }
        } else {
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Login">
    </form>
    <?php
        }
    ?>
</body>
</html>