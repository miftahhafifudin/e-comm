<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$get = mysqli_query($koneksi, "select * from produk where id_produk = $id");
	$br = mysqli_fetch_array($get);
	$foto = $br['foto_produk'];
	if(file_exists("../foto_produk/".$foto))
	{
	unlink("../foto_produk/".$foto);
	}

	$sql = mysqli_query($koneksi, "delete from produk where id_produk = $id");

	echo "<script> alert ('produk terhapus'); </script>";
	echo "<script> location='index.php?url=produk' </script>";
?>