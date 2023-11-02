<?php
require_once('../function/koneksi.php');

if (isset($_POST['simpan'])) {
    $simpan = mysqli_query($koneksi, "INSERT INTO tb_guru (nama_guru)
                                    VALUES('$_POST[nama_guru]')");
    if ($simpan) {
        echo "<script>
                alert('Data saved successfully!');
                window.location.href = '../pages/teacher_data.php';
                </script>";
    } else {
        echo "<script>
                alert('Failed to save data!');
                window.location.href = '../pages/teacher_data.php';
            </script>";
    }
}
?>
