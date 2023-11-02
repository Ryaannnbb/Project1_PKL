<?php
require_once('../function/koneksi.php');

if (isset($_POST['ubah'])) {
    $id = $_POST['id'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $jurusan = $_POST['jurusan'];
    $hobi = $_POST['hobi'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE id = '$id'");
    $existingData = mysqli_fetch_assoc($query);

    if (
        $nama_mahasiswa === $existingData['nama_mahasiswa'] &&
        $jurusan === $existingData['jurusan'] &&
        $hobi === $existingData['hobi'] &&
        $alamat === $existingData['alamat']
    ) {
        echo "<script>
                alert('Data that you entered is the same as the existing data. Please make changes to update.');
                window.location.href = '../pages/student_data.php';
                </script>";
    } else if (empty($nama_mahasiswa) || empty($jurusan) || empty($hobi) || empty($alamat)) {
        echo "<script>
                alert('Please fill out the form completely before updating.');
                window.history.back();
                </script>";
    } else {
        $ubah = mysqli_query($koneksi, "UPDATE tb_mahasiswa SET
            nama_mahasiswa = '$nama_mahasiswa',
            jurusan = '$jurusan',
            hobi = '$hobi',
            alamat = '$alamat'
            WHERE id = '$id'
        ");
        
        if ($ubah) {
            echo "<script>
                    alert('Data updated successfully!');
                    window.location.href = '../pages/student_data.php';
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
