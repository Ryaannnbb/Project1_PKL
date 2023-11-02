<?php
require_once('../function/koneksi.php');

if (isset($_POST['ubah'])) {
    $id = $_POST['id'];
    $nama_mata_pelajaran = $_POST['nama_mata_pelajaran'];

    // Query untuk mengambil data mata pelajaran yang ada
    $query = mysqli_query($koneksi, "SELECT * FROM tb_mapel WHERE id = '$id'");
    $existingData = mysqli_fetch_assoc($query);

    // Periksa apakah data yang dimasukkan sama dengan data yang ada
    if ($nama_mata_pelajaran === $existingData['nama_mata_pelajaran']) {
        echo "<script>
                alert('Data that you entered is the same as the existing data. Please make changes to update.');
                window.location.href = '../pages/subjects_mapel_data.php';
                </script>";
    } elseif (empty($nama_mata_pelajaran)) {
        echo "<script>
                alert('Please fill out the form completely before updating.');
                window.history.back();
                </script>";
    } else {
        // Eksekusi query untuk mengubah data
        $ubah = mysqli_query($koneksi, "UPDATE tb_mapel SET
            nama_mata_pelajaran = '$nama_mata_pelajaran'
            WHERE id = '$id'
        ");

        if ($ubah) {
            echo "<script>
                    alert('Data updated successfully!');
                    window.location.href = '../pages/subjects_mapel_data.php';
                    </script>";
        } else {
            echo "<script>
                    alert('Failed to update data. Please try again.');
                    window.history.back();
                </script>";
        }
    }
}
?>
