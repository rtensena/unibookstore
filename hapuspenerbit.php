<?php 
	include 'config.php';
	$id_penerbit		= $_GET['id_penerbit'];

	$query = mysqli_query($conn, "DELETE FROM penerbit where id_penerbit='$id_penerbit'");
	if($query)
	{
		header("Location:admin.php");
	}
?>