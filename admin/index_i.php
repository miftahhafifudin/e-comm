<?php
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
    }
}else{
    ?>
    <h2><b>INI HOME</b></h2><p />
    <div class="row"> 
    <div class="col-md-9 col-sm-12 col-xs-12">                     
        <div >
            <div class="panel-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>            
    </div>
        <div class="col-md-3 col-sm-12 col-xs-12">                       
        <div class="panel panel-primary text-center no-boder">
            <div class="panel-body">
                <i class="fa fa-bar-chart-o fa-5x"></i>
                <h3>120 GB </h3>
            </div>
            <div >
               Disk Space Available                
            </div>
        </div>
    </div>
</div>

<div class="row"> 
    <div class="col-md-6 col-sm-12 col-xs-12">                     
        <div>
            <div class="panel-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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

