<h2><b>CONTACT US</b></h2><p />
    <div class="row">
    <?php
            include '../koneksi.php';

            $get = mysqli_query($koneksi, "select * from contact_us");
            $br = mysqli_fetch_array($get);

            ?> 
    <div class="col-md-9 col-sm-12 col-xs-12">                     
        <div >
            <div class="panel-body">
            <?= $br['isi_contact']; ?>
            </div>
        </div>            
    </div>
        <div class="col-md-3 col-sm-12 col-xs-12">                       
        <div class="text-center">
          <img src="../foto_content/<?= $br['contact_img']; ?>" width="200">
            <p>
                <?= $br['caption_contact']; ?>
            </p>
        </div>
    </div>
</div>
<p>
<p>
<p>
<p>
<p>
<p>
<div class="row"> 
    <div class="col-md-6 col-sm-12 col-xs-12">                     
        <div>
            <div class="panel-body">
                <b>To Contact Us</b>
                <p/>
                <p/>
                <p/>
                Your Address line
            </div>
        </div>            
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12">                       
        <div class="text-center">
        </div>
    </div>
</div>