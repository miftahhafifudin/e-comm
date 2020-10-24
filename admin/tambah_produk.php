<h2>TAMBAH PRODUK</h2>

<form action="tambah_produk_i.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Harga (Rp)</label>
		<input type="number" class="form-control" name="harga">
	</div>
	<div class="form-group">
		<label>Berat (Gr)</label>
		<input type="number" class="form-control" name="berat">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"></textarea>
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto" accept=".jpg, .jpeg, .png">
		<font color="red">*Format Yang Bisa Diterima Hanya : .jpg, .jpeg, .png, .gif</font>
	</div>
	<button class="btn btn-primary" name="submit">SIMPAN</button>	
	
</form>