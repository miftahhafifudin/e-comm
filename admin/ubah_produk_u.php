<?php
	include '../koneksi.php';
	if (isset($_POST['submit'])) {
	
	$id = $_POST['id_produk'];
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$berat = $_POST['berat'];
	$foto      = $_FILES['foto']['name'];
	$lokasi    = $_FILES['foto']['tmp_name'];
	$deskripsi = $_POST['deskripsi'];

	if (!empty($lokasi)) {
		move_uploaded_file($lokasi, "../foto_produk/".$foto);

		$sql = mysqli_query($koneksi,"update produk set nama_produk = '$nama', harga = '$harga', berat = '$berat', foto_produk = '$foto', deskripsi = '$deskripsi' where id_produk=$id");
	}
	else{
		$sql = mysqli_query($koneksi,"update produk set nama_produk = '$nama', harga = '$harga', berat = '$berat', deskripsi = '$deskripsi' where id_produk=$id");
	}
	}
	

	echo "<script> alert ('produk terubah'); </script>";
	echo "<script> location='index.php?url=produk' </script>";
?>