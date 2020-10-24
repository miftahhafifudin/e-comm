<?php
include '../koneksi.php';
if(isset($_POST['submit'])){
	$nama      = $_POST['nama'];
	$harga 	   = $_POST['harga'];
	$berat 	   = $_POST['berat'];
	$deskripsi = $_POST['deskripsi'];
	$foto      = $_FILES['foto']['name'];
	$lokasi    = $_FILES['foto']['tmp_name'];

	$sql = ("insert into produk (nama_produk,harga,berat,foto_produk,deskripsi) value ('$nama','$harga','$berat','$foto','$deskripsi')");
	$input = mysqli_query($koneksi,$sql);
	move_uploaded_file($lokasi, "../foto_produk/".$foto);

	if($sql){
		?>
		<script type="text/javascript">
			alert("data disimpan");
			window.location = 'index.php?url=produk'
		</script>
		<?php
	}
} ?>