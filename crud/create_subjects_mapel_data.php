<?php

require_once('../function/koneksi.php');

if (isset($_POST['simpan'])) {
    $simpan = mysqli_query($koneksi,"INSERT INTO tb_mapel (nama_mata_pelajaran)
                                    VALUES('$_POST[nama_mata_pelajaran]')");
    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                window.location.href = '../pages/subjects_mapel_data.php';
                </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                window.history.back();
            </script>";
    }
}

?>