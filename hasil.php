<?php
require 'functions/functions.php';

$data = query("SELECT * FROM pendaftar ORDER BY id desc");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Beasiswa | JWD Assessment</title>

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
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
            <a class="btn btn-outline-secondary text-white" aria-current="page" href="daftar.php">Daftar</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link btn btn-secondary text-white active" aria-current="page" href="hasil.php">Hasil</a>
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
        <table id="pendaftar" class="table table-responsive">
          <thead>
            <tr>
              <th width="2%" style="text-align: center;">No. </th>
              <th width="20%" style="text-align: center;">Nama</th>
              <th width="20%" style="text-align: center;">Email</th>
              <th width="15%" style="text-align: center;">Semester</th>
              <th width="25%" style="text-align: center;">Beasiswa</th>
              <th width="25%" style="text-align: center;">Status Pengajuan</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1;
            foreach ($data as $item) : ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $item['nama'] ?></td>
                <td><?= $item['email'] ?></td>
                <td><?= $item['semester'] ?></td>
                <td><?= $item['beasiswa'] ?></td>
                <td>
                  <a href="detail-hasil.php?id=<?= $item['id'] ?>" class="badge rounded-pill text-bg-warning">Lihat Status  </a>  
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
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

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery-3.7.0.js"></script>
  <script src="assets/js/jquery.dataTables.min.js"></script>
  <script>
    $("#pendaftar").DataTable({
      dom: 'Bf' + 'rtp',
    });
  </script>
</body>

</html>