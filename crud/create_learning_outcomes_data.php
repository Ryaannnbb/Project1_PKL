<?php

require_once('../function/koneksi.php');

if (isset($_POST['simpan'])) {
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $id_mapel = $_POST['id_mapel'];
    $nilai = $_POST['nilai'];

    $simpan = mysqli_query($koneksi, "INSERT INTO tb_hasil_studi (id_mahasiswa, id_mapel, nilai)
                                    VALUES('$id_mahasiswa', '$id_mapel', '$nilai')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                window.history.back();
                </script>";
        header('location: ../pages/learning_outcomes_data.php');
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                window.history.back();
            </script>";
    }
}

?>
