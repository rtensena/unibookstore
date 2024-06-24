<?php
	include 'config.php';
    
	$nama			= $_POST['nama'];
	$alamat	    	= $_POST['alamat'];
	$email	    	= $_POST['email'];
    $tahun	    	= $_POST['tahun'];
	$kota			= $_POST['kota'];
	$telepon		= $_POST['telepon'];
	$id_penerbit	= $_GET['id_penerbit'];
	

	$sql	= "UPDATE penerbit SET nama_penerbit = '$nama', alamat = '$alamat', email = '$email', tahun = '$tahun', telepon = '$telepon'
	  WHERE id_penerbit = '$id_penerbit';";

	$query	= mysqli_query($conn, $sql) or die(mysqli_error($conn));

	if($query) {
		header("Location:admin.php?alert=berhasil");
	} else {
		header("location:admin.php?alert=gagal");
	}

	
?>