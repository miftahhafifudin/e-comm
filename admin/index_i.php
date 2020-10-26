<?php
include '../koneksi.php';
$get = mysqli_query($koneksi, "select * from content_home");
$br = mysqli_fetch_array($get);
if(isset($_GET['url'])){
    $url = $_GET['url'];

    switch ($url) {
        case 'home';
            include 'home.php';
            break;
        
        case 'produk';
            include 'produk.php';
            break;

        case 'service';
            include 'service.php';
            break;

        case 'calendar';
            include 'calendar.php';
            break;

        case 'project';
            include 'project.php';
            break;

        case 'employee';
            include 'employee.php';
            break;

        case 'tambah_produk';
            include 'tambah_produk.php';
            break;
            
        case 'hapus_produk';
            include 'hapus_produk.php';
            break;

        case 'ubah_produk';
            include 'ubah_produk.php';
            break;

        case 'navbar_content';
            include 'navbar_content.php';
            break;

        case 'home_content';
            include 'home_content.php';
            break;

        case 'about_us';
            include 'about_us.php';
            break;

        case 'about_us_content';
            include 'ubah_about_us.php';
            break;   

        case 'contact_us';
            include 'contact_us.php';
            break;

        case 'contact_us_content';
            include 'ubah_contact_us.php';
            break;
    }
}else{
    ?>
    <h2><b>INI HOME</b></h2><p />
    <div class="row"> 
    <div class="col-md-9 col-sm-12 col-xs-12">                     
        <div >
            <div class="panel-body">
            <?= $br['isi_home']; ?>
            </div>
        </div>            
    </div>
        <div class="col-md-3 col-sm-12 col-xs-12">                       
        <div class="text-center">
          <img src="../foto_content/<?= $br['home_img']; ?>" width="200">
            <p>
            <?= $br['caption_home']; ?>
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

<?Php    
}
?>

