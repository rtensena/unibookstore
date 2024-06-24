<?php
	include 'config.php';
    $id_penerbit	= $_POST['id_penerbit'];
	$nama		    = $_POST['nama'];
	$alamat	    	= $_POST['alamat'];
    $email	    	= $_POST['email'];
    $tahun	    	= $_POST['tahun'];
	$kota			= $_POST['kota'];
	$telepon	    = $_POST['telepon'];

	$sql	= "INSERT INTO penerbit VALUES ('$id_penerbit', '$nama', '$alamat' , '$email' , '$tahun' , '$kota', '$telepon')";

	$query	= mysqli_query($conn, $sql);

	if($query) {
		header("Location:admin.php?alert=berhasil");
	} else {
		header("location:admin.php?alert=gagal");
	}

	
?>