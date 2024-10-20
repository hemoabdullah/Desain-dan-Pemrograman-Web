<!DOCTYPE html>
<html>
<head>
    <title> HOME PAGE </title>
</head>
<body>
    <?php
        session_start();

        if($_SESSION['status'] == 'login') {
            echo "Selamat datang " . $_SESSION['username'];
            ?>
            <br> <a href="sessionLogout.php"> Log Out</a>
        <?php
        } else {
            echo "Anda belum logi, silahkan "?>
            <a href="sessionLoginForm.html">Log In</a>
        <?php
        }
    ?>
</body>
</html>