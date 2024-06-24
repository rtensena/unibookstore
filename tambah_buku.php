<?php
	include 'config.php';
    $id_buku	    = $_POST['id_buku'];
	$kategori		= $_POST['kategori'];
	$buku	    	= $_POST['buku'];
	$harga			= $_POST['harga'];
	$stok	    	= $_POST['stok'];
	$id_penerbit	= $_POST['id_penerbit'];
	
	

	$sql	= "INSERT INTO buku VALUES ('$id_buku', '$kategori', '$buku', '$harga', '$stok', '$id_penerbit')";

	$query	= mysqli_query($conn, $sql);

	if($query) {
		header("Location:admin.php?alert=berhasil");
	} else {
		header("location:admin.php?alert=gagal");
	}

	
?>