<?php
include 'config.php';

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = $conn->query("SELECT buku.*, penerbit.nama_penerbit FROM buku INNER JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit WHERE nama_buku LIKE '%".$valueToSearch."%'");
    
}
 else {
    $query = $conn->query("SELECT buku.*, penerbit.nama_penerbit FROM buku INNER JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/dekstop.css">

    <title>UNIBOOKSTORE</title>
	<style>
		.fixed-footer {
            width: 100%;
            position: static;
            margin: 0 10px 10px 0;
            padding: 10px 0;
            color: rgba(255, 255, 255, 1);
            text-align: center;
            bottom:0;
		}
		
		a {
            text-decoration: none;
        }
	</style>
</head>

	<?php 

	include 'config.php';
	session_start(); 
	error_reporting(0); 

	?>

<body id="page-top">
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-transparan fixed-top" id="mainNav">
		<div class="container">
		<b><a class="navbar-brand text-dark" href="index.php">UNIBOOKSTORE</a></b>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		</div>
		<a href="index.php" class="btn btn-dark mr-3 text-white">Home</a>
		<a href="admin.php" class="btn btn-dark mr-3 text-white">Admin</a>
		<a href="pengadaan.php" class="btn btn-dark mr-3 text-white">Pengadaan</a>
		</div>
	</nav>

	<div class="jumbotron">
		<div class="container">
			<h1 class="display-4">Selamat Datang di <span class="font-weight-bold">UNIBOOKSTORE</span></h1><br>
			<p class="lead">
				<a class="btn btn-dark btn-lg" href="#produk" role="button">Cek Daftar Buku!</a>
			</p>
		</div>
	</div>
	
	<!-- Products -->
	<section id="produk">
		<div class="products">
			<div class="container">
				<div class="row">
				<div class="container-fluid">

			<!-- Pencarian -->
			<form action="index.php" method="post">

                    <div class="mb-4">
                      <input type="text" class="form-control" name="valueToSearch" id="search" aria-describedby="emailHelp" placeholder="Searching">
                      <button type="submit" class="btn btn-light m-1" name="search" value="Filter">Search</button>
                    </div>
                  </form>

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
                      </tr>
                    </thead>
					<?php
                      
                      while ($data = $query->fetch_assoc()) { ?>
                    <tbody>
                        <td class="border-bottom-0">

							<h6 class="fw-semibold mb-0"><?php echo $data['id_buku']; ?></h6>
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
                            <h6 class="fw-normal mb-0 "><?php echo $data['stok']; ?></h6>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $data['nama_penerbit']; ?></p>
                        </td> 
                      <?php
                      } ?>
                  </table>
                </div>
              </div>
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script>
</body>


</html>