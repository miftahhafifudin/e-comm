<?php
	include '../koneksi.php';
	if (isset($_POST['submit'])) {
	
	$id = $_POST['id'];
	$isi = $_POST['isi'];
	$capt = $_POST['capt'];
	$foto      = $_FILES['foto']['name'];
	$lokasi    = $_FILES['foto']['tmp_name'];

	if (!empty($lokasi)) {
		move_uploaded_file($lokasi, "../foto_content/".$foto);

		$sql = mysqli_query($koneksi,"update about_us set isi_about = '$isi', caption_about = '$capt', about_img = '$foto' where id_about=$id");
	}
	else{
		$sql = mysqli_query($koneksi,"update about_us set isi_about = '$isi', caption_about = '$capt' where id_about=$id");
	}
	}
	

	echo "<script> alert ('konten terubah'); </script>";
	echo "<script> location='index.php?url=about_us_content' </script>";
?>