
<div class="row">
        <?php
        include '../koneksi.php';
        $sql=("select * from produk");
        $ee = mysqli_query($koneksi,$sql);

        while ($data = mysqli_fetch_array($ee)){
            // var_dump($data);
        ?>
    <div class="col-md-4 col-sm-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <?= $data['nama_produk']; ?>
            </div>
        </div>
    </div>
    <?php }
    ?>
</div>