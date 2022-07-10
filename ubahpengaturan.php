<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style/ubahpengaturan.css" />

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />

    <title>MyFinport</title>
  </head>
  <body class="text-light">
    <div class="kosong"></div>
    <!-- form login -->
    <div class="text-center mt-5">
      <form style="max-width: 300px; margin: auto" action="main/login.php" method="post">
        <h1 class="mt-1">Ubah Profil</h1>
        <label for="nama" class="sr-only mb-1"></label>
        <input type="text" id="nama" name="nama" class="form-control username" placeholder="Nama" />
        <label for="umur" class="sr-only mb-1"></label>
        <input type="text" id="umur" name="umur" class="form-control username" placeholder="Umur" />
        <label for="alamat" class="sr-only mb-1"></label>
        <input type="text" id="alamat" name="alamat" class="form-control username" placeholder="Alamat" />
        <label for="telepon" class="sr-only mb-1"></label>
        <input type="text" id="telepon" name="telepon" class="form-control username" placeholder="No. Telepon" />
        <label for="email" class="sr-only mb-1"></label>
        <input type="text" id="email" name="email" class="form-control username" placeholder="Email" />

        <div class="mt-3">
          <a href="pengaturan.html" class="btn btn-lg btn-primary submit" name="login">Ubah</a>
        </div>
      </form>
    </div>
    <!-- Akhir Form login -->

    <div class="kosongjuga"></div>

    <!-- Footer -->
    <footer class="p-1 pt-1 text-white text-center fw-bold">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by Kelompok Bismillah Lancar</p>
    </footer>
    <!-- Akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
