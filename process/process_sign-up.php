<?php
require_once('../function/koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

// Define a regular expression pattern for a complex password
$password_pattern = '/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#\$%^&*]).{8,}$/';

if (empty($username) || empty($password) || empty($repassword)) {
    header("location: ../pages/sign-up.php?process=failedempty");
} else {
    if ($password != $repassword) {
        header("location: ../pages/sign-up.php?process=failedpassword");
    } elseif (!preg_match($password_pattern, $password)) {
        // Password doesn't meet complexity requirements, show an alert
        echo '<script>';
        echo 'alert("Password must contain at least 8 characters with a mix of letters, numbers, and special characters");';
        echo 'window.location.href = "../pages/sign-up.php?process=failedpasswordcomplexity";';
        echo '</script>';
    } else {
        $query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$username'");
        if (mysqli_num_rows($query) != 0) {
            // Username already exists, show an alert
            echo '<script>';
            echo 'alert("Username already exists. Please choose a different username.");';
            echo 'window.location.href = "../pages/sign-up.php?process=failedusername";';
            echo '</script>';
        } else {
            // Insert the user data into the database
            mysqli_query($koneksi, "INSERT INTO tb_user (username, password) VALUES ('$username', '$password')");
            
            // Redirect to success page
            echo '<script>';
            echo 'alert("Successfully created an account. You can log in now.");';
            echo 'window.location.href = "../pages/index.php?process=successsign-up";';
            echo '</script>';
        }
    }
}
?>
