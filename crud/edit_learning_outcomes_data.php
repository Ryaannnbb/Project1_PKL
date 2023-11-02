<?php
require_once('../function/koneksi.php');

if (isset($_POST['ubah'])) {
    $id = $_POST['id'];
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $id_mapel = $_POST['id_mapel'];
    $nilai = $_POST['nilai'];

    // Pemeriksaan apakah nilai negatif
    if ($nilai < 0) {
        echo "<script>
            alert('The score cannot be negative. Please enter a valid score.');
            window.history.back();
            </script>";
    } else {
        // Query untuk mengambil data hasil studi yang ada
        $query = mysqli_query($koneksi, "SELECT * FROM tb_hasil_studi WHERE id = '$id'");
        $existingData = mysqli_fetch_assoc($query);

        // Periksa apakah data yang dimasukkan sama dengan data yang ada
        if (
            $id_mahasiswa === $existingData['id_mahasiswa'] &&
            $id_mapel === $existingData['id_mapel'] &&
            $nilai === $existingData['nilai']
        ) {
            echo "<script>
                alert('Data that you entered is the same as the existing data. Please make changes to update.');
                window.location.href = '../pages/learning_outcomes_data.php';
                </script>";
        } elseif (empty($id_mahasiswa) || empty($id_mapel) || empty($nilai)) {
            echo "<script>
                alert('Please fill out the form completely before updating.');
                window.history.back();
                </script>";
        } elseif ($nilai > 100) {
            echo "<script>
                alert('The score cannot be more than 100. Please enter a valid score.');
                window.history.back();
                </script>";
        } else {
            // Eksekusi query untuk mengubah data
            $ubah = mysqli_query($koneksi, "UPDATE tb_hasil_studi SET
                id_mahasiswa = '$id_mahasiswa',
                id_mapel = '$id_mapel',
                nilai = '$nilai'
                WHERE id = '$id'
            ");

            if ($ubah) {
                echo "<script>
                    alert('Data updated successfully!');
                    window.location.href = '../pages/learning_outcomes_data.php';
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