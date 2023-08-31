<?php
require 'functions/functions.php';

if (isset($_POST["daftar"])) {
  if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    if (tambah($_POST) > 0) {
      $data = query("SELECT * FROM pendaftar ORDER BY id desc");
      echo "<script>alert('Data Telah Didaftarkan!'); document.location.href = 'detail-hasil.php?id=" . $data[0]['id'] . "';</script>";
    } else {
      echo "<script>alert('Data Gagal Didaftarkan!'); history.back()</script>";
    }
  }

  $error = 1;
}

$pilihBeasiswa = $_POST['beasiswa'] ?? null;
// const IPK = 3.4;
const IPK = '2.9';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Beasiswa | JWD Assessment</title>

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-4">
          <li class="nav-item">
            <a class="btn btn-outline-secondary text-white" aria-current="page" href="index.php">Pilihan Beasiswa</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link btn btn-secondary text-white active" aria-current="page" href="daftar.php">Daftar</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn btn-outline-secondary text-white" aria-current="page" href="hasil.php">Hasil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Content -->
  <div class="container mt-4">
    <section id="section_2" class="d-flex justify-content-center align-items-center">
      <div class="container text-center">
        <div class="row">
          <h2>Daftar Beasiswa</h2>
          <div class="col">
            <center>
              <!-- Form -->
              <div class="card" style="width: 60%;">
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="mb-2 row p-2 text-start">
                    <label for="nama" class="col-sm-4 col-form-label">Masukkan Nama : </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nama" require>
                    </div>
                  </div>
                  <div class="mb-2 row p-2 text-start">
                    <label for="email" class="col-sm-4 col-form-label">Masukkan Email : </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="email" require>
                      <div class="text-danger" id="format" role="alert" style="display: none;">
                        Format Email Salah !
                      </div>
                    </div>
                  </div>
                  <div class="mb-2 row p-2 text-start">
                    <label for="no_hp" class="col-sm-4 col-form-label">nomor HP : </label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="no_hp" require>
                    </div>
                  </div>
                  <div class="mb-2 row p-2 text-start">
                    <label for="semester" class="col-sm-4 col-form-label">Semester saat ini : </label>
                    <div class="col-sm-8">
                      <select class="form-select" name="semester" require>
                        <option selected disabled>-- Pilih Semester --</option>
                        <?php for ($i = 1; $i <= 8; $i++) : ?>
                          <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor ?>
                      </select>
                    </div>
                  </div>
                  <div class="mb-2 row p-2 text-start">
                    <label for="ipk" class="col-sm-4 col-form-label">IPK terakhir : </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="ipk" name="ipk" value="<?= IPK ?>" readonly require>
                    </div>
                  </div>
                  <div class="mb-2 row p-2 text-start">
                    <label for="beasiswa" class="col-sm-4 col-form-label">Pilihan Beasiswa : </label>
                    <div class="col-sm-8">
                      <select class="form-select" id="beasiswa" name="beasiswa" autofocus require>
                        <option selected disabled>-- Pilih Beasiswa --</option>
                        <?php if ($pilihBeasiswa == 'akademik') : ?>
                          <option value="Beasiswa Akademik" selected>Beasiswa Akademik</option>
                          <option value="Beasiswa Non-Akademik">Beasiswa Non-Akademik</option>
                          <option value="Beasiswa Bidang Studi">Beasiswa Bidang Studi</option>
                          <option value="Beasiswa Bantuan Ekonomi">Beasiswa Bantuan Ekonomi</option>
                        <?php elseif ($pilihBeasiswa == 'non_akademik') : ?>
                          <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                          <option value="Beasiswa Non-Akademik" selected>Beasiswa Non-Akademik</option>
                          <option value="Beasiswa Bidang Studi">Beasiswa Bidang Studi</option>
                          <option value="Beasiswa Bantuan Ekonomi">Beasiswa Bantuan Ekonomi</option>
                        <?php elseif ($pilihBeasiswa == 'studi') : ?>
                          <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                          <option value="Beasiswa Non-Akademik">Beasiswa Non-Akademik</option>
                          <option value="Beasiswa Bidang Studi" selected>Beasiswa Bidang Studi</option>
                          <option value="Beasiswa Bantuan Ekonomi">Beasiswa Bantuan Ekonomi</option>
                        <?php elseif ($pilihBeasiswa == 'bantuan') : ?>
                          <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                          <option value="Beasiswa Non-Akademik">Beasiswa Non-Akademik</option>
                          <option value="Beasiswa Bidang Studi">Beasiswa Bidang Studi</option>
                          <option value="Beasiswa Bantuan Ekonomi" selected>Beasiswa Bantuan Ekonomi</option>
                        <?php else : ?>
                          <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                          <option value="Beasiswa Non-Akademik">Beasiswa Non-Akademik</option>
                          <option value="Beasiswa Bidang Studi">Beasiswa Bidang Studi</option>
                          <option value="Beasiswa Bantuan Ekonomi">Beasiswa Bantuan Ekonomi</option>
                        <?php endif ?>
                      </select>
                    </div>
                  </div>
                  <div class="mb-2 row p-2 text-start">
                    <label for="berkas" class="col-sm-4 col-form-label">Upload Berkas Syarat : </label>
                    <div class="col-sm-8">
                      <input type="file" class="form-control" id="berkas" name="berkas" require>
                    </div>
                  </div>
                  <div class="row justify-content-around mt-3 pb-3">
                    <div class="col-sm-6">
                      <button type="submit" class="btn btn-success col-sm-6" id="daftar" name="daftar">Daftar
                    </div>
                    <div class="col-sm-6">
                      <a href="index.php" class="btn btn-danger col-sm-6">Batal</a>
                    </div>
                  </div>
                </form>
              </div>
              <!-- Form -->
            </center>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- Content -->

  <!-- Footer -->
  <div class="mt-4">
    <footer class="text-black text-center text-lg-start">
      <div class="text-center p-3" style="background-color: #4FC0D0;">
        Copyright © Junior Web Developer 2023
      </div>
    </footer>
  </div>
  <!-- Footer -->

  <script src="assets/js/jquery-3.7.0.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script>
    let ipk = $("#ipk").val();

    /* Cek nilai IPK */
    if (ipk < 3) {
      $("#beasiswa").attr('disabled', 'disabled');
      $("#berkas").attr('disabled', 'disabled');
      $("#daftar").attr('disabled', 'disabled');
    }

    $("#beasiswa").focus();

    /* Cek validasi email */
    if ("<?= $error ?? 0 ?>" == 1) {
      $('#format').show();
    }
  </script>
</body>

</html>