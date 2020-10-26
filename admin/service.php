
<div class="row">
        <?php
        include '../koneksi.php';
        $sql=("select * from produk");
        $ee = mysqli_query($koneksi,$sql);

        while ($data = mysqli_fetch_array($ee)){
            // var_dump($data);
        ?>
    <div class="col-md-6 col-sm-4">
        <div class="chat-box">
        <li class="clearfix <?= $var%2 == 1 ?'left': 'right' ?>">
            <span class="chat-img pull-<?= $var%2 == 1 ?'left': 'right' ?>">
                <img src="../foto_produk/<?= $data['foto_produk']; ?>" width="60" height="50">
            </span>
            <div class="chat-body">                                        
                <strong style="padding-left: 4%"><?= $data['nama_produk']; ?></strong>                                    
                <p style="color: black; padding-left:4%;">
                    <?= $data['deskripsi']; ?><br>
                    <i class="fa fa-angle-right fa-fw"></i>
                    <a href="index.php?url=ubah_produk&id=<?= $data['id_produk'];?>">more detail...</a>
                    <small class="pull-right text-muted" style="color: black;">
                        <i></i>Rp.<?= $data['harga']; ?>
                    </small>
                </p>
                
        </li>
    </div>
    </div>
    <?php }
    ?>
</div>