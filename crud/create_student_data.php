<?php
require_once('../function/koneksi.php');

if (isset($_POST['simpan'])) {
    $simpan = mysqli_query($koneksi,"INSERT INTO tb_mahasiswa (nama_mahasiswa, jurusan, hobi, alamat)
                                    VALUES('$_POST[nama_mahasiswa]',
                                           '$_POST[jurusan]',
                                           '$_POST[hobi]',
                                           '$_POST[alamat]')");
    if ($simpan) {
        echo "<script>
                alert('Data saved successfully!');
                window.location.href = '../pages/student_data.php';
                </script>";
    } else {
        echo "<script>
                alert('Failed to save data!');
                window.history.back();
            </script>";
    }
}
?>
