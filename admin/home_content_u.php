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

		$sql = mysqli_query($koneksi,"update content_home set isi_home = '$isi', caption_home = '$capt', home_img = '$foto' where id_home=$id");
	}
	else{
		$sql = mysqli_query($koneksi,"update content_home set isi_home = '$isi', caption_home = '$capt' where id_home=$id");
	}
	}
	

	echo "<script> alert ('konten terubah'); </script>";
	echo "<script> location='index.php?url=home_content' </script>";
?>