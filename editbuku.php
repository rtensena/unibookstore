<?php
	include 'config.php';
    
	$kategori		= $_POST['kategori'];
	$buku	    	= $_POST['buku'];
	$harga			= $_POST['harga'];
	$stok	    	= $_POST['stok'];
	$id_penerbit	= $_POST['id_penerbit'];
	$id_buku	    = $_GET['id_buku'];
	

	$sql	= "UPDATE buku SET kategori = '$kategori', nama_buku = '$buku',  harga = '$harga', stok = '$stok', id_penerbit = '$id_penerbit'
	  WHERE id_buku = '$id_buku';";

	$query	= mysqli_query($conn, $sql);

	if($query) {
		header("Location:admin.php?alert=berhasil");
	} else {
		header("location:admin.php?alert=gagal");
	}

	
?>