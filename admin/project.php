	<h2>DATA PROJECT</h2>
    <a href="?url=tambah_produk" class="btn btn-success btn-icon-split">
        <span class="text">Tambah PROJECT</span>
    </a><p>
<div class="row">
	<div class="col-md-10 col-sm-12 col-xs-12">

        <?php
        include '../koneksi.php';
        $sql=("select * from produk");
        $var = 0 ;
        $ee = mysqli_query($koneksi,$sql);

        while ($data = mysqli_fetch_array($ee)){
        $var++;
        ?>
    <div class="chat-box">
        <li class="clearfix <?= $var%2 == 1 ?'left': 'right' ?>">
            <span class="chat-img pull-<?= $var%2 == 1 ?'left': 'right' ?>">
                <img src="../foto_produk/<?= $data['foto_produk']; ?>" width="60" height="50">
            </span>
            <div class="chat-body">                                        
                <strong><?= $data['nama_produk']; ?></strong>                                    
                <p style="color: black">
                    <?= $data['deskripsi']; ?><br>
                    <i class="fa fa-angle-right fa-fw"></i>
                    <a href="index.php?url=ubah_produk&id=<?= $data['id_produk'];?>">more detail...</a>
                    <small class="pull-right text-muted" style="color: black;">
                        <i></i>Rp.<?= $data['harga']; ?>
                    </small>
                </p>
                
        </li>
	</div>
    <?php
     } ?>
	</div>
</div>