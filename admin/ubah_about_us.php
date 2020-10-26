<h2>UBAH KONTEN ABOUT US</h2>
<?php
	include '../koneksi.php';

	$get = mysqli_query($koneksi, "select * from about_us");
	$br = mysqli_fetch_array($get);

	// echo "<pre>";
	// print_r($br);
	// echo "<pre>";
?>

<form method="post" action="ubah_about_us_u.php" enctype="multipart/form-data">
	<a href="index.php?url=produk" class="btn btn-info">KEMBALI</a><p/>
	<div class="hidden">
		<label>ID</label>
		<input type="text" name="id" class="form-control" value="<?= $br['id_about'] ?>">
	</div>
	<div class="formm-group">
		<label>Isi Abot Us</label>
		<textarea name="isi" class="form-control" rows="8">
			<?= $br['isi_about'] ?>
		</textarea>
	</div>
	<div class="formm-group">
		<label>Caption</label>
		<input type="text" name="capt" class="form-control" value="<?= $br['caption_about'] ?>">
	</div>
	<div class="formm-group">
		<br>
		<img src="../foto_content/<?= $br['about_img']; ?>" width="200">
	</div>
	<div class="form-group">
		<label>Ganti Logo</label>
		<input type="file" name="foto" >
	</div>
	<button class="btn btn-primary" name="submit">UBAH</button>
</form>