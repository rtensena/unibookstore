<?php 
	include 'config.php';
	$id_buku		= $_GET['id_buku'];

	$query = mysqli_query($conn, "DELETE FROM buku where id_buku='$id_buku'");
	if($query)
	{
		header("Location:admin.php");
	}
?>