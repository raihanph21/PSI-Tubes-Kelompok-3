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
    <!-- <link rel="stylesheet" href="style/produk.css" /> -->
    <link href="css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/datatables-1.10.25.min.css" />
    <style type="text/css">
        .btnAdd {
        text-align: right;
        width: 83%;
        margin-bottom: 20px;
        }
    </style>

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />

    <title>MyFinport</title>
  </head>
  <body>
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
												<a class="" href="laporan.php">Chart</a>
											</li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll active" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            <div class="hero-content">
                  <!-- Judul -->
                  <div class="text-center">
                    <h2 class="mt-3 mb-3 fw-bold text-dark">Produk</h2>
                  </div>
                  <!-- Akhir Judul -->
                  <!-- Tabel -->
                  <div class="container-fluid">
                      <div class="row">
                        <div class="container">
                          <div class="btnAdd">
                            <a href="#!" data-id="" data-bs-toggle="modal" data-bs-target="#addUserModal" class="btn btn-success btn-sm">Add Produk</a>
                          </div>
                          <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                              <table id="example" class="table text-dark">
                                <thead>
                                  <th>Id</th>
                                  <th>Nama</th>
                                  <th>Harga</th>
                                  <th>Stok</th>
                                  <th>Kategori</th>
                                  <th>Options</th>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                            </div>
                            <div class="col-md-2"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- Akhir dari tabel -->
            </div>
					</div>
        </div>
			</div>
    </section>
		<!-- ========================= hero-section end ========================= -->

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap-5.0.0-beta2.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/polyfill.js"></script>
    <script src="assets/js/main.js"></script>
    
    <!-- <script src="js/produk.js" crossorigin="anonymous"></script> -->
    <script src="js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/dt-1.10.25datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script type="text/javascript">
        $(document).ready(function() {
        $('#example').DataTable({
            "fnCreatedRow": function(nRow, aData, iDataIndex) {
            $(nRow).attr('id', aData[0]);
            },
            'serverSide': 'true',
            'processing': 'true',
            'paging': 'true',
            'order': [],
            'ajax': {
            'url': 'fetch_data_produk.php',
            'type': 'post',
            },
            "aoColumnDefs": [{
                "bSortable": false,
                "aTargets": [5]
            },

            ]
        });
        });
        $(document).on('submit', '#addProduk', function(e) {
        e.preventDefault();
        var kategori = $('#addKategoriField').val();
        var nama = $('#addNamaField').val();
        var stok = $('#addStokField').val();
        var harga = $('#addHargaField').val();
        if (kategori != '' && nama != '' && stok != '' && harga != '') {
            $.ajax({
            url: "add_produk.php",
            type: "post",
            data: {
                kategori: kategori,
                nama: nama,
                stok: stok,
                harga: harga
            },
            success: function(data) {
                var json = JSON.parse(data);
                var status = json.status;
                if (status == 'true') {
                mytable = $('#example').DataTable();
                mytable.draw();
                $('#addUserModal').modal('hide');
                } else {
                alert('failed');
                }
            }
            });
        } else {
            alert('Fill all the required fields');
        }
        });
        $(document).on('submit', '#updateProduk', function(e) {
        e.preventDefault();
        //var tr = $(this).closest('tr');
        var kategori = $('#kategoriField').val();
        var nama = $('#namaField').val();
        var stok = $('#stokField').val();
        var harga = $('#hargaField').val();
        var trid = $('#trid').val();
        var id = $('#id').val();
        if (kategori != '' && nama != '' && stok != '' && harga != '') {
            $.ajax({
            url: "update_produk.php",
            type: "post",
            data: {
                kategori: kategori,
                nama: nama,
                stok: stok,
                harga: harga,
                id: id
            },
            success: function(data) {
                var json = JSON.parse(data);
                var status = json.status;
                if (status == 'true') {
                table = $('#example').DataTable();
                // table.cell(parseInt(trid) - 1,0).data(id);
                // table.cell(parseInt(trid) - 1,1).data(nama);
                // table.cell(parseInt(trid) - 1,2).data(harga);
                // table.cell(parseInt(trid) - 1,3).data(stok);
                // table.cell(parseInt(trid) - 1,4).data(kategori);
                var button = '<td><a href="javascript:void();" data-id="' + id + '" class="btn btn-info btn-sm editbtn">Edit</a>  <a href="#!"  data-id="' + id + '"  class="btn btn-danger btn-sm deleteBtn">Delete</a></td>';
                var row = table.row("[id='" + trid + "']");
                row.row("[id='" + trid + "']").data([id, nama, harga, stok, kategori, button]);
                $('#exampleModal').modal('hide');
                } else {
                alert('failed');
                }
            }
            });
        } else {
            alert('Fill all the required fields');
        }
        });
        $('#example').on('click', '.editbtn ', function(event) {
        var table = $('#example').DataTable();
        var trid = $(this).closest('tr').attr('id');
        // console.log(selectedRow);
        var id = $(this).data('id');
        $('#exampleModal').modal('show');

        $.ajax({
            url: "get_single_data_produk.php",
            data: {
            id: id
            },
            type: 'post',
            success: function(data) {
            var json = JSON.parse(data);
            $('#namaField').val(json.nama);
            $('#hargaField').val(json.harga);
            $('#stokField').val(json.stok);
            $('#kategoriField').val(json.kategori);
            $('#id').val(id);
            $('#trid').val(trid);
            }
        })
        });

        $(document).on('click', '.deleteBtn', function(event) {
        var table = $('#example').DataTable();
        event.preventDefault();
        var id = $(this).data('id');
        if (confirm("Are you sure want to delete this Produk ? ")) {
            $.ajax({
            url: "delete_produk.php",
            data: {
                id: id
            },
            type: "post",
            success: function(data) {
                var json = JSON.parse(data);
                status = json.status;
                if (status == 'success') {
                //table.fnDeleteRow( table.$('#' + id)[0] );
                //$("#example tbody").find(id).remove();
                //table.row($(this).closest("tr")) .remove();
                $("#" + id).closest('tr').remove();
                } else {
                alert('Failed');
                return;
                }
            }
            });
        } else {
            return null;
        }



        })
    </script>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Produk</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="updateProduk">
              <input type="hidden" name="id" id="id" value="">
              <input type="hidden" name="trid" id="trid" value="">
              <div class="mb-3 row">
                <label for="namaField" class="col-md-3 form-label">Nama</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="namaField" name="nama">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="hargaField" class="col-md-3 form-label">Harga</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="hargaField" name="harga">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="stokField" class="col-md-3 form-label">Stok</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="stokField" name="stok">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="kategoriField" class="col-md-3 form-label">Kategori</label>
                <div class="col-md-9">
                  <select name="kategori" id="kategoriField">
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                    <option value="Perabotan">Perabotan</option>
                    <option value="Sabun">Sabun</option>
                    <option value="Peralatan">Peralatan</option>
                  </select>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Add user Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Produk</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="addProduk" action="">
              <div class="mb-3 row">
                <label for="addNamaField" class="col-md-3 form-label">Nama</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="addNamaField" name="nama">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="addHargaField" class="col-md-3 form-label">Harga</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="addHargaField" name="harga">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="addStokField" class="col-md-3 form-label">Stok</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="addStokField" name="stok">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="addKategoriField" class="col-md-3 form-label">Kategori</label>
                <div class="col-md-9">
                  <select name="kategori" id="addKategoriField">
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                    <option value="Perabotan">Perabotan</option>
                    <option value="Sabun">Sabun</option>
                    <option value="Peralatan">Peralatan</option>
                  </select>

                  <!-- <input type="text" class="form-control" id="addKategoriField" name="kategori"> -->
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="p-1 pt-1 text-black text-center fw-bold mt-auto">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by Kelompok Bismillah Lancar</p>
    </footer>
    <!-- Akhir footer -->

  </body>
</html>
