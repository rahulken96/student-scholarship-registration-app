<?php
require 'functions/functions.php';
$id = $_GET['id'];

$data = query("SELECT * FROM pendaftar WHERE id LIKE '%$id%'")[0];
if (!isset($data)) {
  echo "<script>history.back()</script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Hasil | JWD Assessment</title>

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <style>
    @media print {
      @page {
        margin-top: 0;
        margin-bottom: 0;
      }

      .card{
        width: 100% !important;
        height: 100% !important;
      }

      body {
        -webkit-print-color-adjust: exact;
      }

      #cetak {
        display: none !important;
      }

      #kembali {
        display: none !important;
      }

    }
  </style>
</head>

<body>
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
                <div class="mb-2 row p-2 text-start">
                  <label for="nama" class="col-sm-4 col-form-label">Masukkan Nama : </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>" readonly require>
                  </div>
                </div>
                <div class="mb-2 row p-2 text-start">
                  <label for="email" class="col-sm-4 col-form-label">Masukkan Email : </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="email" value="<?= $data['email'] ?>" readonly require>
                    <div class="text-danger" id="format" role="alert" style="display: none;">
                      Format Email Salah !
                    </div>
                  </div>
                </div>
                <div class="mb-2 row p-2 text-start">
                  <label for="no_hp" class="col-sm-4 col-form-label">nomor HP : </label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" name="no_hp" value="<?= $data['noHP'] ?>" readonly require>
                  </div>
                </div>
                <div class="mb-2 row p-2 text-start">
                  <label for="semester" class="col-sm-4 col-form-label">Semester saat ini : </label>
                  <div class="col-sm-8">
                    <select class="form-select" name="semester" readonly require>
                      <option disabled>-- Pilih Semester --</option>
                      <option value="<?= $data['semester'] ?>" selected><?= $data['semester'] ?></option>
                    </select>
                  </div>
                </div>
                <div class="mb-2 row p-2 text-start">
                  <label for="ipk" class="col-sm-4 col-form-label">IPK terakhir : </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="ipk" name="ipk" value="<?= $data['ipk'] ?>" readonly require>
                  </div>
                </div>
                <div class="mb-2 row p-2 text-start">
                  <label for="beasiswa" class="col-sm-4 col-form-label">Pilihan Beasiswa : </label>
                  <div class="col-sm-8">
                    <select class="form-select" id="beasiswa" name="beasiswa" readonly require>
                      <option selected disabled>-- Pilih Beasiswa --</option>
                      <option value="<?= $data['beasiswa'] ?>" selected><?= $data['beasiswa'] ?></option>
                    </select>
                  </div>
                </div>
                <div class="mb-2 row p-2 text-start">
                  <label for="berkas" class="col-sm-4 col-form-label">Upload Berkas Syarat : </label>
                  <div class="col-sm-8">
                    <a href="upload/<?= $data['berkas'] ?>"><?= $data['berkas'] ?></a>
                  </div>
                </div>
                <div class="mb-2 row p-2 text-start">
                  <label for="berkas" class="col-sm-4 col-form-label">Status Ajuan : </label>
                  <div class="col-sm-8">
                    <label for="berkas" class="col-sm-4 col-form-label badge rounded-pill text-bg-warning">Belum diverifikasi</label>
                  </div>
                </div>
                <div class="row justify-content-around mt-5 pb-3">
                  <div class="col-sm-6">
                    <button type="submit" class="btn btn-outline-success col-sm-6" id="cetak" onclick="window.print()">Cetak PDF
                  </div>
                  <div class="col-sm-6">
                    <a href="hasil.php" class="btn btn-secondary col-sm-6" id="kembali">Kembali</a>
                  </div>
                </div>
              </div>
              <!-- Form -->
            </center>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- Content -->
</body>

</html>