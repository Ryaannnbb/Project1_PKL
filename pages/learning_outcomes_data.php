<?php

require_once('../function/koneksi.php');
session_start();
if (!isset($_SESSION['id'])) {
  header("location: ../pages/index.php"); 
  exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/logo.png">
  <title>
    Student Table Data
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" target="_blank">
        <img src="../assets/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">School Data</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-house fa-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Homepage</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="student_data.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-users-viewfinder fa-lg "></i>
            </div>
            <span class="nav-link-text ms-1">Student Data</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="teacher_data.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-user-tie fa-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Teacher Data</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="subjects_mapel_data.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-book fa-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Subjects Mapel</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="classroom_data.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-school fa-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Classroom Data</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-info " href="learning_outcomes_data.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-square-poll-vertical fa-lg"></i>
            </div>
            <span class="nav-link-text ms-1">learning Outcomes</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb"> 
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">learning Outcomes</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">learning Outcomes</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="../process/proccess_logout.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign Out</span>
              </a>
            </li> 
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
              <h6 class="text-white text-capitalize ps-3 mb-0">learning Outcomes</h6>
              <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-right: 20px;">Add</button>
            </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Student</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Subjects</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Scores</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $id = 1;
                  $tampil = mysqli_query($koneksi, "SELECT tb_hasil_studi.id, tb_mahasiswa.nama_mahasiswa, tb_mapel.nama_mata_pelajaran, tb_hasil_studi.nilai, tb_hasil_studi.id_mahasiswa, tb_hasil_studi.id_mapel
                                                    FROM tb_hasil_studi
                                                    LEFT JOIN tb_mahasiswa ON tb_hasil_studi.id_mahasiswa = tb_mahasiswa.id
                                                    LEFT JOIN tb_mapel ON tb_hasil_studi.id_mapel = tb_mapel.id
                                                    ORDER BY tb_hasil_studi.id
                                                    ");
                  while ($data = mysqli_fetch_array($tampil)) :
                  ?>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm text-center"><?=$id++?></h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex px-2 py-1 text-center">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"><?= $data['nama_mahasiswa']?></h6>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm"><?= $data['nama_mata_pelajaran']?></h6>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm"><?= $data['nilai']?></h6>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <a href="#" class="text-dark font-weight-bold text-2xl" data-toggle="tooltip" data-original-title="Edit user" style="margin-left: 5px;" data-bs-toggle="modal" data-bs-target="#ModalUbah<?=$id?>">
                        <i class="fa-regular fa-pen-to-square"></i>
                      </a>
                      <a href="../crud/delete_student_data.php" class="text-dark font-weight-bold text-2xl" data-toggle="tooltip" data-original-title="Edit user" style="margin-left: 10px;" data-bs-toggle="modal" data-bs-target="#ModalHapus<?=$id?>">
                        <i class="fa-solid fa-trash-can"></i>
                      </a>
                    </td>
                  </tr>
                  <!-- Modal Tambah -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Add New Learning Outcome</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <form method="POST" action="../crud/create_learning_outcomes_data.php" role="form" onsubmit="return validateForm()">
                                      <div class="input-group input-group-outline mb-3">
                                        <select name="id_mahasiswa" class="form-control">
                                            <option value="Choose Student">Choose Student</option> <!-- Opsi default "Pilih Mahasiswa" -->
                                            <?php
                                            require_once('../function/koneksi.php'); // Memasukkan file koneksi
                                            $query = "SELECT id, nama_mahasiswa FROM tb_mahasiswa"; // Query SQL untuk mengambil data mahasiswa
                                            $result = mysqli_query($koneksi, $query); // Menjalankan query SQL dan menyimpan hasilnya ke dalam variabel $result
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                // Melakukan perulangan untuk setiap data mahasiswa yang ada
                                                echo '<option value="' . $row['id'] . '">' . $row['nama_mahasiswa'] . '</option>';
                                                // Menampilkan setiap mahasiswa sebagai opsi dalam dropdown dengan nilai (value) ID dan teks (text) nama mahasiswa
                                            }
                                            ?>
                                        </select>
                                      </div>
                                      <div class="input-group input-group-outline mb-3">
                                          <select name="id_mapel" class="form-control">
                                              <option value="Choose Subjects">Choose Subjects</option>
                                              <?php
                                              require_once('../function/koneksi.php');
                                              $query = "SELECT id, nama_mata_pelajaran FROM tb_mapel";
                                              $result = mysqli_query($koneksi, $query);
                                              while ($row = mysqli_fetch_assoc($result)) {
                                                  echo '<option value="' . $row['id'] . '">' . $row['nama_mata_pelajaran'] . '</option>';
                                              }
                                              ?>
                                          </select>
                                      </div>
                                      <div class="input-group input-group-outline mb-3">
                                          <label class="form-label">Scores</label>
                                          <input type="number" class="form-control" name="nilai">
                                      </div>  
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-dark" data-bs-dismiss="modal" onclick="resetForm()">Cancel</button>
                                      <button type="submit" class="btn btn-primary" name="simpan">Add</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
                  <!-- End Modal Tambah -->
                  <!-- Modal Edit -->
                  <div class="modal fade" id="ModalUbah<?= $id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Edit Learning Outcome</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <form method="POST" action="../crud/edit_learning_outcomes_data.php" role="form">
                                      <input type="hidden" name="id" value="<?= $data['id']?>">
                                      <div class="input-group input-group-outline mb-3">
                                        <!-- Dropdown untuk memilih mahasiswa dengan opsi yang telah dipilih -->
                                        <select name="id_mahasiswa" class="form-control">
                                            <?php
                                            require_once('../function/koneksi.php'); // Memasukkan file koneksi
                                            $query = "SELECT id, nama_mahasiswa FROM tb_mahasiswa"; // Query SQL untuk mengambil data mahasiswa
                                            $result = mysqli_query($koneksi, $query); // Menjalankan query SQL dan menyimpan hasilnya ke dalam variabel $result
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                // Melakukan perulangan untuk setiap data mahasiswa yang ada
                                                $selected = ($row['id'] == $data['id_mahasiswa']) ? 'selected' : '';
                                                // Menggunakan logika untuk menentukan apakah opsi ini harus ditandai sebagai "selected" berdasarkan data yang sedang diedit
                                                echo '<option value="' . $row['id'] . '" ' . $selected . '>' . $row['nama_mahasiswa'] . '</option>';
                                                // Menampilkan setiap mahasiswa sebagai opsi dalam dropdown dengan nilai (value) ID, teks (text) nama mahasiswa, dan status "selected" jika cocok dengan data yang sedang diedit
                                            }
                                            ?>
                                        </select>
                                      </div>
                                      <div class="input-group input-group-outline mb-3">
                                          <select name="id_mapel" class="form-control">
                                              <?php
                                              require_once('../function/koneksi.php');
                                              $query = "SELECT id, nama_mata_pelajaran FROM tb_mapel";
                                              $result = mysqli_query($koneksi, $query);
                                              while ($row = mysqli_fetch_assoc($result)) {
                                                  $selected = ($row['id'] == $data['id_mapel']) ? 'selected' : '';
                                                  echo '<option value="' . $row['id'] . '" ' . $selected . '>' . $row['nama_mata_pelajaran'] . '</option>';
                                              }
                                              ?>
                                          </select>
                                      </div>
                                      <div class="input-group input-group-outline mb-3">
                                          <input placeholder="Enter Scores" type="number" class="form-control" name="nilai" value="<?= $data['nilai']?>">
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-dark" data-bs-dismiss="modal" onclick="resetForm()">Cancel</button>
                                      <button type="submit" class="btn btn-primary" name="ubah">Save</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
                  <!-- End Modal Edit -->
                  <!-- Modal Delete -->
                  <div class="modal fade" id="ModalHapus<?= $id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                      <div class="modal-dialog">
                          <div class="modal-content">   
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Delete Learning Outcome</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <form method="POST" action="../crud/delete_learning_outcomes_data.php" role="form">
                                      <input type="hidden" name="id" value="<?= $data['id']?>" >
                                      <h5 style="text-align: center;">Apakah Anda yakin ingin menghapus data ini?</h5>
                                      <span class="text-danger" style="text-align: center; display: block; text-align: center; margin: 0 auto;">
                                          <?= $data['id']?> - <?= $data['nama_mata_pelajaran']?>
                                      </span>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-dark" data-bs-dismiss="modal" onclick="resetForm()">Cancel</button>
                                      <button type="submit" class="btn btn-primary" name="hapus">Delete</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
                  <!-- End Modal Delete -->
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
<script>
function validateForm() {
    var studentSelect = document.querySelector('select[name="id_mahasiswa"]');
    var subjectSelect = document.querySelector('select[name="id_mapel"]');
    var scoreInput = document.querySelector('input[name="nilai"]');

    if (studentSelect.value === "Choose Student" || subjectSelect.value === "Choose Subjects" || scoreInput.value === "") {
        alert("Please select a student, a subject, and enter a score before submitting the form.");
        return false;
    }

    var score = parseInt(scoreInput.value);

    if (score < 0) {
        alert("The score cannot be negative. Please enter a valid score.");
        return false;
    }

    if (score > 100) {
        alert("The score cannot be more than 100. Please enter a valid score.");
        return false;
    }


    return true;
}

function resetForm() {
    document.querySelector('select[name="id_mahasiswa"]').value = "Choose Student";
    document.querySelector('select[name="id_mapel"]').value = "Choose Subjects";
    document.querySelector('input[name="nilai"]').value = "";
}
</script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>