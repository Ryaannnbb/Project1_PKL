<?php 

require_once('../function/koneksi.php');


if (isset($_POST['hapus'])) {
    $hapus = mysqli_query($koneksi,"DELETE FROM tb_mapel WHERE id = '$_POST[id]'");
    if ($hapus) {
        echo "<script>
                alert('Data Delete Successfully!');   
                window.location.href = '../pages/subjects_mapel_data.php';
                </script>";
    } else {
        echo "<script>
                alert('Failed To Delete Data!');
                window.history.back();
            </script>";
    }
}

?>