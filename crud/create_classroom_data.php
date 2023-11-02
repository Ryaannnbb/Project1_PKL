<?php
require_once('../function/koneksi.php'); // Mengimpor file koneksi.php untuk menghubungkan ke database.

if (isset($_POST['simpan'])) { // Memeriksa apakah form telah disubmit dengan tombol 'simpan'.

    // Mengambil nilai dari form dan menyimpannya dalam variabel.
    $id_mata_pelajaran = $_POST['id_mata_pelajaran'];
    $id_guru = $_POST['id_guru'];

    // Menjalankan query SQL untuk memasukkan data ke dalam tabel tb_kelas.
    $simpan = mysqli_query($koneksi, "INSERT INTO tb_kelas (id_mata_pelajaran, id_guru) VALUES('$id_mata_pelajaran', '$id_guru')");

    if ($simpan) { // Memeriksa apakah query eksekusi berhasil.

        // Menampilkan pesan berhasil dan mengarahkan ke halaman lain jika berhasil.
        echo "<script>
                alert('Data saved successfully!');
                window.location.href = '../pages/classroom_data.php';
              </script>";

    } else { // Jika query eksekusi gagal.

        // Menampilkan pesan gagal dan mengarahkan kembali ke halaman sebelumnya.
        echo "<script>
                alert('Failed to save data. Please try again.');
                window.history.back();
              </script>";
    }
}
?>