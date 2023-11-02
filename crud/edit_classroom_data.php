<?php
require_once('../function/koneksi.php');

if (isset($_POST['ubah'])) {
    $id = $_POST['id'];
    $id_mata_pelajaran = $_POST['id_mata_pelajaran'];
    $id_guru = $_POST['id_guru'];

    // Query untuk mengambil data kelas yang ada
    $query = mysqli_query($koneksi, "SELECT * FROM tb_kelas WHERE id = '$id'");
    $existingData = mysqli_fetch_assoc($query);

    // Periksa apakah data yang dimasukkan sama dengan data yang ada
    if ($id_mata_pelajaran === $existingData['id_mata_pelajaran'] && $id_guru === $existingData['id_guru']) {
        echo "<script>
                alert('Data that you entered is the same as the existing data. Please make changes to update.');
                window.location.href = '../pages/classroom_data.php';
                </script>";
    } elseif (empty($id_mata_pelajaran) || empty($id_guru)) {
        echo "<script>
                alert('Please fill out the form completely before updating.');
                window.history.back();
                </script>";
    } else {
        // Eksekusi query untuk mengubah data
        $ubah = mysqli_query($koneksi, "UPDATE tb_kelas SET
            id_mata_pelajaran = '$id_mata_pelajaran',
            id_guru = '$id_guru'
            WHERE id = '$id'
        ");

        if ($ubah) {
            echo "<script>
                    alert('Data updated successfully!');
                    window.location.href = '../pages/classroom_data.php';
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
