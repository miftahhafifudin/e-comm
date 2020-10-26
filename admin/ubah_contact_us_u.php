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

		$sql = mysqli_query($koneksi,"update contact_us set isi_contact = '$isi', caption_contact = '$capt', contact_img = '$foto' where id_contact=$id");
	}
	else{
		$sql = mysqli_query($koneksi,"update contact_us set isi_contact = '$isi', caption_contact = '$capt' where id_contact=$id");
	}
	}
	

	echo "<script> alert ('konten terubah'); </script>";
	echo "<script> location='index.php?url=contact_us_content' </script>";
?>