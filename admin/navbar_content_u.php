<?php
	include '../koneksi.php';
	if (isset($_POST['submit'])) {
	
	$id = $_POST['id'];
	$title = $_POST['title'];
	$nama = $_POST['nama'];
	$foto      = $_FILES['foto']['name'];
	$lokasi    = $_FILES['foto']['tmp_name'];

	if (!empty($lokasi)) {
		move_uploaded_file($lokasi, "../foto_content/".$foto);

		$sql = mysqli_query($koneksi,"update content_nav set title_nav = '$title', name_nav = '$nama', logo_nav = '$foto' where id_nav=$id");
	}
	else{
		$sql = mysqli_query($koneksi,"update content_nav set title_nav = '$title', name_nav = '$nama' where id_nav=$id");
	}
	}
	

	echo "<script> alert ('konten terubah'); </script>";
	echo "<script> location='index.php?url=navbar_content' </script>";
?>