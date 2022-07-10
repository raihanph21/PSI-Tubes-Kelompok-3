<?php 
include 'main/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="img/myfinport.png"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.0-beta2.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css"/>
    <link rel="stylesheet" href="assets/css/tiny-slider.css"/>
    <link rel="stylesheet" href="assets/css/animate.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="style/laporan.css" /> -->

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>MyFinport</title>
  </head>
  <body class="text-light d-flex flex-column min-vh-100">
 
    <!-- ========================= header start ========================= -->
    <header class="header">
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="homepage.php">
                  <img src="img/myfinportlogo.png" alt="Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
								</button>
								
                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
									<div class="ms-auto">
										<ul id="nav" class="navbar-nav ms-auto">
											<li class="nav-item">
												<a class="" href="homepage.php">Home</a>
											</li>
											<li class="nav-item">
												<a class="" href="homepage.php">Features</a>
											</li>
                      <li class="nav-item">
												<a class="page-scroll active" href="laporan.php">Chart</a>
											</li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Tabel
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                          <li><a class="dropdown-item" href="produk.php">Produk</a></li>
                          <li><a class="dropdown-item" href="transaksi.php">Transaksi</a></li>
                        </ul>
                      </li>
										</ul>
									</div>
                </div>
								<div class="header-btn">
									<a href="main/logout.php" class="main-btn btn-hover">Keluar</a>
								</div>
                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>
    <!-- ========================= header end ========================= -->

    <!-- ========================= hero-section start ========================= -->
    <section id="home" class="hero-section justify-content-around">
      
    <div class="row">
      <div class="card mb-4">
        <div class="card-header"><i class="text-dark">Transaksi</i>
        </div>
      <div class="card-body"><canvas id="myChart" style="width:200%;"></canvas></div>
      </div>
    </div>
    <div class="row">
      <div class="card mb-4">
        <div class="card-header"><i class="text-dark">Stok Kategori</i></div>
      <div class="card-body"><canvas id="pieChart" style="width:120%;"></canvas></div>
      </div>
    </div>

    </section>
		<!-- ========================= hero-section end ========================= -->

    <script>
const ctx2 = document.getElementById('pieChart').getContext('2d');
const pieChart = new Chart(ctx2, {
    type: 'pie',
    data: {
        labels: ['Makanan', 'Minuman', 'Perabotan', 'Sabun', 'Peralatan'],
        datasets: [{
            label: 'Jumlah Barang Per Kategori',
            data: [<?php
            
            $makanan = "SELECT SUM(stok) AS 'Makanan' FROM `produk` WHERE kategori = 'Makanan'";
            $resultmakanan = mysqli_query($con, $makanan);
            $row1 = mysqli_fetch_row($resultmakanan);
            $count1 = $row1[0];
            
            $minuman = "SELECT SUM(stok) FROM `produk` WHERE kategori = 'Minuman'";
            $resultminuman = mysqli_query($con, $minuman);
            $row2 = mysqli_fetch_row($resultminuman);
            $count2 = $row2[0];
            
            $perabotan = "SELECT SUM(stok) FROM `produk` WHERE kategori = 'Perabotan'";
            $resultperabotan = mysqli_query($con, $perabotan);
            $row3 = mysqli_fetch_row($resultperabotan);
            $count3 = $row3[0];

            $sabun = "SELECT SUM(stok) FROM `produk` WHERE kategori = 'Sabun'";
            $resultsabun = mysqli_query($con, $sabun);
            $row4 = mysqli_fetch_row($resultsabun);
            $count4 = $row4[0];

            $peralatan = "SELECT SUM(stok) FROM `produk` WHERE kategori = 'Peralatan'";
            $resultperalatan = mysqli_query($con, $peralatan);
            $row5 = mysqli_fetch_row($resultperalatan);
            $count5 = $row5[0];
            
            echo $count1 . ",";
            echo $count2 . ",";
            echo $count3 . ",";
            echo $count4 . ",";
            echo $count5;
            
            ?>],
            backgroundColor: ['red', 'green', 'blue', 'yellow', 'black'],
            borderColor: ['black'],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
  
  <script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
        datasets: [{
            label: 'Pemasukan',
            data: [
              <?php 
                $januari = "SELECT SUM(pemasukan) AS 'pemasukan' FROM `keuangan` WHERE date BETWEEN '2022-01-01' AND '2022-01-31'";
                $resultjanuari = mysqli_query($con, $januari);
                $row1 = mysqli_fetch_row($resultjanuari);
                $count1 = $row1[0];

                $februari = "SELECT SUM(pemasukan) AS 'pemasukan' FROM `keuangan` WHERE date BETWEEN '2022-02-01' AND '2022-02-28'";
                $resultfebruari = mysqli_query($con, $februari);
                $row2 = mysqli_fetch_row($resultfebruari);
                $count2 = $row2[0];

                $maret = "SELECT SUM(pemasukan) AS 'pemasukan' FROM `keuangan` WHERE date BETWEEN '2022-03-01' AND '2022-03-31'";
                $resultmaret = mysqli_query($con, $maret);
                $row3 = mysqli_fetch_row($resultmaret);
                $count3 = $row3[0];

                $april = "SELECT SUM(pemasukan) AS 'pemasukan' FROM `keuangan` WHERE date BETWEEN '2022-04-01' AND '2022-04-30'";
                $resultapril = mysqli_query($con, $april);
                $row4 = mysqli_fetch_row($resultapril);
                $count4 = $row4[0];

                $mei = "SELECT SUM(pemasukan) AS 'pemasukan' FROM `keuangan` WHERE date BETWEEN '2022-05-01' AND '2022-05-31'";
                $resultmei = mysqli_query($con, $mei);
                $row5 = mysqli_fetch_row($resultmei);
                $count5 = $row5[0];

                $juni = "SELECT SUM(pemasukan) AS 'pemasukan' FROM `keuangan` WHERE date BETWEEN '2022-06-01' AND '2022-06-30'";
                $resultjuni = mysqli_query($con, $juni);
                $row6 = mysqli_fetch_row($resultjuni);
                $count6 = $row6[0];

                $juli = "SELECT SUM(pemasukan) AS 'pemasukan' FROM `keuangan` WHERE date BETWEEN '2022-07-01' AND '2022-07-31'";
                $resultjuli = mysqli_query($con, $juli);
                $row7 = mysqli_fetch_row($resultjuli);
                $count7 = $row7[0];

                $agustus = "SELECT SUM(pemasukan) AS 'pemasukan' FROM `keuangan` WHERE date BETWEEN '2022-08-01' AND '2022-08-31'";
                $resultagustus = mysqli_query($con, $agustus);
                $row8 = mysqli_fetch_row($resultagustus);
                $count8 = $row8[0];

                $september = "SELECT SUM(pemasukan) AS 'pemasukan' FROM `keuangan` WHERE date BETWEEN '2022-09-01' AND '2022-09-30'";
                $resultseptember = mysqli_query($con, $september);
                $row9 = mysqli_fetch_row($resultseptember);
                $count9 = $row9[0];

                $oktober = "SELECT SUM(pemasukan) AS 'pemasukan' FROM `keuangan` WHERE date BETWEEN '2022-10-01' AND '2022-10-31'";
                $resultoktober = mysqli_query($con, $oktober);
                $row10 = mysqli_fetch_row($resultoktober);
                $count10 = $row10[0];

                $november = "SELECT SUM(pemasukan) AS 'pemasukan' FROM `keuangan` WHERE date BETWEEN '2022-11-01' AND '2022-11-30'";
                $resultnovember = mysqli_query($con, $november);
                $row11 = mysqli_fetch_row($resultnovember);
                $count11 = $row11[0];

                $desember = "SELECT SUM(pemasukan) AS 'pemasukan' FROM `keuangan` WHERE date BETWEEN '2022-12-01' AND '2022-12-31'";
                $resultdesember = mysqli_query($con, $desember);
                $row12 = mysqli_fetch_row($resultdesember);
                $count12 = $row12[0];
                
                echo $count1 . ",";
                echo $count2 . ",";
                echo $count3 . ",";
                echo $count4 . ",";
                echo $count5 . ",";
                echo $count6 . ",";
                echo $count7 . ",";
                echo $count8 . ",";
                echo $count9 . ",";
                echo $count10 . ",";
                echo $count11 . ",";
                echo $count12;
                ?>
            ],
            backgroundColor: 'blue',
            borderColor: 'black',
            borderWidth: 1
        },
        {
            label: 'Pengeluaran',
            data: [
              <?php 
                $januari = "SELECT SUM(pengeluaran) AS 'Pengeluaran' FROM `keuangan` WHERE date BETWEEN '2022-01-01' AND '2022-01-31'";
                $resultjanuari = mysqli_query($con, $januari);
                $row1 = mysqli_fetch_row($resultjanuari);
                $count1 = $row1[0];
                
                $februari = "SELECT SUM(pengeluaran) AS 'Pengeluaran' FROM `keuangan` WHERE date BETWEEN '2022-02-01' AND '2022-02-28'";
                $resultfebruari = mysqli_query($con, $februari);
                $row2 = mysqli_fetch_row($resultfebruari);
                $count2 = $row2[0];

                $maret = "SELECT SUM(pengeluaran) AS 'Pengeluaran' FROM `keuangan` WHERE date BETWEEN '2022-03-01' AND '2022-03-31'";
                $resultmaret = mysqli_query($con, $maret);
                $row3 = mysqli_fetch_row($resultmaret);
                $count3 = $row3[0];

                $april = "SELECT SUM(pengeluaran) AS 'Pengeluaran' FROM `keuangan` WHERE date BETWEEN '2022-04-01' AND '2022-04-30'";
                $resultapril = mysqli_query($con, $april);
                $row4 = mysqli_fetch_row($resultapril);
                $count4 = $row4[0];

                $mei = "SELECT SUM(pengeluaran) AS 'Pengeluaran' FROM `keuangan` WHERE date BETWEEN '2022-05-01' AND '2022-05-31'";
                $resultmei = mysqli_query($con, $mei);
                $row5 = mysqli_fetch_row($resultmei);
                $count5 = $row5[0];

                $juni = "SELECT SUM(pengeluaran) AS 'Pengeluaran' FROM `keuangan` WHERE date BETWEEN '2022-06-01' AND '2022-06-30'";
                $resultjuni = mysqli_query($con, $juni);
                $row6 = mysqli_fetch_row($resultjuni);
                $count6 = $row6[0];

                $juli = "SELECT SUM(pengeluaran) AS 'Pengeluaran' FROM `keuangan` WHERE date BETWEEN '2022-07-01' AND '2022-07-31'";
                $resultjuli = mysqli_query($con, $juli);
                $row7 = mysqli_fetch_row($resultjuli);
                $count7 = $row7[0];

                $agustus = "SELECT SUM(pengeluaran) AS 'Pengeluaran' FROM `keuangan` WHERE date BETWEEN '2022-08-01' AND '2022-08-31'";
                $resultagustus = mysqli_query($con, $agustus);
                $row8 = mysqli_fetch_row($resultagustus);
                $count8 = $row8[0];

                $september = "SELECT SUM(pengeluaran) AS 'Pengeluaran' FROM `keuangan` WHERE date BETWEEN '2022-09-01' AND '2022-09-30'";
                $resultseptember = mysqli_query($con, $september);
                $row9 = mysqli_fetch_row($resultseptember);
                $count9 = $row9[0];

                $oktober = "SELECT SUM(pengeluaran) AS 'Pengeluaran' FROM `keuangan` WHERE date BETWEEN '2022-10-01' AND '2022-10-31'";
                $resultoktober = mysqli_query($con, $oktober);
                $row10 = mysqli_fetch_row($resultoktober);
                $count10 = $row10[0];

                $november = "SELECT SUM(pengeluaran) AS 'Pengeluaran' FROM `keuangan` WHERE date BETWEEN '2022-11-01' AND '2022-11-30'";
                $resultnovember = mysqli_query($con, $november);
                $row11 = mysqli_fetch_row($resultnovember);
                $count11 = $row11[0];

                $desember = "SELECT SUM(pengeluaran) AS 'Pengeluaran' FROM `keuangan` WHERE date BETWEEN '2022-12-01' AND '2022-12-31'";
                $resultdesember = mysqli_query($con, $desember);
                $row12 = mysqli_fetch_row($resultdesember);
                $count12 = $row12[0];
                
                echo $count1 . ",";
                echo $count2 . ",";
                echo $count3 . ",";
                echo $count4 . ",";
                echo $count5 . ",";
                echo $count6 . ",";
                echo $count7 . ",";
                echo $count8 . ",";
                echo $count9 . ",";
                echo $count10 . ",";
                echo $count11 . ",";
                echo $count12;
                ?>
            ],
            backgroundColor: 'red',
            borderColor: 'black',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

  </script>

    <!-- Footer -->
    <footer class="p-1 pt-1 text-white text-center fw-bold mt-auto">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by Kelompok Bismillah Lancar</p>
    </footer>
    <!-- Akhir footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap-5.0.0-beta2.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/polyfill.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
