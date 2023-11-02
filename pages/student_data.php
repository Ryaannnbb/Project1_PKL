<?php

require_once('../function/koneksi.php');

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
          <a class="nav-link text-white " href="dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-house fa-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Homepage</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-info" href="student_data.php">
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
          <a class="nav-link text-white " href="learning_outcomes_data.php">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Student Data</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Student Data</h6>
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
              <h6 class="text-white text-capitalize ps-3 mb-0">Student Data</h6>
              <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-right: 20px;">Add</button>
            </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Student</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jurusan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hobby</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $id = 1;
                    $tampil = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa ORDER BY id");
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
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?= $data['nama_mahasiswa']?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"><?= $data['jurusan']?></h6>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"><?= $data['hobi']?></h6>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"><?= $data['alamat']?></h6>
                        </div>
                      </td>
                      <td class="align-middle">
                        <a href="#" class="text-dark font-weight-bold text-2xl" data-toggle="tooltip" data-original-title="Edit user" style="margin-left: 5px;" data-bs-toggle="modal" data-bs-target="#ModalUbah<?=$id?>">
                          <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        <a href="../crud/delete_student_data.php" class="text-dark font-weight-bold text-2xl" data-toggle="tooltip" data-original-title="Edit user" style="margin-left: 10px;" data-bs-toggle="modal" data-bs-target="#ModalHapus<?=$id?>" onclick="return confirm('Anda tidak bisa menghapus data.');">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                      </td>
                    </tr>
                      <!-- Modal Tambah -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form method="POST" action="../crud/create_student_data.php" role="form" onsubmit="return validateForm()">
                                          <div class="input-group input-group-outline mb-3">
                                              <label class="form-label">Name</label>
                                              <input type="text" class="form-control" name="nama_mahasiswa">
                                          </div>
                                          <div class="input-group input-group-outline mb-3">
                                              <select name="jurusan" class="form-control">
                                                <option value="Choose A Major">Choose A Major</option>
                                                <option value="Software Engineering">Software Engineering</option>
                                                <option value="Multimedia">Multimedia</option>
                                                <option value="Software Tester">Software Tester</option>
                                                <option value="Web Development">Web Development</option>
                                                <option value="Database Management">Database Management</option>
                                                <option value="Network Security">Network Security</option>
                                                <option value="Data Science">Data Science</option>
                                                <option value="Artificial Intelligence">Artificial Intelligence</option>
                                                <option value="Game Development">Game Development</option>
                                                <option value="Mobile App Development">Mobile App Development</option>
                                              </select>
                                          </div>
                                          <div class="input-group input-group-outline mb-3">
                                              <label class="form-label">Hobby</label>
                                              <input type="text" class="form-control" name="hobi">
                                          </div>
                                          <div class="input-group input-group-outline mb-3">
                                              <label class="form-label">Address</label>
                                              <input type="text" class="form-control" name="alamat">
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
                      <div class="modal fade" id="ModalUbah<?= $id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form method="POST" action="../crud/edit_student_data.php" role="form">
                                          <input type="hidden" name="id" value="<?= $data['id']?>">
                                          <div class="input-group input-group-outline mb-3">
                                              <input placeholder="Enter Student Name" type="text" class="form-control" name="nama_mahasiswa" value="<?= $data['nama_mahasiswa']?>">
                                          </div>
                                          <div class="input-group input-group-outline mb-3">
                                            <select name="jurusan" class="form-control">
                                              <option value="<?= $data['jurusan']?>"><?= $data['jurusan']?></option>
                                              <option value="Software Engineering">Software Engineering</option>
                                              <option value="Multimedia">Multimedia</option>
                                              <option value="Software Tester">Software Tester</option>
                                              <option value="Web Development">Web Development</option>
                                              <option value="Database Management">Database Management</option>
                                              <option value="Network Security">Network Security</option>
                                              <option value="Data Science">Data Science</option>
                                              <option value="Artificial Intelligence">Artificial Intelligence</option>
                                              <option value="Game Development">Game Development</option>
                                              <option value="Mobile App Development">Mobile App Development</option>
                                            </select>
                                          </div>
                                          <div class="input-group input-group-outline mb-3">
                                              <input placeholder="Enter Student Hobbies" type="text" class="form-control" name="hobi" value="<?= $data['hobi']?>">
                                          </div>
                                          <div class="input-group input-group-outline mb-3">
                                              <input placeholder="Enter Student Address" type="text" class="form-control" name="alamat" value="<?= $data['alamat']?>">
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
                      
                      <!-- Modal Hapus -->
                      <div class="modal fade" id="ModalHapus<?= $id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form method="POST" action="../crud/delete_student_data.php" role="form">
                                          <input type="hidden" name="id" value="<?= $data['id']?>">
                                          <h5 style="text-align: center;">Apakah Anda yakin ingin menghapus data ini?</h5>
                                          <span class="text-danger" style="text-align: center; display: block; text-align: center; margin: 0 auto;">
                                              <?= $data['id']?> - <?= $data['nama_mahasiswa']?>
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
                      <!-- End Modal Hapus -->
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
        // Ambil nilai dari input
        var nama_mahasiswa = document.getElementsByName('nama_mahasiswa')[0].value;
        var jurusan = document.getElementsByName('jurusan')[0].value;
        var hobi = document.getElementsByName('hobi')[0].value;
        var alamat = document.getElementsByName('alamat')[0].value;

        // Periksa apakah ada yang kosong
        if (nama_mahasiswa === "" || jurusan === "Choose A Major" || hobi === "" || alamat === "") {
            alert("Please fill in all fields in the form.");
            return false; // Mencegah pengiriman formulir jika ada yang kosong
        }
        return true; // Mengizinkan pengiriman formulir jika semua input diisi
    }
    function resetForm() {
    // Menghapus nilai dari semua input dalam formulir modal
    document.getElementById('modalForm').reset();
    }
</script> 
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>