<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style/login.css" />

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />

    <title>MyFinport</title>
  </head>
  <body>
    <div class="kosongjuga"></div>
    <!-- form login -->
    <div class="text-center mt-5">
      <form style="max-width: 300px; margin: auto" action="main/login.php" method="post">
        <img class="mt-5" src="img/myfinport.png" width="150px" height="120px" alt="MyFinport" />
        <h1 class="mt-1">MyFinport</h1>
        <h2>Login</h2>
        <label for="username" class="sr-only mb-1"></label>
        <input type="text" id="username" name="username" class="form-control username" placeholder="username" />
        <label for="password" class="sr-only mb-1"></label>
        <input type="password" id="password" placeholder="Password" name="password" class="form-control password" />
        <div class="mt-3">
          <button class="btn btn-lg btn-primary submit" name="login">Login</button>
        </div>
      </form>
    </div>
    <!-- Akhir Form login -->
    <div class="kosong"></div>

    <!-- Footer -->
    <footer class="p-1 pt-1 text-white text-center fw-bold">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by Kelompok Bismillah Lancar</p>
    </footer>
    <!-- Akhir footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
