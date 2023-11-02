<?php

require_once('../function/koneksi.php');

if (isset($_POST['ubah'])) {
    $id = $_POST['id'];
    $nama_guru = $_POST['nama_guru'];

    if (empty($nama_guru)) {
        echo "<script>
            alert('Please fill out the form completely before updating.');
            window.history.back();
        </script>";
    } else {
        $query = mysqli_query($koneksi, "SELECT nama_guru FROM tb_guru WHERE id = $id");
        $currentData = mysqli_fetch_assoc($query);

        if ($nama_guru === $currentData['nama_guru']) {
            echo "<script>
                alert('Data that you entered is the same as the existing data. Please make changes to update.');
                window.history.back();
            </script>";
        } else {
            // Update the data
            $ubah = mysqli_query($koneksi, "UPDATE tb_guru SET
                nama_guru = '$nama_guru'
                WHERE id = $id
            ");

            if ($ubah) {
                echo "<script>
                    alert('Data updated successfully!');
                    window.location.href = '../pages/teacher_data.php';
                </script>";
            } else {
                echo "<script>
                    alert('Failed to update data. Please try again.');
                    window.history.back();
                </script>";
            }
        }
    }
}
?>
