<?php

require_once('../function/koneksi.php');
$process = isset($_GET['process']) ? ($_GET['process']) : false;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/logo.png">
  <title>
    Sign Up
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-info h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/Sign\ up-rafiki.svg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">To create a new account, please provide the required information below.</p>
                </div>
                <div class="card-body">
                  <?php if ($process == 'failedempty') : ?>
                    <div class="alert alert-danger" style="background-color: red; padding: 1em; color: white;border-radius: 20px;">
                    Registration failed, there is an empty form
                    </div>
                  <?php endif; ?>
                  <?php if ($process == 'failedpassword') : ?>
                    <div class="alert alert-danger" style="background-color: red; padding: 1em; color: white;border-radius: 20px;">
                    Register failed, password is not the same
                    </div>
                  <?php endif; ?>
                  <?php if ($process == 'failedpasswordcomplexity') : ?>
                  <div class="alert alert-danger" style="background-color: red; padding: 1em; color: white;border-radius: 20px;">
                  Password must contain at least 8 characters with a mix of letters, numbers, and special characters.
                  </div>
                  <?php endif; ?>
                  <form method="POST" action="<?=  '../process/process_sign-up.php' ?>" role="form">
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Username</label>
                      <input name="username" type="username" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Password</label>
                      <input name="password" type="password" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Re-Password</label>
                      <input name="repassword" type="password" class="form-control">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-info btn-lg w-100 mt-4 mb-0">Sign In</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?  
                    <a href="index.php" class="text-info text-gradient font-weight-bold">Sign In</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
    document.addEventListener("DOMContentLoaded", function () {
      // Mendapatkan elemen input untuk username
      const usernameInput = document.querySelector('input[name="username"]');
      // Mendapatkan elemen form
      const form = document.querySelector("form");
      
      // Menambahkan event listener untuk menangani pengiriman formulir
      form.addEventListener("submit", function (event) {
        // Mendapatkan nilai yang dimasukkan oleh pengguna dalam input username
        const username = usernameInput.value;
        
        // Memeriksa apakah username hanya terdiri dari angka menggunakan ekspresi reguler
        if (/^\d+$/.test(username)) {
          // Jika username hanya berisi angka, tampilkan pesan kesalahan
          alert("Username must not consist of digits only.");
          event.preventDefault(); // Membatalkan pengiriman form jika username hanya berisi angka.
        }
      });
    });
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>