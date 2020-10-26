<h2>UBAH KONTEN NAVBAR</h2>
<?php
	include '../koneksi.php';

	$get = mysqli_query($koneksi, "select * from content_nav");
	$br = mysqli_fetch_array($get);

	// echo "<pre>";
	// print_r($br);
	// echo "<pre>";
?>

<form method="post" action="navbar_content_u.php" enctype="multipart/form-data">
	<a href="index.php?url=produk" class="btn btn-info">KEMBALI</a><p/>
	<div class="hidden">
		<label>ID</label>
		<input type="text" name="id" class="form-control" value="<?= $br['id_nav'] ?>">
	</div>
	<div class="formm-group">
		<label>Title</label>
		<input type="text" name="title" class="form-control" value="<?= $br['title_nav'] ?>">
	</div>
	<div class="formm-group">
		<label>Nama</label>
		<input type="text" name="nama" class="form-control" value="<?= $br['name_nav'] ?>">
	</div>
	<div class="formm-group">
		<br>
		<img src="../foto_content/<?= $br['logo_nav']; ?>" width="200">
	</div>
	<div class="form-group">
		<label>Ganti Logo</label>
		<input type="file" name="foto" >
	</div>
	<button class="btn btn-primary" name="submit">UBAH</button>
</form>