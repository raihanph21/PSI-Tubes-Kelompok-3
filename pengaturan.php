<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style/pengaturan.css" />

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />

    <title>MyFinport</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="p-3 navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: rgb(0, 0, 0)">
      <div class="container">
        <a class="navbar-brand fs-3" href="homepage.php">MyFinport</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link fs-5" aria-current="page" href="homepage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5" href="produk.php">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5" href="laporan.php">Laporan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5" href="transaksi.php">Transaksi</a>
            </li>
            <li class="nav-item">
              <div class="nav-link fs-5" href="#">|</div>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5 active" href="pengaturan.php">Pengaturan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5" href="main/logout.php">Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- konten -->
    <div class="container text-center text-light mt-5">
      <div class="content">
        <h1 class="mt-3 mb-3 fw-bold">Profil Saya</h1>
        <img src="img/profil.jpg" alt="MyProfile" height="250px" width="200px" />
        <h4 class="mt-3">Nama: Muhammad Raihan</h4>
        <h4>Umur: 20 Tahun</h4>
        <h4>Alamat: Perum Telaga Asri 3 No. A3</h4>
        <h4>No. Telp: 085642751120</h4>
        <h4>Email: m.rhn.ph@gmail.com</h4>
        <a href="ubahpengaturan.html" class="btn btn-lg btn-primary submit mt-5" name="ubah">Ubah</a>
        <a href="login.html" class="btn btn-lg btn-primary submit mt-5" name="keluar">Keluar</a>
      </div>
    </div>
    <!-- akhir konten -->
    <div class="kosong"></div>

    <!-- Footer -->
    <footer class="p-1 pt-1 text-white text-center fw-bold">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by Kelompok Bismillah Lancar</p>
    </footer>
    <!-- Akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
