	<h2>DATA PORDUK</h2>
    <a href="?url=tambah_produk" class="btn btn-success btn-icon-split">
        <span class="text">Tambah Produk</span>
    </a><p>
<div class="row">
	<div class="col-md-10 col-sm-12 col-xs-12">

        <?php
        include '../koneksi.php';
        $halaman = 10;
        $page = isset($_GET["url"]) ? (int)$_GET["url"] : 1;
        $mulai = ($page>0) ? ($page * $halaman) - $halaman : 0;
        $result = mysqli_query($koneksi, "SELECT * FROM produk");
        $total = mysqli_num_rows($result);
        $pages = ceil($total/$halaman);          
        $sql=("select * from produk LIMIT $mulai, $halaman");
        $ee = mysqli_query($koneksi,$sql);

        while ($data = mysqli_fetch_array($ee)){
        ?>
    <div class="chat-box">
        <li class="left clearfix">
            <span class="chat-img pull-left">
                <img src="../foto_produk/<?= $data['foto_produk']; ?>" width="60" height="50">
            </span>
            <div class="chat-body">                                        
                <strong><?= $data['nama_produk']; ?></strong>                                    
                <p style="color: black">
                    <?= $data['deskripsi']; ?><br>
                    <i class="fa fa-angle-right fa-fw"></i>
                    <a href="index.php?url=ubah_produk&id=<?= $data['id_produk'];?>">more detail...</a>
                    <small class="pull-right text-muted" style="color: black;">
                        <i></i>Rp.<?= $data['harga']; ?>,00
                    </small>
                </p>
                
        </li>
	</div>
    <?php
     } ?>
     <?php for ($i=1; $i<=$pages ; $i++){ ?>
    <a href="index.php?url=produk&<?php echo $i; ?>"><?php echo $i; ?></a>
 
    <?php } ?>
	</div>
</div>