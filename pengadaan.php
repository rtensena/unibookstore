<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"  integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous"/>
    <!-- Bootstrap CSS -->   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="dashboard.css"> -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Dashboard</title>
    <style>
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            margin-left: -300px;
            transition: 0.4s;
        }

        .active-main-content {
            margin-left: 250px;
        }

        .active-sidebar {
            margin-left: 0;
        }

        #main-content {
            transition: 0.4s;
        }

        .lgout{
            color:#ffffff;
        }

        .fixed-footer {
            width: 100%;
            position: fixed;
            margin: 0 10px 10px 0;
            padding: 10px 0;
            color: rgba(255, 255, 255, 1);
            text-align: center;
            bottom:0;
        }
    </style>
</head> 
<body>
    <!-- navbar -->
    <nav class="navbar navbar-dark bg-dark" width="10px">
        <span class="navbar-brand mb-0 h1">UNIBOOKSTORE</span>
        <div>
		<a href="index.php" class="btn btn-dark mr-3 text-white">Home</a>
		<a href="admin.php" class="btn btn-dark mr-3 text-white">Admin</a>
        <a href="pengadaan.php" class="btn btn-dark mr-3 text-white">Pengadaan</a>
		</div>                      
    </nav>
    <!-- sidebar -->
        <div class="card mt-5">
        <div class="card-body text-center">
            <h4><b>DASHBOARD PENGADAAN</b></h4>
            <p>
            Selamat datang di Halaman Pengadaan
            </p>
        </div>
        </div>
        <div class="col-12">
                <div class="row text-dark">
                    <div class="col-sm-12 g-4"></div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Buku dengan stok paling sedikit</h5>
                            <hr>
                            <form action="" method="POST">
                                <?php
                                include 'config.php';
                                $sql = "SELECT buku.nama_buku, penerbit.nama_penerbit, min(stok) AS stok FROM buku INNER JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit";
                                $query = mysqli_query($conn, $sql);
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <div class="mb-3 row">
                                    <label for="username" class="col-sm-3 col-form-label">Judul Buku</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control-plaintext" id="username" value="<?= $data['nama_buku'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Penerbit</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control-plaintext" id="nama_lengkap" value="<?= $data['nama_penerbit'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-3 col-form-label">Stok</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control-plaintext" id="stok" value="<?= $data['stok'] ?>">
                                    </div>
                                </div>
                                <?php
                            } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- footer -->
    <div class="fixed-footer bg-dark">
      <div class="container">Copyright &copy; UNIBOOKSTORE</div>
    </div>


         
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script>
    
    // event will be executed when the toggle-button is clicked
    document.getElementById("button-toggle").addEventListener("click", () => {

      // when the button-toggle is clicked, it will add/remove the active-sidebar class
      document.getElementById("sidebar").classList.toggle("active-sidebar");

      // when the button-toggle is clicked, it will add/remove the active-main-content class
      document.getElementById("main-content").classList.toggle("active-main-content");
    });

  </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>