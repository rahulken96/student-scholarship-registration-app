<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beasiswa | JWD Assessment</title>

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-4">
          <li class="nav-item">
            <a class="nav-link btn btn-secondary text-white active" aria-current="page" href="index.php">Pilihan Beasiswa</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn btn-outline-secondary text-white" aria-current="page" href="daftar.php">Daftar</a>
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
    <h1>Pilih Beasiswa Mu!</h1>

    <div class="row row-cols-md-2 g-4">
      <div class="col">
        <div class="card">
          <img src="assets/images/akademik.png" class="img-fluid" style="object-fit: contain; width:500px; height:500px;" alt="Beasiswa akademik">
          <div class="card-body">
            <h5 class="card-title">Beasiswa Akademik</h5>
            <p class="card-text">Persyaratan : </p>
            <ul>
              <li>IPK minimal lebih dari 3</li>
              <li>Surat rekomendasi dari dosen atau guru yang mengakui prestasi akademik dan komitmen</li>
              <li>Transkrip nilai yang membuktikan pencapaian akademik yang baik</li>
              <li>Esai singkat tentang tujuan pendidikan dan bagaimana beasiswa ini akan membantu mencapai tujuan tersebut</li>
            </ul>
            <form action="daftar.php" method="post">
              <button type="submit" value="akademik" name="beasiswa" class="btn btn-primary">Daftar Beasiswa</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="assets/images/bidang_studi.png" class="img-fluid" style="object-fit: contain; width:650px; height:500px;" alt="Beasiswa bidang studi">
          <div class="card-body">
            <h5 class="card-title">Beasiswa Non-Akademik</h5>
            <p class="card-text">Persyaratan : </p>
            <ul>
              <li>Bukti partisipasi dalam setidaknya 2 proyek pengabdian masyarakat atau kegiatan sosial</li>
              <li>Surat rekomendasi dari lembaga atau organisasi terkait yang menggarisbawahi kontribusi dalam kegiatan pengabdian masyarakat</li>
              <li>Esai yang menjelaskan pengalaman dalam kegiatan pengabdian masyarakat dan bagaimana pengalaman tersebut telah membentuk pandangan dan tujuan</li>
            </ul>
            <form action="daftar.php" method="post">
              <button type="submit" value="non_akademik" name="beasiswa" class="btn btn-primary">Daftar Beasiswa</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="assets/images/komunitas.png" class="img-fluid" style="object-fit: contain; width:500px; height:500px;" alt="Beasiswa pengabdian masyarakat">
          <div class="card-body">
            <h5 class="card-title">Beasiswa Bidang Studi</h5>
            <p class="card-text">Persyaratan : </p>
            <ul>
              <li>Menunjukkan minat dan komitmen kuat terhadap bidang studi yang ditentukan</li>
              <li>Esai yang menjelaskan motivasi dalam memilih bidang studi tersebut dan bagaimana hal tersebut akan memberikan dampak positif</li>
              <li>Tes keterampilan atau wawancara dalam bidang studi terkait (tergantung pada jenis beasiswa)</li>
            </ul>
            <form action="daftar.php" method="post">
              <button type="submit" value="studi" name="beasiswa" class="btn btn-primary">Daftar Beasiswa</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="assets/images/bantuan.png" class="img-fluid" style="object-fit: contain; width:650px; height:500px;" alt="Beasiswa bantuan tidak mampu">
          <div class="card-body">
            <h5 class="card-title">Beasiswa Bantuan Ekonomi</h5>
            <p class="card-text">Persyaratan : </p>
            <ul>
              <li>Bukti kondisi keuangan yang mengindikasikan kesulitan dalam membayar biaya pendidikan</li>
              <li>Surat rekomendasi dari pihak berwenang (SKTM) yang mengkonfirmasi kebutuhan ekonomi dari Rt/Rw setempat</li>
              <li>Formulir aplikasi dan dokumentasi tambahan yang berkaitan dengan keuangan</li>
            </ul>
            <form action="daftar.php" method="post">
              <button type="submit" value="bantuan" name="beasiswa" class="btn btn-primary">Daftar Beasiswa</button>
            </form>
          </div>
        </div>
      </div>
    </div>
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

</body>

</html>