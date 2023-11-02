<?php
require_once('../function/koneksi.php'); // Mengimpor file koneksi.php untuk menghubungkan ke database.

if (isset($_POST['hapus'])) { // Memeriksa apakah form telah disubmit dengan tombol 'hapus'.

    // Melakukan query SQL untuk menghapus data dari tabel tb_kelas berdasarkan ID yang diterima dari form.
    $hapus = mysqli_query($koneksi, "DELETE FROM tb_kelas WHERE id = '$_POST[id]'");
    
    if ($hapus) { // Memeriksa apakah query eksekusi berhasil.
        
        // Jika berhasil, menampilkan pesan sukses dan mengarahkan ke halaman lain.
        echo "<script>
                alert('Data Delete Successfully!');   
                window.location.href = '../pages/classroom_data.php';
              </script>";

    } else { // Jika query eksekusi gagal.

        // Menampilkan pesan gagal dan mengarahkan kembali ke halaman sebelumnya.
        echo "<script>
                alert('Failed To Delete Data!');
                window.history.back();
              </script>";
    }
}
?>