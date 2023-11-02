<?php

session_start();
require_once('../function/koneksi.php');

// Cek apakah pengguna sudah login
if (isset($_SESSION['id'])) {
    header("location: ../pages/dashboard.php");
    exit();
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query =  mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'");

    if (mysqli_num_rows($query) != 0) {
        $row = mysqli_fetch_assoc($query);

        // Simpan informasi pengguna dalam sesi
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];

        echo '<script>alert("Login Successfully!"); window.location = "../pages/dashboard.php"</script>';
    } else {
        echo '<script>alert("Wrong Password!");</script>';
        echo '<script>window.history.back();</script>';
    }
} else {
    // Tangani jika username dan password tidak diberikan dalam permintaan POST
    echo 'Permintaan Tidak Valid';
}
?>
