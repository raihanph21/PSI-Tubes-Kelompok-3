<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>MyFinport</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="img/myfinport.png"/>
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.0-beta2.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css"/>
    <link rel="stylesheet" href="assets/css/tiny-slider.css"/>
    <link rel="stylesheet" href="assets/css/animate.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
  </head>
  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		<!-- preloader end -->
		

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
												<a class="page-scroll active" href="#home">Home</a>
											</li>
											<li class="nav-item">
												<a class="page-scroll" href="#features">Features</a>
											</li>
                      <li class="nav-item">
												<a class="" href="laporan.php">Chart</a>
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
    <section id="home" class="hero-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6 col-md-10">
            <div class="hero-content">
							<h1>Manage Data Perusahaan Sebaik Mungkin!!</h1>
							<p>- Dear, you all lovely Boss</p>
							
							<a href="produk.php" class="main-btn btn-hover">Manage Now</a>
            </div>
					</div>
					<div class="col-xxl-6 col-xl-6 col-lg-6">
						<div class="hero-image text-center text-lg-end">
							<img src="assets/images/hero/hero-image.svg" alt="">
						</div>
					</div>
        </div>
			</div>
    </section>
		<!-- ========================= hero-section end ========================= -->

		<!-- ========================= feature-section start ========================= -->
		<section id="features" class="feature-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xxl-6 col-xl-7 col-lg-8 col-md-11">
						<div class="section-title text-center mb-60">
							<h2 class="mb-20">Manajemen Dengan Fitur-Fitur Yang Esensial</h2>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-feature">
							<div class="feature-icon">
								<i class="lni lni-display"></i>
							</div>
							<div class="feature-content">
								<p>Mencatat dan menampilkan pengeluaran</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-feature">
							<div class="feature-icon">
								<i class="lni lni-thumbs-up"></i>
							</div>
							<div class="feature-content">
								<p>Mencatat dan menampilkan pemasukan</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-feature">
							<div class="feature-icon">
								<i class="lni lni-grid-alt"></i>
							</div>
							<div class="feature-content">
								<p>Menampilkan data pemasukan dan pengeluaran dalam bentuk grafik</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-feature">
							<div class="feature-icon">
								<i class="lni lni-package"></i>
							</div>
							<div class="feature-content">
								<p>Menampilkan data pemasukan dan pengeluaran dalam bentuk tabel</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= feature-section end ========================= -->

		<!-- ========================= feature-section-1 start ========================= -->
		<section id="feature-1" class="feature-section-1 mt-60 pt-40">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 order-last order-lg-first">
						<div class="feature-image text-center text-lg-start">
							<img src="assets/images/feature/feature-image-1.svg" alt="">
						</div>
					</div>
					<div class="col-lg-6 col-md-10">
						<div class="feature-content-wrapper">
							<div class="section-title">
								<h2 class="mb-20">Solusi Sempurna Dalam Mengelola Bisnis</h2>
								<p class="mb-30">Kelola bisnis dengan cara seefektif dan seefisien mungkin, agar dapat menyaingi kompetitor di luar.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= feature-section-1 end ========================= -->

		<!-- ========================= footer start ========================= -->
		<footer class="footer pt-160">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
						<div class="footer-widget">
							<div class="logo">
								<a href="index.html"> <img src="img/myfinportlogo.png" alt="logo"> </a>
							</div>
							<p>Miftakhul Hudha - 20523175</p> 
							<p>Muhammad Raihan Hardianto - 20523037</p> 
							<p>Reza Pahlevi - 20523156</p>
							<p>Erlangga Putra Widanta - 20523056</p>
							
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
						<div class="footer-widget">
							<h3>Quick Links</h3>
							<ul class="links">
								<li><a href="laporan.php">Chart</a></li>
								<li><a href="transaksi.php">Transaksi</a></li>
								<li><a href="produk.php">Produk</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="footer-widget">
							<h3>Follow On</h3>
							<ul class="social-links">
								<li><a href="#0"><i class="lni lni-facebook"></i></a></li>
								<li><a href="#0"><i class="lni lni-linkedin"></i></a></li>
								<li><a href="#0"><i class="lni lni-instagram"></i></a></li>
								<li><a href="#0"><i class="lni lni-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="copyright">
					<p>Design and Developed By © 2022 Bismillah Lancar</a></p>
				</div>
			</div>
		</footer>
		<!-- ========================= footer end ========================= -->


    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap-5.0.0-beta2.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/polyfill.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
