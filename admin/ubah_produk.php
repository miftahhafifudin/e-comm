<h2>UBAH PRODUK</h2>
<?php
	include '../koneksi.php';
	$id = $_GET['id'];

	$get = mysqli_query($koneksi, "select * from produk where id_produk = $id ");
	$br = mysqli_fetch_array($get);

	// echo "<pre>";
	// print_r($br);
	// echo "<pre>";
?>

<form method="post" action="ubah_produk_u.php" enctype="multipart/form-data">
	<a href="index.php?url=produk" class="btn btn-info">KEMBALI</a><p/>
	<div class="hidden">
		<label>id produk</label>
		<input type="text" name="id_produk" class="form-control" value="<?= $br['id_produk'] ?>">
	</div>
	<div class="formm-group">
		<label>Nama Produk</label>
		<input type="text" name="nama" class="form-control" value="<?= $br['nama_produk'] ?>">
	</div>
	<div class="formm-group">
		<label>Harga</label>
		<input type="number" name="harga" class="form-control" value="<?= $br['harga'] ?>">
	</div>
	<div class="formm-group">
		<label>Berat</label>
		<input type="number" name="berat" class="form-control" value="<?= $br['berat'] ?>">
	</div>
	<div class="formm-group">
		<br>
		<img src="../foto_produk/<?= $br['foto_produk']; ?>" width="200">
	</div>
	<div class="form-group">
		<label>Ganti Foto</label>
		<input type="file" name="foto" >
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea name="deskripsi" class="form-control" rows="8">
			<?= $br['deskripsi'] ?>
		</textarea>
	</div>
	<button class="btn btn-primary" name="submit">UBAH</button>
</form>