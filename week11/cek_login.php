<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'config/connect.php';
include 'function/pesan_kilat.php';
include 'function/anti_injection.php';

$username = antiinjection($conn, $_POST['username']);
$password = antiinjection($conn, $_POST['password']);

$query = "SELECT username, level, salt, password as password_hash FROM user WHERE username = '$username'";
$result = mysqli_query($conn, $query);

// Check if query was successful and if the user exists
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $salt = $row['salt'];
    $password_hash = $row['password_hash'];  // Corrected here

    if ($salt !== null && $password_hash !== null) {
        $combined_password = $salt . $password;
        if (password_verify($combined_password, $password_hash)) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['level'] = $row['level'];
            header('Location: index.php');
            exit();
        } else {
            pesan('danger', "Login Gagal, Password Anda Salah");
            header('Location: login.php');
            exit();
        }
    } else {
        pesan('warning', "Login Gagal, Data tidak lengkap");
        header('Location: login.php');
        exit();
    }
} else {
    pesan('warning', "Login Gagal, Username Tidak Ditemukan");
    header('Location: login.php');
    exit();
}

mysqli_close($conn);
?>
