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
                                  
    </nav>
    <div class="row mb-4 ">
        <div class="card mt-5">
        <div class="card-body text-center">
            <h4><b>DASHBOARD ADMIN</b></h4>
            <p>
            Selamat datang di Halaman Bookstore 'Admin'
            </p>
        </div>
        </div>
    </div>

    <section id="produk">
		<div class="products">
			<div class="container">
				<div class="row mb-4">
				<div class="container-fluid">
                <div class="row mb-4">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Daftar Buku</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">ID Buku</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Kategori</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nama Buku</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Harga</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Stok</h6>
                        </th>
						            <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Penerbit</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Aksi</h6>
                        </th>
                      </tr>
                    </thead>
                    <?php
                      include 'config.php';
                      $query = $conn->query("SELECT buku.*, penerbit.nama_penerbit FROM buku INNER JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit");
                      while ($data = $query->fetch_assoc()) { ?>
                    <tbody>
                        <td class="border-bottom-0">
                          <h6 class="fw-normal mb-0"><?php echo $data['id_buku']; ?></h6>
                        </td>
                        <td class="border-bottom-0">
                          <span class="fw-normal"><?php echo $data['kategori']; ?></span>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-normal mb-1"><?php echo $data['nama_buku']; ?></h6>                       
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $data['harga']; ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                              <h6 class="fw-normal mb-0"><?php echo $data['stok']; ?></h6>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $data['nama_penerbit']; ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <a href="" type="button" data-toggle="modal" data-target="#Modal<?php echo $data['id_buku']; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                            </a>
                            <br>  
                            <a href="hapusbuku.php?id_buku=<?php echo $data['id_buku'];?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="red" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                </svg>
                            </a>
                          </div>
                        </td>
                      </tr> 

                      <div class="modal fade" id="Modal<?php echo $data['id_buku']; ?>" role="dialog" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content" style="padding: 10px;">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Data Buku</h1>
                                    <button type="button" class="btn-close" data-dismiss="modal"></button>
                                </div>
                                
                                <form role="form" action="editbuku.php?id_buku=<?php echo $data['id_buku'];?>" method="POST">
                                    <div class="form-floating mb-3">
                                    <label for="floatingInput">Kategori</label>
                                        <input type="text" class="form-control" id="floatingInput" placeholder=".." value="<?=$data['kategori']?>" name="kategori" required="">
                                        
                                    </div>
                                    <div class="form-floating mb-3">
                                    <label for="floatingInput">Nama Buku</label>
                                        <input type="text" class="form-control" id="floatingInput" placeholder=".." value="<?=$data['nama_buku']?>" name="buku" required="">
                                        
                                    </div>
                                    <div class="form-floating mb-3">
                                    <label for="floatingInput">Harga</label>
                                        <input type="text" class="form-control" id="floatingInput" placeholder=".." value="<?=$data['harga']?>" name="harga" required="">
                                        
                                    </div>
                                    <div class="form-floating mb-3">
                                    <label for="floatingInput">Stok</label>
                                        <input type="number" class="form-control" id="floatingInput" placeholder=".." value="<?=$data['stok']?>" name="stok" required="">
                                        
                                    </div>
                                    <div class="form-floating mb-3">
                                    <label for="floatingInput">Penerbit</label>
                                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="id_penerbit">
                                            <option value="<?=$data['id_penerbit']?>"><?=$data['nama_penerbit']?></option>
                                            <?php
                                            $sql	= "SELECT * FROM penerbit ORDER BY nama_penerbit ";
                                            $query2	= mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($query2)) {
                                            ?>
                                            <option value="<?= $row['id_penerbit']; ?>"><?= $row['nama_penerbit']; ?></option>
                                            <?php } ?>
                                        </select>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" value="Upload">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>          
                    </div>


                      <?php
                      } ?>                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <a href="" type="button" data-toggle="modal" data-target="#tambah_buku"><button type="button" class="btn btn-primary m-1 mb-4">Tambah Data Buku</button></a>
        <div class="modal fade" id="tambah_buku" role="dialog" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content" style="padding: 10px;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Buku</h1>
                        <button type="button" class="btn-close" data-dismiss="modal"></button>
                    </div>
                    
                    <form role="form" action="tambah_buku.php" method="POST">
                        <div class="form-floating mb-3">
                        <label for="floatingInput">ID Buku</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="" name="id_buku" required="">
                            
                        </div>
                        <div class="form-floating mb-3">
                        <label for="floatingInput">Kategori</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="" name="kategori" required="">
                            
                        </div>
                        <div class="form-floating mb-3">
                        <label for="floatingInput">Nama Buku</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="" name="buku" required="">
                            
                        </div>
                        <div class="form-floating mb-3">
                        <label for="floatingInput">Harga</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="" name="harga" required="">
                            
                        </div>
                        <div class="form-floating mb-3">
                        <label for="floatingInput">Stok</label>
                            <input type="number" class="form-control" id="floatingInput" placeholder="" name="stok" required="">
                            
                        </div>
                        <div class="form-floating mb-3">
                        <label for="floatingInput">Penerbit</label>
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="id_penerbit">
                                <option></option>
                                <?php
                                $sql	= "SELECT * FROM penerbit ORDER BY nama_penerbit ";
                                $query2	= mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($query2)) {
                                ?>
                                <option value="<?= $row['id_penerbit']; ?>"><?= $row['nama_penerbit']; ?></option>
                                <?php } ?>
                            </select>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" value="Upload">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>          
        </div>


		<div class="row mb-4">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Daftar Penerbit</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">ID Penerbit</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nama</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Alamat</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Email</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Tahun</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Kota</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Telepon</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Aksi</h6>
                        </th>
                      </tr>
                    </thead>
                    <?php
                      include 'config.php';
                      $query = $conn->query("SELECT * FROM penerbit");
                      while ($data = $query->fetch_assoc()) { ?>
                    <tbody>
                        <td class="border-bottom-0">
							              <h6 class="fw-semibold mb-0"><?php echo $data['id_penerbit']; ?></h6>
						            </td>
						            <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $data['nama_penerbit']; ?></span>                          
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-normal mb-1"><?php echo $data['alamat']; ?></h6>
						            </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $data['email']; ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $data['tahun']; ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $data['kota']; ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $data['telepon']; ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <a href="" type="button" data-toggle="modal" data-target="#myModal<?php echo $data['id_penerbit']; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                            </a>
                            <a href="hapuspenerbit.php?id_penerbit=<?php echo $data['id_penerbit'];?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="red" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                </svg>
                            </a>
                          </div>
                        </td>
                      </tr> 

                      <div class="modal fade" id="myModal<?php echo $data['id_penerbit']; ?>" role="dialog" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content" style="padding: 10px;">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Data Penerbit</h1>
                                    <button type="button" class="btn-close" data-dismiss="modal"></button>
                                </div>
                                
                                <form role="form" action="editpenerbit.php?id_penerbit=<?php echo $data['id_penerbit'];?>" method="POST">
                                    <div class="form-floating mb-3">
                                    <label for="floatingInput">Nama</label>
                                        <input type="text" class="form-control" id="floatingInput" placeholder="" value="<?=$data['nama_penerbit']?>" name="nama" required="">
                                        
                                    </div>
                                    <div class="form-floating mb-3">
                                    <label for="floatingInput">Alamat</label>
                                        <input type="text" class="form-control" id="floatingInput" placeholder="" value="<?=$data['alamat']?>" name="alamat" required="">
                                        
                                    </div>
                                    <div class="form-floating mb-3">
                                    <label for="floatingInput">Email</label>
                                        <input type="text" class="form-control" id="floatingInput" placeholder="" value="<?=$data['email']?>" name="email" required="">
                                        
                                    </div>
                                    <div class="form-floating mb-3">
                                    <label for="floatingInput">Tahun</label>
                                        <input type="text" class="form-control" id="floatingInput" placeholder="" value="<?=$data['tahun']?>" name="tahun" required="">
                                        
                                    </div>
                                    <div class="form-floating mb-3">
                                    <label for="floatingInput">Kota</label>
                                        <input type="text" class="form-control" id="floatingInput" placeholder="" value="<?=$data['kota']?>" name="kota" required="">
                                        
                                    </div>
                                    <div class="form-floating mb-3">
                                    <label for="floatingInput">Telepon</label>
                                        <input type="text" class="form-control" id="floatingInput" placeholder="" value="<?=$data['telepon']?>" name="telepon" required="">
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" value="Upload"></button>
                                    </div>
                                </form>
                            </div>
                        </div>          
                    </div>



                      <?php
                      } ?>                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div> 
                      
                  </table>
                  <a href="" type="button" data-toggle="modal" data-target="#tambah_penerbit"><button type="button" class="btn btn-primary m-1 mb-5">Tambah Data Penerbit</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
            
        <div class="modal fade" id="tambah_penerbit" role="dialog" tabindex="-1">
        
            <div class="modal-dialog">
                <div class="modal-content" style="padding: 10px;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Penerbit</h1>
                        <button type="button" class="btn-close" data-dismiss="modal"></button>
                    </div>
                    
                    <form role="form" action="tambah_penerbit.php" method="POST">
                        <div class="form-floating mb-3">
                        <label for="floatingInput">ID Penerbit</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="" name="id_penerbit" required="">
                            
                        </div>
                        <div class="form-floating mb-3">
                        <label for="floatingInput">Nama Penerbit</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="" name="nama" required="">
                            
                        </div>
                        <div class="form-floating mb-3">
                        <label for="floatingInput">Alamat</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="" name="alamat" required="">
                            
                        </div>
                        <div class="form-floating mb-3">
                        <label for="floatingInput">Email</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="" name="email" required="">
                            
                        </div>
                        <div class="form-floating mb-3">
                        <label for="floatingInput">Tahun</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="" name="tahun" required="">
                            
                        </div>
                        <div class="form-floating mb-3">
                        <label for="floatingInput">Kota</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="" name="kota" required="">
                            
                        </div>
                        <div class="form-floating mb-3">
                        <label for="floatingInput">Telepon</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="" name="telepon" required="">
                  
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" value="Upload">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>          
        </div>
	</div>
	</div>
    </div>
</section>

    <!-- footer -->
    <div class="fixed-footer bg-dark">
      <div class="container">Copyright &copy; UNIBOOKSTORE</div>
    </div>


         
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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